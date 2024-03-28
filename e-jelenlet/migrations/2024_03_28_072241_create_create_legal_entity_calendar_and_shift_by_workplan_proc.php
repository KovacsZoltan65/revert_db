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
        DB::unprepared("CREATE DEFINER=`ej2_showtime_p`@`localhost` PROCEDURE `create_legal_entity_calendar_and_shift_by_workplan`(
                legal_entity_id int, 
                workplan_id int, 
                start_date text, 
                end_date text
            )
BEGIN


        # Eldobjuk a régi munkarendhez tartozó táblákat
        DELETE FROM attendance_legal_entities_calendar WHERE core_legal_entities_id = legal_entity_id and _date >= STR_TO_DATE(start_date, \"%Y-%m-%d\") and _date <= STR_TO_DATE(end_date, \"%Y-%m-%d\");

        set @end_date = STR_TO_DATE(end_date, \"%Y-%m-%d\"); 

        BEGIN 
            SET @t_current = STR_TO_DATE(start_date, \"%Y-%m-%d\"); 
            SET @t_end = DATE_ADD(NOW(), INTERVAL 1 YEAR); 
            WHILE(@t_current<= @end_date) DO
                START TRANSACTION;
                    INSERT INTO attendance_legal_entities_calendar (id, core_legal_entities_id, _date, balance, rolled_balance, balance_to_overtime, legal_entity_confirmed, legal_entity_confirmed_date, boss_confirmed, boss_confirmed_date, boss_confirmed_id, winaccess_failure, full_day_bonus, created_at, updated_at)
                        VALUES (null, legal_entity_id, STR_TO_DATE(@t_current, \"%Y-%m-%d\"), 0, 0, 0, 0, '1000-01-01', 0, '1000-01-01', null, 0, 0, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

                        set @last_id = LAST_INSERT_ID();

                        IF (select attendance_shift_types_id from attendance_workplan_shifts
                                where attendance_workplans_id = workplan_id
                                and _date = @t_current) is not null
                        then 
                                INSERT INTO attendance_legal_entities_shifts (id, registered_calendar_id, payroll_calendar_id, attendance_shift_types_id, start_time, end_time, shift_break_time, balance_flag, preparation_start, preparation_end) 
                                    VALUES(
                                        null, 
                                        @last_id, 
                                        @last_id,
                                        (select attendance_shift_types_id from attendance_workplan_shifts where attendance_workplans_id = workplan_id and _date = @t_current),
                                        CASE 
                                                when (select ast.trunk_time_start  from attendance_workplan_shifts as aws 
                                                        join attendance_shift_types as ast on aws.attendance_shift_types_id = ast.id
                                                        where aws.attendance_workplans_id = workplan_id and aws._date = @t_current) is null then 0
                                                else (select ast.trunk_time_start  from attendance_workplan_shifts as aws 
                                                        join attendance_shift_types as ast on aws.attendance_shift_types_id = ast.id
                                                        where aws.attendance_workplans_id = workplan_id and aws._date = @t_current)
                                        END,
                                        CASE
                                                when (select ast.trunk_time_end from attendance_workplan_shifts as aws 
                                                        join attendance_shift_types as ast on aws.attendance_shift_types_id = ast.id
                                                        where aws.attendance_workplans_id = workplan_id and aws._date = @t_current) is null then 0
                                                else (select ast.trunk_time_end  from attendance_workplan_shifts as aws 
                                                        join attendance_shift_types as ast on aws.attendance_shift_types_id = ast.id
                                                        where aws.attendance_workplans_id = workplan_id and aws._date = @t_current)
                                        END,
                                        CASE
                                                when (SELECT sum(asb.length) FROM attendance_shift_breaks as asb
                                                        join attendance_workplan_shifts as aws on asb.attendance_shift_types_id = aws.attendance_shift_types_id
                                                        where aws.attendance_workplans_id = workplan_id
                                                        and aws._date = STR_TO_DATE(@t_current, \"%Y-%m-%d\")) is null then 0
                                                else (SELECT sum(asb.length) FROM attendance_shift_breaks as asb
                                                        join attendance_workplan_shifts as aws on asb.attendance_shift_types_id = aws.attendance_shift_types_id
                                                        where aws.attendance_workplans_id = workplan_id
                                                        and aws._date = STR_TO_DATE(@t_current, \"%Y-%m-%d\"))
                                        END,

                                        DEFAULT,
                                        DEFAULT,
                                        DEFAULT	
                                    );
                        END IF;
                COMMIT;
                SET @t_current = DATE_ADD(@t_current, INTERVAL 1 DAY); 
            END WHILE; 
        END; 
        END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS create_legal_entity_calendar_and_shift_by_workplan");
    }
};
