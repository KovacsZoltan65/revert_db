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
                'created_at' => '2023-07-24 06:44:03',
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'writer',
                'updated_at' => '2023-07-24 06:44:03',
            ),
            1 => 
            array (
                'created_at' => '2023-07-24 06:44:03',
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'admin',
                'updated_at' => '2023-07-24 06:44:03',
            ),
            2 => 
            array (
                'created_at' => '2023-07-24 06:44:06',
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'super-admin',
                'updated_at' => '2023-07-24 06:44:06',
            ),
        ));

        
    }
}