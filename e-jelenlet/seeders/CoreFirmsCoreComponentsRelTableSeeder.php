<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreFirmsCoreComponentsRelTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_firms_core_components_rel')->truncate();
        
        \DB::table('core_firms_core_components_rel')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_firms_id' => 1,
                'core_components_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'core_firms_id' => 1,
                'core_components_id' => 2,
            ),
        ));

        
    }
}