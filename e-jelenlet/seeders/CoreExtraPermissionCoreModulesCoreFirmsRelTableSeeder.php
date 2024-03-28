<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreExtraPermissionCoreModulesCoreFirmsRelTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_extra_permission_core_modules_core_firms_rel')->truncate();
        
        \DB::table('core_extra_permission_core_modules_core_firms_rel')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_firms_id' => 1,
                'core_modules_id' => 48,
                'usable' => 0,
                'name' => 'munkaidő felosztása',
            ),
            1 => 
            array (
                'id' => 2,
                'core_firms_id' => 1,
                'core_modules_id' => 29,
                'usable' => 0,
                'name' => 'Munkaidőkeret',
            ),
            2 => 
            array (
                'id' => 3,
                'core_firms_id' => 1,
                'core_modules_id' => 49,
                'usable' => 0,
                'name' => 'Dokumentum kezelő',
            ),
            3 => 
            array (
                'id' => 4,
                'core_firms_id' => 1,
                'core_modules_id' => 50,
                'usable' => 0,
                'name' => 'Dokumentum feltöltő',
            ),
            4 => 
            array (
                'id' => 5,
                'core_firms_id' => 1,
                'core_modules_id' => 51,
                'usable' => 0,
                'name' => 'Beosztástervező 2.0',
            ),
            5 => 
            array (
                'id' => 6,
                'core_firms_id' => 1,
                'core_modules_id' => 52,
                'usable' => 0,
                'name' => 'Felületi érteítések',
            ),
            6 => 
            array (
                'id' => 7,
                'core_firms_id' => 1,
                'core_modules_id' => 53,
                'usable' => 0,
                'name' => 'Szabadságolási szabályzat',
            ),
        ));

        
    }
}