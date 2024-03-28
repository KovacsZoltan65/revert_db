<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceOffdayTypesCoreFirmsOrderTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_offday_types_core_firms_order')->truncate();
        
        \DB::table('attendance_offday_types_core_firms_order')->insert(array (
            0 => 
            array (
                'id' => 1,
                'attendance_offday_types_id' => 1,
                'core_firms_id' => 1,
                '_order' => 1,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'attendance_offday_types_id' => 2,
                'core_firms_id' => 1,
                '_order' => 2,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'attendance_offday_types_id' => 3,
                'core_firms_id' => 1,
                '_order' => 3,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'attendance_offday_types_id' => 4,
                'core_firms_id' => 1,
                '_order' => 4,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'attendance_offday_types_id' => 5,
                'core_firms_id' => 1,
                '_order' => 5,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'attendance_offday_types_id' => 6,
                'core_firms_id' => 1,
                '_order' => 6,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'attendance_offday_types_id' => 7,
                'core_firms_id' => 1,
                '_order' => 7,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'attendance_offday_types_id' => 8,
                'core_firms_id' => 1,
                '_order' => 8,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'attendance_offday_types_id' => 9,
                'core_firms_id' => 1,
                '_order' => NULL,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'attendance_offday_types_id' => 10,
                'core_firms_id' => 1,
                '_order' => NULL,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'attendance_offday_types_id' => 11,
                'core_firms_id' => 1,
                '_order' => NULL,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'attendance_offday_types_id' => 99,
                'core_firms_id' => 1,
                '_order' => NULL,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'attendance_offday_types_id' => 98,
                'core_firms_id' => 1,
                '_order' => NULL,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'attendance_offday_types_id' => 12,
                'core_firms_id' => 1,
                '_order' => NULL,
                'status' => 1,
                'core_other_incomes_id' => NULL,
            ),
        ));

        
    }
}