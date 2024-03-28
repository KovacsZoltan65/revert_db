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
        DB::unprepared("CREATE DEFINER=`ej2_showtime_p`@`localhost` PROCEDURE `get_scheduler_actual_worktimelimit`(IN `legalentities` text, IN `from_date` DATE, IN `to_date` DATE)
BEGIN
            select
                id,
                attendance_worktimelimits_id,
                core_legal_entities_id,
                start_date,
                end_date,
                sum(all_workhours) as all_workhours,
                sum(actual_workhours) - sum(sliding_hours) as actual_workhours,
                sum(abscences_hours) as abscences_hours,
                sum(sliding_hours) as actual_abscences_hours_to_today,
                editable,
                abscence_types_id
            from (
                select
                    calendar.core_legal_entities_id,
                    worktimelimit_assignments.id,
                    worktimelimit_assignments.attendance_worktimelimits_id,
                    worktimelimit_assignments.start_date,
                    worktimelimit_assignments.end_date,
                    case
                        when calendar._date <= curdate() then
                            case
                                when abscences.attendance_abscence_types_id in (group_concat(worktimelimit_abscences.abscence_types_id order by worktimelimit_abscences.abscence_types_id asc)) then
                                    case
                                        when shift_types.trunk_time_start < shift_types.trunk_time_end then
                                            time_to_sec(time_format(abs(date_sub(timediff(shift_types.trunk_time_end, shift_types.trunk_time_start), interval shift_breaks.length minute)), \"%k:%i\"))
                                        else
                                            time_to_sec(time_format(abs(date_sub(timediff(shift_types.trunk_time_start, shift_types.trunk_time_end), interval 1440 + shift_breaks.length minute)), \"%k:%i\"))
                                    end
                                else
                                    0
                            end
                        else
                            0
                    end as sliding_hours,
                    case
                        when abscences.attendance_abscence_types_id in (group_concat(worktimelimit_abscences.abscence_types_id order by worktimelimit_abscences.abscence_types_id asc)) then
                            case
                                when shift_types.trunk_time_start < shift_types.trunk_time_end then
                                    time_to_sec(time_format(abs(date_sub(timediff(shift_types.trunk_time_end, shift_types.trunk_time_start), interval shift_breaks.length minute)), \"%k:%i\"))
                                else
                                    time_to_sec(time_format(abs(date_sub(timediff(shift_types.trunk_time_start, shift_types.trunk_time_end), interval 1440 + shift_breaks.length minute)), \"%k:%i\"))
                            end
                        else
                            0
                    end as abscences_hours,
                    case
                        when abscences.attendance_offday_types_id is null and abscences.attendance_abscence_types_id is null then
                            case
                                when shifts.id is not null then
                                    case
                                        when shifts.start_time < shifts.end_time then
                                            case
                                                when overtimes.attendance_legal_entities_shifts_id is not null then
                                                    time_to_sec(time_format(abs(date_sub(timediff(shifts.end_time, shifts.start_time), interval shifts.shift_break_time minute)), \"%k:%i\")) - time_to_sec(time_format(abs(date_sub(timediff(overtimes.end_time, overtimes.start_time), interval 0 minute)), \"%k:%i\"))
                                                else
                                                    time_to_sec(time_format(abs(date_sub(timediff(shifts.end_time, shifts.start_time), interval shifts.shift_break_time minute)), \"%k:%i\"))
                                            end
                                        else
                                            case
                                                when overtimes.attendance_legal_entities_shifts_id is not null then
                                                    time_to_sec(time_format(abs(date_sub(timediff(shifts.start_time, shifts.end_time), interval 1440 - shifts.shift_break_time minute)), \"%k:%i\")) - time_to_sec(time_format(abs(date_sub(timediff(overtimes.start_time, overtimes.end_time), interval 1440 minute)), \"%k:%i\"))
                                                else
                                                    time_to_sec(time_format(abs(date_sub(timediff(shifts.start_time, shifts.end_time), interval 1440 - shifts.shift_break_time minute)), \"%k:%i\"))
                                            end
                                    end
                                else
                                    0
                            end
                        else
                            case
                                when abscences.attendance_abscence_types_id = 42 and shifts.id is null then
                                    0
                                else
                                    case
                                        when abscences.start_time < abscences.end_time then
                                            time_to_sec(time_format(abs(date_sub(timediff(abscences.end_time, abscences.start_time), interval shifts.shift_break_time minute)), \"%k:%i\"))
                                        else
                                            time_to_sec(time_format(abs(date_sub(timediff(abscences.start_time, abscences.end_time), interval 1440 - shifts.shift_break_time minute)), \"%k:%i\"))
                                    end
                            end
                    end as actual_workhours,
                    case
                        when shift_types.id is not null then
                            time_to_sec(concat(floor(worktimelimits.daily_workhours), \":\", floor((worktimelimits.daily_workhours - (floor(worktimelimits.daily_workhours))) * 60)))
                        else
                            0
                    end  as all_workhours,
                    case
                        when worktimelimit_assignments.start_date > last_export.value then
                            1
                        else
                            0
                    end as editable,
                    group_concat(worktimelimit_abscences.abscence_types_id order by worktimelimit_abscences.abscence_types_id asc) as abscence_types_id
                from
                    attendance_legal_entities_calendar as calendar
                    inner join attendance_worktimelimit_assignments as worktimelimit_assignments on worktimelimit_assignments.core_legal_entities_id = calendar.core_legal_entities_id
                    inner join attendance_worktimelimits as worktimelimits on worktimelimits.id = worktimelimit_assignments.attendance_worktimelimits_id
                    left join attendance_worktimelimit_abscences as worktimelimit_abscences on worktimelimit_abscences.attendance_worktimelimits_id = worktimelimit_assignments.attendance_worktimelimits_id
                    left join attendance_legal_entities_abscences as abscences on abscences.registered_calendar_id = calendar.id
                    left join attendance_legal_entities_shifts as shifts on shifts.registered_calendar_id = calendar.id
                    inner join attendance_workplans_core_legal_entities_rel as workplans_rel on workplans_rel.core_legal_entities_id = calendar.core_legal_entities_id
                    inner join attendance_workplans as workplans on workplans.id = workplans_rel.attendance_workplans_id
                    inner join attendance_workplan_shifts as workplan_shifts on workplan_shifts._date = calendar._date and workplan_shifts.attendance_workplans_id = workplans_rel.attendance_workplans_id
                    left join attendance_shift_types as shift_types on shift_types.id = workplan_shifts.attendance_shift_types_id
                    left join attendance_shift_breaks as shift_breaks on shift_breaks.id = workplan_shifts.attendance_shift_types_id
                    left join attendance_legal_entities_overtimes as overtimes on overtimes.registered_calendar_id = calendar.id
                    left join core_legal_entities_attributes_values as last_export on last_export.core_legal_entities_id = calendar.core_legal_entities_id and last_export.core_legal_entities_attributes_id = 9
                where
                    find_in_set(calendar.core_legal_entities_id, legalentities)
                    and calendar._date between worktimelimit_assignments.start_date and worktimelimit_assignments.end_date
                    and calendar._date between workplans_rel.start_date and workplans_rel.end_date
                    and (
                        from_date between worktimelimit_assignments.start_date and worktimelimit_assignments.end_date
                        or to_date between worktimelimit_assignments.start_date and worktimelimit_assignments.end_date
                        or worktimelimit_assignments.start_date between from_date and to_date
                        or worktimelimit_assignments.end_date between from_date and to_date
                    )
                group by
                    calendar.core_legal_entities_id,
                    calendar._date,
                    worktimelimit_assignments.id,
                    abscences.attendance_abscence_types_id,
                    abscences.attendance_offday_types_id,
                    shift_types.trunk_time_end,
                    shift_types.trunk_time_start,
                    shift_breaks.length,
                    shifts.id,
                    overtimes.attendance_legal_entities_shifts_id,
                    overtimes.end_time,
                    overtimes.start_time,
                    abscences.start_time,
                    abscences.end_time,
                    shift_types.id,
                    last_export.value
                order by
                    calendar.core_legal_entities_id,
                    calendar._date
            ) as worktimelimits
            group by
                core_legal_entities_id,
                worktimelimits.id,
                worktimelimits.editable,
                abscence_types_id;
        END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS get_scheduler_actual_worktimelimit");
    }
};
