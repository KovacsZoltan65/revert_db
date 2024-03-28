<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceWorktimelimitExcessTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_worktimelimit_excess')->truncate();
        

        
    }
}