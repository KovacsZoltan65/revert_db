<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreLegalEntitiesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_legal_entities')->truncate();
        
        \DB::table('core_legal_entities')->insert(array (
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
            6 => 
            array (
                'id' => 7,
            ),
            7 => 
            array (
                'id' => 8,
            ),
            8 => 
            array (
                'id' => 9,
            ),
            9 => 
            array (
                'id' => 10,
            ),
            10 => 
            array (
                'id' => 11,
            ),
        ));

        
    }
}