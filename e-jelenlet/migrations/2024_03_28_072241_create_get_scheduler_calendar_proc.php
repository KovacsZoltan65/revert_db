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
        DB::unprepared("CREATE DEFINER=`ej2_showtime_p`@`localhost` PROCEDURE `get_scheduler_calendar`(IN `legalentities` text, IN `start_date` DATE, IN `end_date` DATE, IN `firm_id` INT, IN `parameter_34` INT, IN `parameter_35` INT)
BEGIN
            select
                calendar.core_legal_entities_id,
                concat(person_name.value, \" (\", entity_name.value, \")\") as legal_entity_name,
                calendar.id as calendar_id,
                calendar._date as calendar_date,
                calendar.boss_confirmed,
                calendar.legal_entity_confirmed,
                dayofweek(calendar._date) as day_of_week,
                dayofmonth(calendar._date) as day_of_month,
                dayofyear(calendar._date) as day_of_year,
                case
                    when calendar._date < employment_start.value or (calendar._date > employment_end.value and employment_end.value != \"\") or shifts.attendance_shift_types_id is null or workplans.working_with_schedule_planner = 0 then null
                    when abscences.attendance_abscence_types_id is not null then concat(\"abscence_day_label\")
                    when abscences.attendance_offday_types_id is not null then concat(\"offday_day_label\")
                    else
                        case
                            when count(shifts.attendance_shift_types_id) = 1 then min(shifts.attendance_shift_types_id)
                            else concat(min(shifts.attendance_shift_types_id), \",\", max(shifts.attendance_shift_types_id))
                        end
                end as day_text,
                case
                    when calendar._date < employment_start.value or (calendar._date > employment_end.value and employment_end.value != \"\") or shifts.attendance_shift_types_id is null or workplans.working_with_schedule_planner = 0 then null
                    else
                        case
                            when count(shifts.attendance_shift_types_id) = 1 then min(shifts.attendance_shift_types_id)
                            else concat(min(shifts.attendance_shift_types_id), \",\", max(shifts.attendance_shift_types_id))
                        end
                end as day_original_text,
                case
                    when calendar._date < employment_start.value then concat(\"scheduleplanner_date_less_than_employment_start\")
                    when calendar._date > employment_end.value and employment_end.value != \"\" then concat(\"scheduleplanner_date_greater_than_employment_end\")
                    when calendar._date <= last_export.value then concat(\"scheduleplanner_date_less_than_last_export\")
                    when (abscences.attendance_offday_types_id is not null or abscences.attendance_abscence_types_id is not null) and calendar.boss_confirmed = 1 and calendar.legal_entity_confirmed = 1 then concat(\"scheduleplanner_full_confirmed_abscence_is_set\")
                    when (abscences.attendance_offday_types_id is not null or abscences.attendance_abscence_types_id is not null) and (calendar.boss_confirmed = 1 or calendar.legal_entity_confirmed = 1) then
                        case
                            when parameter_35 = 6 then concat(\"scheduleplanner_overwritten_absence_is_set\")
                            else concat(\"scheduleplanner_confirmed_abscence_is_set_by_one_but_parameter_not_allow\")
                        end
                    when (abscences.attendance_offday_types_id is not null or abscences.attendance_abscence_types_id is not null) and (rejections.status = 1 or calendar.boss_confirmed = 1) then
                        case
                            when parameter_34 = 6 then concat(\"scheduleplanner_overwritten_absence_is_set\")
                            else concat(\"scheduleplanner_rejected_abscence_is_set_but_parameter_not_allow\")
                        end
                    when workplans.working_with_schedule_planner = 0 then concat(\"scheduleplanner_no_cooperative_workplan\")
                    else calendar._date
                end as day_tooltip,
                case
                    when workplans.working_with_schedule_planner = 0 then
                        case
                            when dayofweek(calendar._date) = 7 then
                                case
                                    when workplans.working_with_schedule_planner then concat(\"color_rest\")
                                    else concat(\"color_sat\")
                                end
                            when dayofweek(calendar._date) = 1 then
                                case
                                    when workplans.working_with_schedule_planner then concat(\"color_rest\")
                                    else concat(\"color_sun\")
                                end
                            else concat(\"color_normal\") 
                        end
                    else
                        case
                            when holidays.type = 1 then concat(\"color_payed\")
                            when holidays.type = 2 then concat(\"color_workfree\")
                            when holidays.type = 3 then concat(\"color_moved\")
                            when dayofweek(calendar._date) = 7 then
                                case
                                    when calendar._date < employment_start.value
                                        or (calendar._date > employment_end.value and employment_end.value != \"\")
                                        or calendar._date <= last_export.value
                                        or workplans.working_with_schedule_planner = 0 then
                                        concat(\"color_sat\")
                                    else
                                        concat(\"color_rest\")
                                end
                            when dayofweek(calendar._date) = 1 then
                                case
                                    when calendar._date < employment_start.value
                                        or (calendar._date > employment_end.value and employment_end.value != \"\")
                                        or calendar._date <= last_export.value
                                        or workplans.working_with_schedule_planner = 0 then
                                        concat(\"color_sun\")
                                    else
                                        concat(\"color_rest\")
                                end
                            else concat(\"color_normal\")
                        end
                end as day_orig_color,
                case
                    when calendar._date < employment_start.value or (calendar._date > employment_end.value and employment_end.value != \"\") or calendar._date <= last_export.value or workplans.working_with_schedule_planner = 0 then null
                    else
                        case
                            when holidays.type = 1 then 3
                            when holidays.type = 2 then 6
                            when holidays.type = 3 then 5
                            when dayofweek(calendar._date) = 7 then 1
                            when dayofweek(calendar._date) = 1 then 1
                        end
                end as day_orig_type,
                case
                    when calendar._date < employment_start.value or (calendar._date > employment_end.value and employment_end.value != \"\") or calendar._date <= last_export.value or workplans.working_with_schedule_planner = 0 then
                        case
                            when dayofweek(calendar._date) = 7 then \"workplan_empty_day color_sat\"
                            when dayofweek(calendar._date) = 1 then \"workplan_empty_day color_sun\"
                            else \"workplan_empty_day\"
                        end
                    else
                        case
                            when (abscences.attendance_offday_types_id is not null or abscences.attendance_abscence_types_id is not null) and calendar.boss_confirmed = 1 and calendar.legal_entity_confirmed = 1 then concat(\"workplan_empty_day color_forbidden_by_absence\")
                            when (abscences.attendance_offday_types_id is not null or abscences.attendance_abscence_types_id is not null) and (calendar.boss_confirmed = 1 or calendar.legal_entity_confirmed = 1) then
                                case
                                    when parameter_35 = 6 then concat(\"workplan_day color_overwritten_absence\")
                                    else concat(\"workplan_empty_day color_forbidden_by_absence\")
                                end
                            when (abscences.attendance_offday_types_id is not null or abscences.attendance_abscence_types_id is not null) and (rejections.status = 1 or calendar.boss_confirmed = 1) then
                                case
                                    when parameter_34 = 6 then concat(\"workplan_day color_overwritten_absence\")
                                    else concat(\"workplan_empty_day color_forbidden_by_absence\")
                                end
                            else
                                case
                                    when workplan_shifts.attendance_day_types_id = 1 and last_export.value < calendar._date then concat(\"workplan_day color_rest\")
                                    when workplan_shifts.attendance_day_types_id = 2 and last_export.value < calendar._date  then concat(\"workplan_day color_free\")
                                    when workplan_shifts.attendance_day_types_id = 3 then concat(\"workplan_day color_payed\")
                                    when workplan_shifts.attendance_day_types_id = 4 and shifts.attendance_shift_types_id is not null then concat(\"workplan_day color_work\")
                                    when workplan_shifts.attendance_day_types_id = 4 and shifts.attendance_shift_types_id is null then concat(\"workplan_day color_normal\")
                                    when workplan_shifts.attendance_day_types_id = 5 then concat(\"workplan_day color_moved\")
                                    when workplan_shifts.attendance_day_types_id = 6 then concat(\"workplan_day color_workfree\")
                                end
                        end
                end as day_class,
                min(shifts.attendance_shift_types_id) as shifts_1_type_id,
                time_format(min(shifts.start_time), \"%k:%i\") as shifts_1_start_time,
                time_format(min(shifts.end_time), \"%k:%i\") as shifts_1_end_time,
                min(shifts.shift_break_time) as shifts_1_shift_break_time,
                time_to_sec(
                    case
                        when min(shifts.start_time) < min(shifts.end_time) then
                            time_format(abs(date_sub(timediff(min(shifts.end_time), min(shifts.start_time)), interval 0 minute)), \"%k:%i\")
                        else
                            time_format(abs(date_sub(timediff(min(shifts.start_time), min(shifts.end_time)), interval 1440 minute)), \"%k:%i\")
                    end
                ) as shifts_1_time,
                case
                    when count(shifts.attendance_shift_types_id) > 1 then
                        max(shifts.attendance_shift_types_id)
                    else
                        null
                end as shifts_2_type_id,
                case
                    when count(shifts.attendance_shift_types_id) > 1 then
                        time_format(max(shifts.start_time), \"%k:%i\")
                    else
                        null
                end as shifts_2_start_time,
                case
                    when count(shifts.attendance_shift_types_id) > 1 then
                        time_format(max(shifts.end_time), \"%k:%i\")
                    else
                        null
                end as shifts_2_end_time,
                case
                    when count(shifts.attendance_shift_types_id) > 1 then
                        max(shifts.shift_break_time)
                    else
                        null
                end as shifts_2_shift_break_time,
                time_to_sec(
                    case
                        when count(shifts.attendance_shift_types_id) > 1 then
                            case
                                when max(shifts.start_time) < max(shifts.end_time) then
                                    time_format(abs(date_sub(timediff(max(shifts.end_time), max(shifts.start_time)), interval 0 minute)), \"%k:%i\")
                                else
                                    time_format(abs(date_sub(timediff(max(shifts.start_time), max(shifts.end_time)), interval 1440 minute)), \"%k:%i\")
                            end
                        else
                            null
                    end
                ) as shifts_2_time,
                case
                    when shifts.attendance_shift_types_id is not null then 1
                    else 0
                end as day_has_shift,
                overtimes.overtimes_in_shifts_time,
                overtimes.overtimes_out_of_shifts_time,
                case
                    when outside_shifts.type = 1 then outside_shifts.outside_shifts_time
                end as standby_time,
                standby_overtimes.standby_overtimes_time,
                case
                    when outside_shifts.type = 2 then outside_shifts.outside_shifts_time
                end as duty_time,
                abscences.attendance_abscence_types_id,
                abscences.attendance_offday_types_id,
                case
                    when abscences.attendance_abscence_types_id is not null or abscences.attendance_offday_types_id is not null then 1
                    else 0
                end as day_has_abscence,
                case
                    when abscences.attendance_abscence_types_id then \"other_abscence\"
                    when abscences.attendance_offday_types_id then \"offday\"
                end as abscence_type,
                worktimelimits.id as worktimelimits_id,
                worktimelimits.name as worktimelimits_name,
                worktimelimits.start_date as worktimelimits_start_date,
                worktimelimits.end_date as worktimelimits_end_date,
                time_to_sec(
                    case
                        when calendar._date < employment_start.value or (calendar._date > employment_end.value and employment_end.value != \"\") or calendar._date < last_export.value then null
                        when (workplan_shifts.attendance_day_types_id in (4, 5) and dayofweek(calendar._date) in (2, 3, 4, 5, 6)) or holidays.type = 3 then concat(floor(worktimelimits.daily_workhours), \":\", lpad(round((worktimelimits.daily_workhours - floor(worktimelimits.daily_workhours)) * 60) % 60, 2, 0))
                        else null
                    end
                ) as worktimelimits_daily_workhours,
                worktimelimit_abscences.abscence_types_id as worktimelimit_abscences_types_id,
                employment_start.value as employment_start,
                employment_end.value as employment_end,
                last_export.value as last_export,
                workplans.name,
                workplans.attendance_workplan_categories_id,
                workplans.check_by_law,
                workplans.warning_or_forbidding,
                workplans.working_with_schedule_planner,
                time_to_sec(concat(floor(workplans.number_of_hours_per_day), \":\", lpad(round((workplans.number_of_hours_per_day - floor(workplans.number_of_hours_per_day)) * 60) % 60, 2, 0))) as number_of_hours_per_day,
                workplans.number_of_hours_per_day_is_default_if_absence,
                workplans.balance_collector,
                0 as missing_day
            from
                attendance_legal_entities_calendar as calendar
                left join attendance_legal_entities_calendar_rejections as rejections on rejections.attendance_legal_entities_calendar_id = calendar.id and rejections.status = 1
                left join attendance_legal_entities_shifts as shifts on shifts.registered_calendar_id = calendar.id
                left join (
                    select
                        registered_calendar_id,
                        sum(
                            time_to_sec(
                                case
                                    when attendance_legal_entities_shifts_id is not null then
                                        case
                                            when end_time < start_time then time_format(abs(date_sub(timediff(start_time, end_time), interval 1440 minute)), \"%k:%i\")
                                            else time_format(abs(date_sub(timediff(end_time, start_time), interval 0 minute)), \"%k:%i\")					
                                        end
                                end
                            )
                        ) as overtimes_in_shifts_time,
                        sum(
                            time_to_sec(
                                case
                                    when attendance_legal_entities_shifts_id is null then
                                        case
                                            when end_time < start_time then time_format(abs(date_sub(timediff(start_time, end_time), interval 1440 minute)), \"%k:%i\")
                                            else time_format(abs(date_sub(timediff(end_time, start_time), interval 0 minute)), \"%k:%i\")					
                                        end
                                end
                            )
                        ) as overtimes_out_of_shifts_time
                    from
                        attendance_legal_entities_overtimes
                    group by
                        registered_calendar_id
                ) as overtimes on overtimes.registered_calendar_id = calendar.id
                left join (
                    select
                        attendance_legal_entities_calendar_id,
                        type,
                        sum(
                            time_to_sec(
                                case
                                    when end_time < start_time then time_format(abs(date_sub(timediff(start_time, end_time), interval 1440 minute)), \"%k:%i\")
                                    else time_format(abs(date_sub(timediff(end_time, start_time), interval 0 minute)), \"%k:%i\")					
                                end
                            )
                        ) as outside_shifts_time
                    from
                        attendance_legal_entities_outside_shifts_time
                    group by
                        attendance_legal_entities_calendar_id,
                        type
                ) as outside_shifts on outside_shifts.attendance_legal_entities_calendar_id = calendar.id
                left join (
                    select
                        attendance_legal_entities_calendar_id,
                        sum(
                            time_to_sec(
                                case
                                    when standby_overtimes.end_time < standby_overtimes.start_time then time_format(abs(date_sub(timediff(standby_overtimes.start_time, standby_overtimes.end_time), interval 1440 minute)), \"%k:%i\")
                                    else time_format(abs(date_sub(timediff(standby_overtimes.end_time, standby_overtimes.start_time), interval 0 minute)), \"%k:%i\")					
                                end
                            )
                        ) as standby_overtimes_time
                    from
                        attendance_legal_entities_outside_shifts_time as outside_shifts
                        inner join attendance_standby_overtimes as standby_overtimes on standby_overtimes.attendance_legal_entities_outside_shifts_time_id = outside_shifts.id
                    group by
                        attendance_legal_entities_calendar_id
                ) as standby_overtimes on standby_overtimes.attendance_legal_entities_calendar_id = calendar.id
                left join attendance_workplans_core_legal_entities_rel as workplans_rel on workplans_rel.core_legal_entities_id = calendar.core_legal_entities_id
                left join attendance_workplans as workplans on workplans.id = workplans_rel.attendance_workplans_id
                left join attendance_workplan_shifts as workplan_shifts on workplan_shifts.attendance_workplans_id = workplans.id and workplan_shifts._date = calendar._date
                left join attendance_legal_entities_abscences as abscences on abscences.registered_calendar_id = calendar.id and abscences.attendance_legal_entities_shifts_id is null
                left join attendance_worktimelimit_assignments as worktimelimit_rel on worktimelimit_rel.core_legal_entities_id = calendar.core_legal_entities_id and calendar._date between worktimelimit_rel.start_date and worktimelimit_rel.end_date
                left join attendance_worktimelimits as worktimelimits on worktimelimits.id = worktimelimit_rel.attendance_worktimelimits_id
                left join (
                    select
                        attendance_worktimelimits_id,
                        group_concat(abscence_types_id order by abscence_types_id) as abscence_types_id
                    from
                        attendance_worktimelimit_abscences
                    group by
                        attendance_worktimelimits_id
                ) as worktimelimit_abscences on worktimelimit_abscences.attendance_worktimelimits_id = worktimelimit_rel.attendance_worktimelimits_id
                left join core_holidays as holidays on holidays.date = calendar._date and holidays.core_firms_id = firm_id
                left join core_legal_entities_attributes_values as entity_name on entity_name.core_legal_entities_id = calendar.core_legal_entities_id and entity_name.core_legal_entities_attributes_id = 1
                left join core_legal_entities_attributes_values as person_id on person_id.core_legal_entities_id = calendar.core_legal_entities_id and person_id.core_legal_entities_attributes_id = 3
                left join core_legal_entities_attributes_values as employment_start on employment_start.core_legal_entities_id = calendar.core_legal_entities_id and employment_start.core_legal_entities_attributes_id = 7
                left join core_legal_entities_attributes_values as employment_end on employment_end.core_legal_entities_id = calendar.core_legal_entities_id and employment_end.core_legal_entities_attributes_id = 8
                left join core_legal_entities_attributes_values as last_export on last_export.core_legal_entities_id = calendar.core_legal_entities_id and last_export.core_legal_entities_attributes_id = 9
                left join core_persons_attributes_values as person_name on person_name.core_persons_id = person_id.value and person_name.core_persons_attributes_id = 4
            where
                find_in_set(calendar.core_legal_entities_id, legalentities)
                and calendar._date between start_date and end_date
                and calendar._date between workplans_rel.start_date and workplans_rel.end_date
            group by
                calendar.core_legal_entities_id,
                calendar._date,
                person_name.value,
                entity_name.value,
                calendar.id,
                employment_start.value,
                employment_end.value,
                shifts.attendance_shift_types_id,
                workplans.working_with_schedule_planner,
                abscences.attendance_abscence_types_id,
                abscences.attendance_offday_types_id,
                last_export.value,
                workplan_shifts.attendance_day_types_id,
                overtimes.overtimes_in_shifts_time,
                overtimes.overtimes_out_of_shifts_time,
                outside_shifts.type,
                standby_overtimes.standby_overtimes_time,
                worktimelimits.id,
                worktimelimit_abscences.abscence_types_id,
                workplans.name,
                workplans.attendance_workplan_categories_id,
                workplans.check_by_law,
                workplans.warning_or_forbidding,
                workplans.working_with_schedule_planner,
                workplans.number_of_hours_per_day,
                workplans.number_of_hours_per_day_is_default_if_absence,
                workplans.balance_collector,
                holidays.type
            order by
                calendar.core_legal_entities_id,
                calendar._date;
        END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS get_scheduler_calendar");
    }
};
