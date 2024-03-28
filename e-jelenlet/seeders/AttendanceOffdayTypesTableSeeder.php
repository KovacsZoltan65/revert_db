<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceOffdayTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_offday_types')->truncate();
        
        \DB::table('attendance_offday_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'payroll_software_id' => '3x',
                'selectable' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'payroll_software_id' => '3á',
                'selectable' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'payroll_software_id' => '3é',
                'selectable' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'payroll_software_id' => '3g',
                'selectable' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'payroll_software_id' => '3p',
                'selectable' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'payroll_software_id' => '3e',
                'selectable' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'payroll_software_id' => '3h',
                'selectable' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'payroll_software_id' => '3k',
                'selectable' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'payroll_software_id' => '3a',
                'selectable' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'payroll_software_id' => '4x',
                'selectable' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'payroll_software_id' => '5x',
                'selectable' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'payroll_software_id' => '3s',
                'selectable' => 1,
            ),
            12 => 
            array (
                'id' => 98,
                'payroll_software_id' => '',
                'selectable' => 0,
            ),
            13 => 
            array (
                'id' => 99,
                'payroll_software_id' => '',
                'selectable' => 0,
            ),
        ));

        
    }
}