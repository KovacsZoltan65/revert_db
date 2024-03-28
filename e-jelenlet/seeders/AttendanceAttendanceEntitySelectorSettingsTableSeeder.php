<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceAttendanceEntitySelectorSettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_attendance_entity_selector_settings')->truncate();
        
        \DB::table('attendance_attendance_entity_selector_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_firms_id' => 1,
                'column_settings' => '{"id":"0","core_persons_name":"1","core_legal_entities_name":"1","payroll_id":"0","tax_id":"0","specific_unique_id":"0","establishment_name":"1","department_name":"1","cost_center_name":"1","profit_center_name":"1","workplan_name":"1","worktimelimit_name":"1","start_date":"0","end_date":"0","last_day_at_work":"0","last_export_date":"0","core_legal_entities_id":"0","core_persons_id":"0","core_firm_id":"0","state":"1","selected":"0"}',
                'column_settings_label' => '{"id":"","core_persons_name":"filter_name_0","core_legal_entities_name":"filter_name_1","payroll_id":"filter_name_8","tax_id":"filter_name_10","specific_unique_id":"filter_name_15","establishment_name":"filter_name_2","department_name":"filter_name_3","cost_center_name":"filter_name_4","profit_center_name":"filter_name_5","workplan_name":"filter_name_6","worktimelimit_name":"filter_name_7","start_date":"filter_name_11","end_date":"filter_name_12","last_day_at_work":"filter_name_13","last_export_date":"filter_name_14","core_legal_entities_id":"","core_persons_id":"","core_firm_id":"","state":"legal_entity_status","selected":""}',
                'column_settings_class' => '{"id":"datatable_id","core_persons_name":"datatable_core_persons_name","core_legal_entities_name":"datatable_core_legal_entities_name","payroll_id":"datatable_payroll_id","tax_id":"datatable_tax_id","specific_unique_id":"datatable_specific_unique_id","establishment_name":"datatable_establishment","department_name":"datatable_department","cost_center_name":"datatable_cost_center","profit_center_name":"datatable_profit_center","workplan_name":"datatable_workplan","worktimelimit_name":"datatable_worktimelimit","start_date":"datatable_start_date","end_date":"datatable_end_date","last_day_at_work":"datatable_last_day_at_work","last_export_date":"datatable_last_export_date","core_legal_entities_id":"datatable_core_legal_entities_id","core_persons_id":"datatable_core_persons_id","core_firm_id":"datatable_core_firm_id","state":"datatable_state","selected":"datatable_selected"}',
                'column_settings_hide' => '{"id":"1","core_persons_name":"0","core_legal_entities_name":"0","payroll_id":"0","tax_id":"0","specific_unique_id":"0","establishment_name":"0","department_name":"0","cost_center_name":"0","profit_center_name":"0","workplan_name":"0","worktimelimit_name":"0","start_date":"0","end_date":"0","last_day_at_work":"0","last_export_date":"0","core_legal_entities_id":"1","core_persons_id":"1","core_firm_id":"1","state":"0","selected":"1"}',
            ),
        ));

        
    }
}