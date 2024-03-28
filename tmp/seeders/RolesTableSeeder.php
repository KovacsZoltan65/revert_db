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
                'name' => 'writer',
                'guard_name' => 'web',
                'created_at' => '2023-09-22 11:42:34',
                'updated_at' => '2023-09-22 11:42:34',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2023-09-22 11:42:34',
                'updated_at' => '2023-09-22 11:42:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'super-admin',
                'guard_name' => 'web',
                'created_at' => '2023-09-22 11:42:35',
                'updated_at' => '2023-09-22 11:42:35',
            ),
        ));

        
    }
}