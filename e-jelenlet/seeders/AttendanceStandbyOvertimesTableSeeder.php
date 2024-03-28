<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceStandbyOvertimesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_standby_overtimes')->truncate();
        

        
    }
}