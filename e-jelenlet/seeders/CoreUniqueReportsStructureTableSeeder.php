<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreUniqueReportsStructureTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_unique_reports_structure')->truncate();
        
        \DB::table('core_unique_reports_structure')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'core_legal_entities_id',
                'class_name' => '',
                'filter' => 'nonfilter',
                'active' => 0,
                'data' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'payroll_software_id',
                'class_name' => '',
                'filter' => 'nonfilter',
                'active' => 1,
                'data' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'unique_id',
                'class_name' => '',
                'filter' => 'nonfilter',
                'active' => 1,
                'data' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'legal_entity_name',
                'class_name' => '',
                'filter' => 'nonfilter',
                'active' => 1,
                'data' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'start_date',
                'class_name' => '',
                'filter' => 'date',
                'active' => 1,
                'data' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'end_date',
                'class_name' => '',
                'filter' => 'date',
                'active' => 1,
                'data' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'last_export_date',
                'class_name' => '',
                'filter' => 'date',
                'active' => 1,
                'data' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'legal_entity_supervisor',
                'class_name' => '',
                'filter' => 'nonfilter',
                'active' => 1,
                'data' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'legal_entity_supervisor_email',
                'class_name' => '',
                'filter' => 'nonfilter',
                'active' => 1,
                'data' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'person_name',
                'class_name' => '',
                'filter' => 'nonfilter',
                'active' => 1,
                'data' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'person_email',
                'class_name' => '',
                'filter' => 'nonfilter',
                'active' => 1,
                'data' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'legal_entity_establishment',
                'class_name' => 'Establishment',
                'filter' => 'class',
                'active' => 1,
                'data' => '',
            ),
            12 => 
            array (
                'id' => 13,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'legal_entity_department',
                'class_name' => 'Department',
                'filter' => 'class',
                'active' => 1,
                'data' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'legal_entity_cost_center',
                'class_name' => 'CostCenter',
                'filter' => 'class',
                'active' => 1,
                'data' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'person_tax_number',
                'class_name' => '',
                'filter' => 'text',
                'active' => 1,
                'data' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_worktime',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_overtimes',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            17 => 
            array (
                'id' => 18,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_ready_time',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            18 => 
            array (
                'id' => 19,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_duty',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            19 => 
            array (
                'id' => 20,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_lunchtime',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            20 => 
            array (
                'id' => 21,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_workhours',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            21 => 
            array (
                'id' => 22,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_generated_balance',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            22 => 
            array (
                'id' => 23,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_generated_slip',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            23 => 
            array (
                'id' => 24,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_abscence_type',
                'class_name' => '',
                'filter' => 'text',
                'active' => 1,
                'data' => '',
            ),
            24 => 
            array (
                'id' => 25,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_abscence_approved',
                'class_name' => '',
                'filter' => 'text',
                'active' => 1,
                'data' => '',
            ),
            25 => 
            array (
                'id' => 26,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_abscence_name',
                'class_name' => '',
                'filter' => 'text',
                'active' => 1,
                'data' => '',
            ),
            26 => 
            array (
                'id' => 27,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'calendar_abscence_calculated',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            27 => 
            array (
                'id' => 28,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'calendar_abscence_other_source',
                'class_name' => '',
                'filter' => 'int',
                'active' => 0,
                'data' => '',
            ),
            28 => 
            array (
                'id' => 29,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'calendar_abscence_used_days',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            29 => 
            array (
                'id' => 30,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'calendar_abscence_available_days',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            30 => 
            array (
                'id' => 31,
                'category_id' => 1,
                'class_id' => 1,
                'field' => 'calendar_abscence_planned_days',
                'class_name' => '',
                'filter' => 'int',
                'active' => 1,
                'data' => '',
            ),
            31 => 
            array (
                'id' => 32,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_actual_date',
                'class_name' => '',
                'filter' => 'date',
                'active' => 1,
                'data' => '',
            ),
            32 => 
            array (
                'id' => 33,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_start_date',
                'class_name' => '',
                'filter' => 'date',
                'active' => 1,
                'data' => '',
            ),
            33 => 
            array (
                'id' => 34,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'calendar_end_date',
                'class_name' => '',
                'filter' => 'date',
                'active' => 1,
                'data' => '',
            ),
            34 => 
            array (
                'id' => 35,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'workplan_name',
                'class_name' => '',
                'filter' => 'text',
                'active' => 1,
                'data' => '',
            ),
            35 => 
            array (
                'id' => 36,
                'category_id' => 2,
                'class_id' => 4,
                'field' => 'legal_stock_name',
                'class_name' => '',
                'filter' => 'text',
                'active' => 0,
                'data' => '',
            ),
            36 => 
            array (
                'id' => 37,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'legal_entity_confirmed',
                'class_name' => '',
                'filter' => 'text',
                'active' => 1,
                'data' => '',
            ),
            37 => 
            array (
                'id' => 38,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'boss_confirmed',
                'class_name' => '',
                'filter' => 'text',
                'active' => 1,
                'data' => '',
            ),
            38 => 
            array (
                'id' => 39,
                'category_id' => 2,
                'class_id' => 2,
                'field' => 'attendance_places_of_work',
                'class_name' => 'PlacesOfWork',
                'filter' => 'class',
                'active' => 1,
                'data' => '',
            ),
        ));

        
    }
}