<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceRoundingSettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_rounding_settings')->truncate();
        
        \DB::table('attendance_rounding_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'rounding_id' => 1,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 1,
                'display' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'rounding_id' => 2,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 1,
                'display' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'rounding_id' => 3,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 1,
                'display' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'rounding_id' => 4,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 1,
                'display' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'rounding_id' => 5,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 1,
                'display' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'rounding_id' => 6,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 1,
                'display' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'rounding_id' => 7,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 2,
                'display' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'rounding_id' => 8,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 2,
                'display' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'rounding_id' => 9,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 2,
                'display' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'rounding_id' => 10,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 2,
                'display' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'rounding_id' => 11,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 2,
                'display' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'rounding_id' => 12,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 2,
                'display' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'rounding_id' => 13,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 2,
                'display' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'rounding_id' => 14,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 2,
                'display' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'rounding_id' => 15,
                'core_firms_id' => 1,
                'prevalence' => 1,
                'rate' => 1,
                'accuracy' => 0,
                'rule' => 0,
                'type' => 2,
                'display' => 1,
            ),
        ));

        
    }
}