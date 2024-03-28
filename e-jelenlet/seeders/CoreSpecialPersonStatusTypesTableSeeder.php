<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreSpecialPersonStatusTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_special_person_status_types')->truncate();
        
        \DB::table('core_special_person_status_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                '_order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                '_order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                '_order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                '_order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                '_order' => 5,
            ),
        ));

        
    }
}