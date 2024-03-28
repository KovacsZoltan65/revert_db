<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreLocalizationTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_localization')->truncate();
        
        \DB::table('core_localization')->insert(array (
            0 => 
            array (
                'id' => 1,
                'language' => 'magyar',
                'language_original' => 'magyar',
                'language_file' => 'hun',
                'status' => 1,
                '_order' => 1,
                'precedency_order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'language' => 'angol',
                'language_original' => 'English',
                'language_file' => 'eng',
                'status' => 1,
                '_order' => 2,
                'precedency_order' => 3,
            ),
        ));

        
    }
}