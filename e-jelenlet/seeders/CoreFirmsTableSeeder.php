<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreFirmsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_firms')->truncate();
        
        \DB::table('core_firms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'registration_number' => '01-10-046490',
                'tax_id' => '14936322-2-41',
                'name' => 'Soft Consulting Hungary Zrt.',
                'directory' => '',
                'postal_code' => 1143,
                'core_cities_id' => 1,
                'public_place_name' => 'Stefánia',
                'core_public_places_id' => 32,
                'public_place_number' => '61',
                'staircase' => '',
                'floor_door' => '',
            'phone_number' => '+36 (1) 273-3838',
                'status' => 1,
                'notification_sender' => 'noreply@e-jelenlet.hu',
                'default_id' => 0,
                'default_name' => NULL,
                'skip_tax_id_validation' => 0,
            ),
        ));

        
    }
}