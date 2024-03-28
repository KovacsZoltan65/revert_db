<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceAttendanceSheetSettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_attendance_sheet_settings')->truncate();
        
        \DB::table('attendance_attendance_sheet_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_firms_id' => 1,
                'header_settings' => '{"workplan_field":"1","departments_field":"1","costcenters_field":"0","workplace_field":"0","establishment_field":"1","payroll_software_id":0}',
                'body_settings' => '{"shift_type_field":"1","start_time_field":"1","lunch_field":"1","end_time_field":"1","workhours_field":"1","overtime_field":"1","standby_field":"1","duty_field":"1","all_day_abscence_field":"1","sum_hours_field":"1","arrive_field":0,"leave_field":0,"arrive_and_leave_field":0}',
                'body_settings_name' => '{"shift_type_field":"","start_time_field":"","lunch_field":"","end_time_field":"","workhours_field":"","overtime_field":"","standby_field":"","duty_field":"","all_day_abscence_field":"","sum_hours_field":"","arrive_field":"","leave_field":"","arrive_and_leave_field":""}',
                'footer_settings' => '{"time_spent_at_work_sum":"1","overtime_sum":"1","balance_time_sum":"1","standby_sum":"1","duty_sum":"1","lunchhour_sum":"1","all_day_abscences_sum":"1","all_day_slide_sum":"1","workhour_sum":"1","actual_balance_sum":0,"arrive_and_leave_sum":0,"paid_leave_sum":0,"inability_to_earn_sum":0,"other_abscence_sum":0,"home_office_sum":0,"absences_at_work_sum":0,"work_home_office_sum":0}',
                'footer_settings_name' => '{"time_spent_at_work_sum":"","overtime_sum":"","balance_time_sum":"","standby_sum":"","duty_sum":"","lunchhour_sum":"","all_day_abscences_sum":"","all_day_slide_sum":"","workhour_sum":"","actual_balance_sum":"","arrive_and_leave_sum":"","paid_leave_sum":"","inability_to_earn_sum":"","other_abscence_sum":"","home_office_sum":"","absences_at_work_sum":"","work_home_office_sum":""}',
            ),
        ));

        
    }
}