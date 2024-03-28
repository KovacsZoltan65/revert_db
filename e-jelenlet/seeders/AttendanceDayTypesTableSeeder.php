<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceDayTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_day_types')->truncate();
        
        \DB::table('attendance_day_types')->insert(array (
            0 => 
            array (
                'id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
            ),
        ));

        
    }
}