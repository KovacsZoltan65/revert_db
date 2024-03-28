<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceAccessControlSystemsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_access_control_systems')->truncate();
        
        \DB::table('attendance_access_control_systems')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'WinAccess',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Enviromux',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Siport',
            ),
            3 => 
            array (
                'id' => 4,
            'name' => 'WinAccess (WC)',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'GenerallyACS',
            ),
        ));

        
    }
}