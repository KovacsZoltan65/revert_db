<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE DEFINER=`ej2_showtime_p`@`localhost` PROCEDURE `query_of_legal_entity_calendar_data_for_detailed_xls`(ev int(4), honap int(2), legalentities text)
BEGIN
        DECLARE tmp_calendar_data varchar(40);
        DECLARE tmp_all_day varchar(40);

        SET tmp_calendar_data := (MD5(RAND()));
        SET tmp_all_day := (MD5(RAND()));

        drop temporary table if exists tmp_calendar_data;
        drop temporary table if exists tmp_all_day;

        CREATE TEMPORARY TABLE tmp_calendar_data(legalentity int);
        CREATE TEMPORARY TABLE tmp_all_day(datum date);

        BEGIN
            SET @value := legalentities;

            WHILE (LOCATE(',', @value) > 0) DO
                SET @legalentity = SUBSTRING(@value,1, LOCATE(',',@value)-1);
                SET @value = SUBSTRING(@value, LOCATE(',',@value) + 1);

                INSERT INTO tmp_calendar_data VALUE ( CONVERT( @legalentity, unsigned integer) );
            END WHILE;
        END;

        INSERT INTO tmp_all_day (datum)
        SELECT date_field
        FROM (
            SELECT MAKEDATE(ev,1) + INTERVAL (honap-1) MONTH + INTERVAL daynum DAY date_field
            FROM (
                SELECT t*10+u daynum
                FROM (SELECT 0 t UNION SELECT 1 UNION SELECT 2 UNION SELECT 3) A,(SELECT 0 u UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) B
                ORDER BY daynum
            ) AA
        ) AAA
        WHERE MONTH(date_field) = honap;

        select
            tmp_all_day.datum as _date,
            tmp_calendar_data.legalentity as core_legal_entities_id,
            naptar.id as calendar_id,
            entities_query.person_name as nev,
            case
                when attendance_offday_types_id is null and attendance_abscence_types_id is null then shifts.shift_start_time
                else null
            end as erkezes,
            case
                when attendance_offday_types_id is null and attendance_abscence_types_id is null then shifts.shift_end_time
                when attendance_offday_types_id is not null then attendance_offday_types_id
                when attendance_abscence_types_id is not null then attendance_abscence_types_id
            end as tavozas,
            attendance_abscence_types_id,
            attendance_offday_types_id,
            shifts.shift_code as muszak_kod,
            case
                when attendance_offday_types_id is not null or attendance_abscence_types_id is not null then tavol.ido
                when shifts.shift_code is not null then shifts.shift_time
                else null
            end as ora,
            case
                when attendance_offday_types_id is not null or attendance_abscence_types_id is not null then null
                else shift_break_time
            end as szunet,
            carried_balance.balance as balansz_ido,
            tulorak.oraszam as tulora,        
            tulorak.attendance_legal_entities_shifts_id,
            outside_shifts.type as ku_type,
            outside_shifts.oraszam as ku_ido,
            case
                when attendance_offday_types_id is not null then szabi.ido
                when attendance_abscence_types_id is not null and attendance_abscence_types_id != 44 then tavol.ido
                else null
            end as tavollet,
            naptar.rolled_balance as csusztatas,
            entities_query.end_date as end_date,
            entities_query.start_date as start_date,
            case 
                when naptar.legal_entity_confirmed_date = '1000-01-01' || naptar.legal_entity_confirmed_date is null then null
                else naptar.legal_entity_confirmed_date
            end as legal_entity_confirmed_date,
            case 
                when naptar.boss_confirmed_date = '1000-01-01' || naptar.boss_confirmed_date is null then null
                else naptar.boss_confirmed_date
            end as boss_confirmed_date
        from
            tmp_calendar_data
            cross join tmp_all_day
            left join attendance_legal_entities_calendar as naptar on tmp_calendar_data.legalentity = naptar.core_legal_entities_id and naptar._date = tmp_all_day.datum
            left join view_legal_entities_query as entities_query on naptar.core_legal_entities_id = entities_query.core_legal_entities_id
            left join attendance_legal_entities_carried_balance as carried_balance on naptar.core_legal_entities_id = carried_balance.core_legal_entities_id
            left join (
                select
                    registered_calendar_id, attendance_legal_entities_shifts_id, sec_to_time(sum(time_in_sec)) as oraszam
                from (
                    select
                        registered_calendar_id, attendance_legal_entities_shifts_id,
                        case
                            when start_time < end_time then time_to_sec(time_format(abs(sum(date_sub(timediff(end_time, start_time), interval 0 hour))), '%k:%i'))
                            when start_time > end_time then time_to_sec(time_format(abs(sum(date_sub(timediff(start_time, end_time), interval 24 hour))), '%k:%i'))
                        end as time_in_sec
                    from attendance_legal_entities_overtimes
                    group by id
                ) as x
                group by
                    attendance_legal_entities_shifts_id,
                    registered_calendar_id
            ) as tulorak on tulorak.registered_calendar_id = naptar.id
            left join (
                select
                    outside_shifts_time.attendance_legal_entities_calendar_id,
                    outside_shifts_time.type,
                    case
                        when standby_overtimes.id is null then time_format(abs(sum(date_sub(timediff(outside_shifts_time.end_time, outside_shifts_time.start_time), interval 0 hour))), '%k:%i')
                        when standby_overtimes.id is not null then time_format(abs(sum(date_sub(timediff(timediff(outside_shifts_time.end_time, timediff(standby_overtimes.end_time, standby_overtimes.start_time)), outside_shifts_time.start_time), interval 0 hour))), '%k:%i')
                    end as oraszam
                from
                    attendance_legal_entities_outside_shifts_time as outside_shifts_time
                    left join attendance_standby_overtimes as standby_overtimes on standby_overtimes.attendance_legal_entities_outside_shifts_time_id = outside_shifts_time.id
                group by
                    outside_shifts_time.attendance_legal_entities_calendar_id,
                    outside_shifts_time.type,
                    standby_overtimes.id
            ) as outside_shifts on outside_shifts.attendance_legal_entities_calendar_id = naptar.id
            left join (
                select
                    attendance_legal_entities_calendar_id,
                    tavollet.attendance_abscence_types_id,
                    _date,
                    time_format(abs(date_sub(timediff(tavollet_ido.end_time, tavollet_ido.start_time), interval shift_break_time minute)), '%k:%i') as ido
                from 
                    view_legal_entities_abscences_query as tavollet
                    left join attendance_legal_entities_abscences as tavollet_ido on tavollet.attendance_legal_entities_abscences_id = tavollet_ido.id
                    left join attendance_legal_entities_shifts as shift on shift.registered_calendar_id = tavollet.attendance_legal_entities_calendar_id
            ) as tavol on tavol.attendance_legal_entities_calendar_id = naptar.id
            left join (
                select
                    attendance_legal_entities_calendar_id,
                    szabadsag.attendance_offday_types_id,
                    _date,
                    time_format(abs(date_sub(timediff(szabadsag_ido.end_time, szabadsag_ido.start_time), interval shift_break_time minute)), '%k:%i') as ido 
                from
                    view_legal_entities_offdays_query as szabadsag  
                    left join attendance_legal_entities_abscences as szabadsag_ido on szabadsag.attendance_legal_entities_abscences_id = szabadsag_ido.id
                    left join attendance_legal_entities_shifts as shift on shift.registered_calendar_id = szabadsag.attendance_legal_entities_calendar_id
            ) as szabi on szabi.attendance_legal_entities_calendar_id = naptar.id 
            left join (
                select
                    shifts.registered_calendar_id,
                    shifts.id as shift_id,
                    shift_types.code as shift_code,
                    case
                        when overtimes.attendance_legal_entities_shifts_id is not null then
                            case
                                when shifts.start_time < shifts.end_time then time_format(abs(date_sub(timediff(timediff(shifts.end_time, timediff(overtimes.end_time, overtimes.start_time)), shifts.start_time), interval shift_break_time minute)), '%k:%i')
                                when shifts.start_time > shifts.end_time then time_format(abs(date_sub(timediff(timediff(shifts.start_time, timediff(overtimes.start_time, overtimes.end_time)), shifts.end_time), interval (24*60)-shift_break_time minute)), '%k:%i')
                            end
                        when overtimes.attendance_legal_entities_shifts_id is null then
                            case
                                when shifts.start_time < shifts.end_time then time_format(abs(date_sub(timediff(shifts.end_time, shifts.start_time), interval shift_break_time minute)), '%k:%i')
                                when shifts.start_time > shifts.end_time then time_format(abs(date_sub(timediff(shifts.start_time, shifts.end_time), interval (24*60)-shift_break_time minute)), '%k:%i')
                            end
                    end as shift_time,
                    shifts.start_time as shift_start_time,
                    shifts.end_time as shift_end_time,
                    shifts.shift_break_time,
                    overtimes.id as overtime_id,
                    overtimes.start_time as overtime_start_time,
                    overtimes.end_time as overtime_end_time,
                    overtimes.attendance_legal_entities_shifts_id as overtime_shifts_id
                from
                    attendance_legal_entities_shifts as shifts
                    left join attendance_shift_types as shift_types on shifts.attendance_shift_types_id = shift_types.id
                    left join attendance_legal_entities_overtimes as overtimes on overtimes.registered_calendar_id = shifts.registered_calendar_id or overtimes.attendance_legal_entities_shifts_id = shifts.id
            ) as shifts on shifts.registered_calendar_id = naptar.id
        where
            entities_query.end_date = '' or entities_query.end_date >= DATE_ADD(MAKEDATE(ev, 1), interval (honap)-1 month)
        group by
            core_legal_entities_id,
            _date,
            erkezes,
            tulorak.oraszam,
            naptar.id,
            szabi.attendance_offday_types_id,
            tavol.attendance_abscence_types_id,
            shifts.shift_start_time,
            shifts.shift_end_time,
            shifts.shift_code,
            tavol.ido,
            shifts.shift_time,
            shifts.shift_break_time,
            carried_balance.balance,
            tulorak.attendance_legal_entities_shifts_id,
            outside_shifts.type,
            outside_shifts.oraszam,
            szabi.ido
        order by
            core_legal_entities_id,
            _date;

        drop temporary table if exists tmp_calendar_data;
        drop temporary table if exists tmp_all_day;
    END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS query_of_legal_entity_calendar_data_for_detailed_xls");
    }
};
