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
        DB::unprepared("CREATE DEFINER=`ej2_showtime_p`@`localhost` PROCEDURE `get_calendar_data_for_scheduleplanner`(legalentities TEXT, month_start_date DATE, month_end_date DATE, firm_id INT, parameter_34 INT, parameter_35 INT)
BEGIN
        DECLARE temp_legal_entities_ids VARCHAR(40);
        DECLARE temp_legal_entities_datas VARCHAR(40);
        DECLARE temp_core_holidays VARCHAR(40);
        DECLARE temp_abscence_types VARCHAR(40);
        DECLARE temp_workplans VARCHAR(40);
        DECLARE temp_workplan_shifts VARCHAR(40);
        DECLARE temp_worktimelimits VARCHAR(40);

        SET temp_legal_entities_ids := (MD5(RAND()));
        SET temp_legal_entities_datas := (MD5(RAND()));
        SET temp_core_holidays := (MD5(RAND()));
        SET temp_abscence_types := (MD5(RAND()));
        SET temp_workplans := (MD5(RAND()));
        SET temp_workplan_shifts := (MD5(RAND()));
        SET temp_worktimelimits := (MD5(RAND()));

        DROP TEMPORARY TABLE IF EXISTS temp_legal_entities_ids;
        DROP TEMPORARY TABLE IF EXISTS temp_legal_entities_datas;
        DROP TEMPORARY TABLE IF EXISTS temp_core_holidays;
        DROP TEMPORARY TABLE IF EXISTS temp_abscence_types;
        DROP TEMPORARY TABLE IF EXISTS temp_workplans;
        DROP TEMPORARY TABLE IF EXISTS temp_workplan_shifts;
        DROP TEMPORARY TABLE IF EXISTS temp_worktimelimits;

        CREATE TEMPORARY TABLE temp_legal_entities_ids (core_legal_entities_id INT PRIMARY KEY);
        CREATE TEMPORARY TABLE temp_legal_entities_datas (core_legal_entities_id INT, person_name VARCHAR(256), legal_entity_name VARCHAR(256), entity_name VARCHAR(256), employment_start VARCHAR(256), employment_end VARCHAR(256), last_export VARCHAR(256));
        CREATE TEMPORARY TABLE temp_core_holidays (date DATE, type INT);
        CREATE TEMPORARY TABLE temp_abscence_types (abscence_types_id INT, status TINYINT);
        CREATE TEMPORARY TABLE temp_workplans (core_legal_entities_id INT, attendance_workplans_id INT, start_date DATE, end_date DATE, name VARCHAR(128), attendance_workplan_categories_id INT, check_by_law INT, warning_or_forbidding INT, working_with_schedule_planner INT, number_of_hours_per_day DECIMAL(4,2), number_of_hours_per_day_is_default_if_absence INT, balance_collector INT);
        CREATE TEMPORARY TABLE temp_workplan_shifts (id INT, attendance_workplans_id INT, attendance_day_types_id INT, attendance_shift_types_id INT, _date DATE);
        CREATE TEMPORARY TABLE temp_worktimelimits (core_legal_entities_id INT, worktimelimits_id INT, worktimelimits_start_date DATE, worktimelimits_end_date DATE, worktimelimits_name VARCHAR(128), worktimelimits_daily_workhours VARCHAR(256), worktimelimit_abscences_types_id INT);

        BEGIN
            SET @value := legalentities;

            WHILE (LOCATE('|', @value) > 0) DO
                SET @core_legal_entities_id = SUBSTRING(@value, 1, LOCATE('|', @value) - 1);
                SET @value = SUBSTRING(@value, LOCATE('|', @value) + 1);
                INSERT INTO temp_legal_entities_ids VALUE(CONVERT(@core_legal_entities_id, UNSIGNED INTEGER));
            END WHILE;
        END;

        INSERT INTO temp_legal_entities_datas (core_legal_entities_id, person_name, legal_entity_name, entity_name, employment_start, employment_end, last_export)
        SELECT
            a.core_legal_entities_id,
            b.person_name,
            concat(b.person_name, ' (', a.entity_name, ')') as legal_entity_name,
            a.entity_name,
            a.employment_start,
            a.employment_end,
            a.last_export
        FROM (
            SELECT
                core_legal_entities_id,
                group_concat(IF(core_legal_entities_attributes_id = 1, VALUE, '') SEPARATOR '') AS entity_name,
                group_concat(IF(core_legal_entities_attributes_id = 3, VALUE, '') SEPARATOR '') AS core_persons_id,
                group_concat(IF(core_legal_entities_attributes_id = 7, VALUE, '') SEPARATOR '') AS employment_start,
                group_concat(IF(core_legal_entities_attributes_id = 8, VALUE, '') SEPARATOR '') AS employment_end,
                group_concat(IF(core_legal_entities_attributes_id = 9, VALUE, '') SEPARATOR '') AS last_export
            FROM
                core_legal_entities_attributes_values
            WHERE
                core_legal_entities_attributes_id IN (1, 3, 7, 8, 9)
            GROUP BY
                core_legal_entities_id
        ) AS a
        INNER JOIN (
            SELECT
                core_persons_id,
                group_concat(IF(core_persons_attributes_id = 4, VALUE, '') SEPARATOR '') AS person_name
            FROM
                core_persons_attributes_values
            WHERE
                core_persons_attributes_id IN (4)
            GROUP BY
                core_persons_id
        ) AS b ON b.core_persons_id = a.core_persons_id;

        INSERT INTO temp_core_holidays (date, type)
        SELECT
            date,
            type
        FROM
            core_holidays
        WHERE
            core_firms_id = firm_id;

        INSERT INTO temp_abscence_types (abscence_types_id, status)
        SELECT
            attendance_abscence_types_id,
            status
        FROM
            attendance_abscence_types_core_firms_rel
        WHERE
            core_firms_id = firm_id;

        INSERT INTO temp_workplans (core_legal_entities_id, attendance_workplans_id, start_date, end_date,  name, attendance_workplan_categories_id, check_by_law, warning_or_forbidding, working_with_schedule_planner, number_of_hours_per_day, number_of_hours_per_day_is_default_if_absence, balance_collector)
        SELECT
            a.core_legal_entities_id,
            a.attendance_workplans_id,
            a.start_date,
            a.end_date,
            b.name,
            b.attendance_workplan_categories_id,
            b.check_by_law, b.warning_or_forbidding,
            b.working_with_schedule_planner,
            b.number_of_hours_per_day,
            b.number_of_hours_per_day_is_default_if_absence,
            b.balance_collector
        FROM
            attendance_workplans_core_legal_entities_rel AS a
            LEFT JOIN attendance_workplans AS b ON a.attendance_workplans_id = b.id
        WHERE
            (
                month_start_date BETWEEN a.start_date AND a.end_date
                OR month_end_date BETWEEN a.start_date AND a.end_date
                OR a.start_date BETWEEN month_start_date AND month_end_date
                OR a.end_date BETWEEN month_start_date AND month_end_date
            );

        INSERT INTO temp_workplan_shifts (id, attendance_workplans_id, attendance_day_types_id, attendance_shift_types_id, _date)
        SELECT
            id,
            attendance_workplans_id,
            attendance_day_types_id,
            attendance_shift_types_id,
            _date
        FROM
            attendance_workplan_shifts
        WHERE
            _date >= month_start_date AND _date <= month_end_date;

        INSERT INTO temp_worktimelimits (core_legal_entities_id, worktimelimits_id, worktimelimits_start_date, worktimelimits_end_date, worktimelimits_name, worktimelimits_daily_workhours, worktimelimit_abscences_types_id)
        SELECT
            a.core_legal_entities_id,
            a.attendance_worktimelimits_id,
            b.start_date,
            b.end_date,
            b.name,
            b.daily_workhours AS worktimelimits_daily_workhours,
            group_concat(c.abscence_types_id ORDER BY c.abscence_types_id) AS abscence_types_id
        FROM
            attendance_worktimelimit_assignments AS a
            LEFT JOIN attendance_worktimelimits AS b ON a.attendance_worktimelimits_id = b.id
            LEFT JOIN attendance_worktimelimit_abscences AS c ON a.attendance_worktimelimits_id = c.attendance_worktimelimits_id
        WHERE
            (
                month_start_date BETWEEN a.start_date AND a.end_date
                OR month_end_date BETWEEN a.start_date AND a.end_date
                OR a.start_date BETWEEN month_start_date AND month_end_date
                OR a.end_date BETWEEN month_start_date AND month_end_date
            )
        GROUP BY
            a.core_legal_entities_id,
            a.attendance_worktimelimits_id;

        SELECT
            calendar.core_legal_entities_id,
            calendar._date,
            calendar.attendance_offday_types_id,
            calendar.attendance_abscence_types_id,
            CASE
                WHEN find_in_set(calendar.attendance_abscence_types_id, group_concat(worktimelimits.worktimelimit_abscences_types_id)) THEN worktimelimits.worktimelimit_abscences_types_id
                ELSE NULL
            END AS worktimelimit_abscences_types_id,
            workplans.number_of_hours_per_day_is_default_if_absence,
            workplans.number_of_hours_per_day,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date OR (legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '') OR legal_entities_datas.last_export >= calendar._date OR calendar.attendance_shift_types_id IS NULL OR workplans.working_with_schedule_planner = 0 THEN day(calendar._date)
                ELSE calendar.shift_types_code
            END AS text,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date THEN concat('scheduleplanner_date_less_than_employment_start')
                WHEN legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '' THEN concat('scheduleplanner_date_greater_than_employment_end')
                WHEN legal_entities_datas.last_export >= calendar._date THEN concat('scheduleplanner_date_less_than_last_export')
                WHEN (calendar.attendance_offday_types_id IS NOT NULL OR calendar.attendance_abscence_types_id IS NOT NULL) AND calendar.boss_confirmed = 1 AND calendar.legal_entity_confirmed = 1 THEN concat('scheduleplanner_full_confirmed_abscence_is_set')
                WHEN (calendar.attendance_offday_types_id IS NOT NULL OR calendar.attendance_abscence_types_id IS NOT NULL) AND (calendar.boss_confirmed = 1 OR calendar.legal_entity_confirmed = 1) THEN concat('scheduleplanner_confirmed_abscence_is_set_by_one_but_parameter_not_allow')
                WHEN workplans.working_with_schedule_planner = 1 AND (calendar.attendance_offday_types_id IS NOT NULL OR calendar.attendance_abscence_types_id is not null) AND (legal_entities_rejections_status = 1 OR boss_rejections_status = 1) THEN concat('scheduleplanner_rejected_abscence_is_set_but_parameter_not_allow')
                WHEN workplans.working_with_schedule_planner = 0 THEN concat('scheduleplanner_no_cooperative_workplan')
                ELSE calendar._date
            END AS tooltip,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date OR (legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '') OR legal_entities_datas.last_export >= calendar._date OR workplans.working_with_schedule_planner = 0 THEN NULL
                ELSE day(calendar._date)
            END AS day,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date OR (legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '') OR legal_entities_datas.last_export >= calendar._date OR workplans.working_with_schedule_planner = 0 THEN NULL
                ELSE calendar._date
            END AS date,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date OR (legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '') OR legal_entities_datas.last_export >= calendar._date OR workplans.working_with_schedule_planner = 0 THEN NULL
                ELSE calendar.shift_types_id
            END AS shift1,
            CASE
                WHEN calendar.overtimes_id IS NOT NULL AND calendar.overtimes_attendance_legal_entities_shifts_id IS NOT NULL THEN time_format(abs(date_sub(timediff(calendar.overtimes_end_time, calendar.overtimes_start_time), interval 0 minute)), '%k:%i')
                ELSE NULL
            END AS overtime,
            CASE
                WHEN ((worktimelimits.worktimelimits_start_date <= calendar._date AND worktimelimits.worktimelimits_end_date >= calendar._date) OR calendar.holidays_type = 3) AND calendar.attendance_abscence_types_id IS NULL AND calendar.attendance_offday_types_id IS NULL AND calendar.shift_types_trunk_time_start < calendar.shift_types_trunk_time_end THEN
                    CASE
                        WHEN calendar.shifts_start_time < calendar.shifts_end_time THEN time_format(abs(date_sub(timediff(calendar.shifts_end_time, calendar.shifts_start_time), INTERVAL calendar.shift_break_time MINUTE)), '%k:%i')
                        ELSE time_format(abs(date_sub(timediff(time_format(abs(date_add(calendar.shifts_end_time, INTERVAL 1440 MINUTE)), '%k:%i'), calendar.shifts_start_time), INTERVAL calendar.shift_break_time MINUTE)), '%k:%i')
                    END
                WHEN ((worktimelimits.worktimelimits_start_date <= calendar._date AND worktimelimits.worktimelimits_end_date >= calendar._date) OR calendar.holidays_type = 3) AND calendar.attendance_abscence_types_id IS NULL AND calendar.attendance_offday_types_id IS NULL AND calendar.shift_types_trunk_time_start > calendar.shift_types_trunk_time_end THEN time_format(abs(date_sub(timediff(calendar.shifts_end_time, date_sub(calendar.shift_types_trunk_time_start, INTERVAL 24 HOUR)), INTERVAL calendar.shift_break_time MINUTE)), '%k:%i')
                WHEN calendar.attendance_abscence_types_id IS NOT NULL OR calendar.attendance_offday_types_id IS NOT NULL THEN
                    CASE
                        WHEN calendar.abscences_start_time <= calendar.abscences_end_time THEN time_format(abs(date_sub(timediff(calendar.abscences_end_time, calendar.abscences_start_time), INTERVAL calendar.shift_break_time MINUTE)), '%k:%i')
                        ELSE time_format(abs(date_sub(timediff(calendar.abscences_start_time, calendar.abscences_end_time), INTERVAL 24 HOUR)), '%k:%i')
                    END
                ELSE NULL
            END AS shift1_time,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date OR (legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '') OR legal_entities_datas.last_export >= calendar._date OR workplans.working_with_schedule_planner = 0 THEN NULL
                ELSE calendar.shift_types_id
            END AS saved_shift1,
            NULL AS shift2,
            NULL AS shift2_time,
            NULL AS saved_shift2,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date OR (legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '') OR legal_entities_datas.last_export >= calendar._date OR workplans.working_with_schedule_planner = 0 THEN NULL
                ELSE calendar.id
            END AS calendar_id,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date OR (legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '') OR legal_entities_datas.last_export >= calendar._date OR workplans.working_with_schedule_planner = 0 THEN NULL
                ELSE workplans.attendance_workplan_categories_id
            END AS workplan_category,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date OR (legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '') OR legal_entities_datas.last_export >= calendar._date OR workplans.working_with_schedule_planner = 0 THEN NULL
                ELSE
                    CASE
                        WHEN calendar.holidays_type = 1 THEN concat('color_payed')
                        WHEN calendar.holidays_type = 2 THEN concat('color_workfree')
                        WHEN calendar.holidays_type = 3 THEN concat('color_moved')
                        WHEN dayofweek(calendar._date) = 7 THEN concat('color_sat')
                        WHEN dayofweek(calendar._date) = 1 THEN concat('color_sun')
                        ELSE concat('color_normal')
                    END
            END AS orig_color,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date OR (legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '') OR legal_entities_datas.last_export >= calendar._date OR workplans.working_with_schedule_planner = 0 THEN NULL
                ELSE
                    CASE
                        WHEN calendar.holidays_type = 1 THEN 3
                        WHEN calendar.holidays_type = 2 THEN 6
                        WHEN calendar.holidays_type = 3 THEN 5
                        WHEN dayofweek(calendar._date) = 7 THEN 1
                        WHEN dayofweek(calendar._date) = 1 THEN 1
                    END
            END AS orig_day_type,
            CASE
                WHEN legal_entities_datas.employment_start > calendar._date OR (legal_entities_datas.employment_end < calendar._date AND legal_entities_datas.employment_end != '') OR legal_entities_datas.last_export >= calendar._date OR workplans.working_with_schedule_planner = 0 THEN
                    CASE
                        WHEN dayofweek(calendar._date) NOT IN (7,1) THEN
                            CASE
                                WHEN (calendar.attendance_offday_types_id IS NOT NULL OR calendar.attendance_abscence_types_id IS NOT NULL) AND calendar.boss_confirmed = 1 AND calendar.legal_entity_confirmed = 1 THEN concat('workplan_empty_day color_forbidden_by_absence')
                                WHEN (calendar.attendance_offday_types_id IS NOT NULL OR calendar.attendance_abscence_types_id IS NOT NULL) AND (calendar.boss_confirmed = 1 OR calendar.legal_entity_confirmed = 1) THEN
                                    CASE
                                        WHEN parameter_35 = 6 THEN concat('workplan_day color_overwritten_absence')
                                        ELSE concat('workplan_empty_day color_forbidden_by_absence')
                                    END
                                WHEN (calendar.attendance_offday_types_id IS NOT NULL OR calendar.attendance_abscence_types_id IS NOT NULL) AND (calendar.legal_entities_rejections_status = 1 OR calendar.boss_rejections_status = 1) THEN
                                    CASE
                                        WHEN parameter_34 = 6 THEN concat('workplan_day color_overwritten_absence')
                                        ELSE concat('workplan_empty_day color_forbidden_by_absence')
                                    END
                                ELSE concat('workplan_empty_day')
                            END
                        WHEN dayofweek(calendar._date) = 7 THEN concat('workplan_empty_day color_sat')
                        WHEN dayofweek(calendar._date) = 1 THEN concat('workplan_empty_day color_sun')
                    END
                ELSE
                    CASE
                        WHEN (calendar.attendance_offday_types_id IS NOT NULL OR calendar.attendance_abscence_types_id IS NOT NULL) AND calendar.boss_confirmed = 1 AND calendar.legal_entity_confirmed = 1 THEN concat('workplan_empty_day color_forbidden_by_absence')
                        WHEN (calendar.attendance_offday_types_id IS NOT NULL OR calendar.attendance_abscence_types_id IS NOT NULL) AND (calendar.boss_confirmed = 1 OR calendar.legal_entity_confirmed = 1) THEN
                            CASE
                                WHEN parameter_35 = 6 THEN concat('workplan_day color_overwritten_absence')
                                ELSE concat('workplan_empty_day color_forbidden_by_absence')
                            END
                        WHEN (calendar.attendance_offday_types_id IS NOT NULL OR calendar.attendance_abscence_types_id IS NOT NULL) AND (calendar.legal_entities_rejections_status = 1 OR calendar.boss_rejections_status = 1) THEN
                            CASE
                                WHEN parameter_34 = 6 THEN concat('workplan_day color_overwritten_absence')
                                ELSE concat('workplan_empty_day color_forbidden_by_absence')
                            END
                        ELSE
                            CASE
                                WHEN workplan_shifts.attendance_day_types_id = 1 AND legal_entities_datas.last_export < calendar._date THEN concat('workplan_day color_rest')
                                WHEN workplan_shifts.attendance_day_types_id = 2 AND legal_entities_datas.last_export < calendar._date  THEN concat('workplan_day color_free')
                                WHEN workplan_shifts.attendance_day_types_id = 3 THEN concat('workplan_day color_payed')
                                WHEN workplan_shifts.attendance_day_types_id = 4 AND calendar.attendance_shift_types_id IS NOT NULL THEN concat('workplan_day color_work')
                                WHEN workplan_shifts.attendance_day_types_id = 4 AND calendar.attendance_shift_types_id IS NULL THEN concat('workplan_day color_normal')
                                WHEN workplan_shifts.attendance_day_types_id = 5 THEN concat('workplan_day color_moved')
                                WHEN workplan_shifts.attendance_day_types_id = 6 THEN concat('workplan_day color_workfree')
                            END
                    END
            END AS class,
            CASE
                WHEN worktimelimits.worktimelimits_start_date <= calendar._date AND worktimelimits.worktimelimits_end_date >= calendar._date AND ((workplan_shifts.attendance_day_types_id = 4 OR workplan_shifts.attendance_day_types_id = 5) AND dayofweek(calendar._date) NOT IN (1,7) OR calendar.holidays_type = 3) THEN worktimelimits.worktimelimits_daily_workhours
                ELSE 0
            END AS daily_workhours,
            CASE
                WHEN worktimelimits.worktimelimits_start_date <= calendar._date AND worktimelimits.worktimelimits_end_date >= calendar._date THEN
                    CASE
                        WHEN calendar.attendance_abscence_types_id IS NULL AND calendar.attendance_offday_types_id IS NULL THEN
                            CASE
                                WHEN calendar.shifts_start_time < calendar.shifts_end_time THEN time_format(abs(date_sub(timediff(calendar.shifts_end_time, calendar.shifts_start_time), INTERVAL calendar.shift_break_time MINUTE)), '%k:%i')
                                ELSE time_format(abs(date_sub(timediff(time_format(abs(date_add(calendar.shifts_end_time, INTERVAL 1440 MINUTE)), '%k:%i'), calendar.shifts_start_time), INTERVAL calendar.shift_break_time MINUTE)), '%k:%i')
                            END
                        WHEN calendar.attendance_abscence_types_id IS NOT NULL OR calendar.attendance_offday_types_id IS NOT NULL THEN
                            CASE
                                WHEN workplans.number_of_hours_per_day_is_default_if_absence = 0 THEN time_format(abs(date_sub(timediff(calendar.abscences_end_time, calendar.abscences_start_time), INTERVAL calendar.shift_break_time MINUTE)), '%k:%i')
                                ELSE
                                    CASE
                                        WHEN calendar.shifts_id IS NOT NULL THEN REPLACE(workplans.number_of_hours_per_day, '.', ':')
                                        ELSE NULL
                                    END
                            END
                        ELSE NULL
                    END
                ELSE NULL
            END AS necessary,
            legal_entities_datas.employment_start AS employment_start,
            legal_entities_datas.employment_end AS employment_end,
            dayofweek(calendar._date) AS day_of_week
        FROM
            temp_legal_entities_ids AS legal_entities
            LEFT JOIN temp_legal_entities_datas AS legal_entities_datas ON legal_entities_datas.core_legal_entities_id = legal_entities.core_legal_entities_id
            LEFT JOIN temp_workplans AS workplans ON workplans.core_legal_entities_id = legal_entities.core_legal_entities_id
            JOIN (
                SELECT
                    calendar.id,
                    calendar.core_legal_entities_id,
                    calendar._date,
                    abscences.attendance_offday_types_id,
                    abscences.attendance_abscence_types_id,
                    abscences.start_time AS abscences_start_time,
                    abscences.end_time AS abscences_end_time,
                    calendar.legal_entity_confirmed,
                    calendar.boss_confirmed,
                    legal_entities_rejections.status AS legal_entities_rejections_status,
                    boss_rejections.status AS boss_rejections_status,
                    shifts.id AS shifts_id,
                    shifts.attendance_shift_types_id,
                    shifts.start_time AS shifts_start_time,
                    shifts.end_time AS shifts_end_time,
                    shifts.shift_break_time,
                    shift_types.id AS shift_types_id,
                    shift_types.code AS shift_types_code,
                    shift_types.trunk_time_start AS shift_types_trunk_time_start,
                    shift_types.trunk_time_end AS shift_types_trunk_time_end,
                    overtimes.id AS overtimes_id,
                    overtimes.attendance_legal_entities_shifts_id AS overtimes_attendance_legal_entities_shifts_id,
                    overtimes.start_time AS overtimes_start_time,
                    overtimes.end_time AS overtimes_end_time,
                    holidays.type AS holidays_type
                FROM
                    attendance_legal_entities_calendar AS calendar
                    LEFT JOIN attendance_legal_entities_abscences AS abscences ON abscences.registered_calendar_id = calendar.id
                    LEFT JOIN attendance_legal_entities_calendar_rejections AS legal_entities_rejections ON legal_entities_rejections.attendance_legal_entities_calendar_id = calendar.id AND legal_entities_rejections.core_legal_entities_id = calendar.core_legal_entities_id
                    LEFT JOIN attendance_legal_entities_calendar_rejections AS boss_rejections ON boss_rejections.attendance_legal_entities_calendar_id = calendar.id AND boss_rejections.core_legal_entities_id <> calendar.core_legal_entities_id
                    LEFT JOIN attendance_legal_entities_shifts AS shifts ON shifts.registered_calendar_id = calendar.id
                    LEFT JOIN attendance_shift_types AS shift_types ON shift_types.id = shifts.attendance_shift_types_id
                    LEFT JOIN attendance_legal_entities_overtimes AS overtimes ON overtimes.registered_calendar_id = calendar.id AND overtimes.attendance_legal_entities_shifts_id IS NOT NULL
                    LEFT JOIN temp_abscence_types AS abscence_types ON abscences.attendance_abscence_types_id = abscence_types.abscence_types_id
                    LEFT JOIN temp_core_holidays AS holidays ON calendar._date = holidays.date
                    LEFT JOIN core_legal_entities_attributes_values as start on start.core_legal_entities_id=calendar.core_legal_entities_id and start.core_legal_entities_attributes_id=7
                    LEFT JOIN core_legal_entities_attributes_values as end on end.core_legal_entities_id=calendar.core_legal_entities_id and end.core_legal_entities_attributes_id=8
                WHERE
                    calendar._date BETWEEN month_start_date AND month_end_date and start.value<=calendar._date and (end.value='' or end.value>=calendar._date )
            ) AS calendar ON calendar.core_legal_entities_id = legal_entities.core_legal_entities_id
            LEFT JOIN temp_workplan_shifts AS workplan_shifts ON workplans.attendance_workplans_id = workplan_shifts.attendance_workplans_id AND workplan_shifts._date = calendar._date
            LEFT JOIN temp_worktimelimits AS worktimelimits ON worktimelimits.core_legal_entities_id = legal_entities.core_legal_entities_id AND calendar._date BETWEEN worktimelimits.worktimelimits_start_date AND worktimelimits.worktimelimits_end_date
        GROUP BY
            calendar.core_legal_entities_id,
            calendar._date,
            calendar.shifts_id
            
        ORDER BY
            legal_entities_datas.person_name,
            calendar._date,
            calendar.shifts_id;

        DROP TEMPORARY TABLE IF EXISTS temp_legal_entities_ids;
        DROP TEMPORARY TABLE IF EXISTS temp_legal_entities_datas;
        DROP TEMPORARY TABLE IF EXISTS temp_core_holidays;
        DROP TEMPORARY TABLE IF EXISTS temp_abscence_types;
        DROP TEMPORARY TABLE IF EXISTS temp_workplans;
        DROP TEMPORARY TABLE IF EXISTS temp_workplan_shifts;
        DROP TEMPORARY TABLE IF EXISTS temp_worktimelimits;
    END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS get_calendar_data_for_scheduleplanner");
    }
};
