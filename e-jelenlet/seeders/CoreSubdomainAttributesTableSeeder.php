<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreSubdomainAttributesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_subdomain_attributes')->truncate();
        
        \DB::table('core_subdomain_attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'attribute' => 'status',
                'value' => '1',
                'created_at' => '2024-03-18 14:42:23',
                'updated_at' => '2024-03-18 14:42:23',
            ),
        ));

        
    }
}