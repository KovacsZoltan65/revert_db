<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceLegalEntitiesDetailsBackupTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_legal_entities_details_backup')->truncate();
        

        
    }
}