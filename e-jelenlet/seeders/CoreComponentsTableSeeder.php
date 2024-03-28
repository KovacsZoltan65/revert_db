<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreComponentsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_components')->truncate();
        
        \DB::table('core_components')->insert(array (
            0 => 
            array (
                'id' => 1,
                'directory' => 'core',
                '_order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'directory' => 'attendance',
                '_order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'directory' => 'sync',
                '_order' => 3,
            ),
        ));

        
    }
}