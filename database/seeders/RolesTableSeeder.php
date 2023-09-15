<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->truncate();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Admin',
                'description' => 'God of HQ',
                'created_at' => '2023-06-01 13:36:38',
                'updated_at' => '2023-06-01 13:36:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'spectator',
                'display_name' => 'Spectator',
                'description' => 'Spectator of HQ',
                'created_at' => '2023-06-01 13:36:38',
                'updated_at' => '2023-06-01 13:36:38',
            ),
        ));

        
    }
}