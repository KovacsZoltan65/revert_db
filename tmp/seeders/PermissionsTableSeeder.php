<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->truncate();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'permission list',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:19',
                'updated_at' => '2023-09-19 12:30:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'permission create',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:19',
                'updated_at' => '2023-09-19 12:30:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'permission edit',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:19',
                'updated_at' => '2023-09-19 12:30:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'permission delete',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:19',
                'updated_at' => '2023-09-19 12:30:19',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'role list',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:19',
                'updated_at' => '2023-09-19 12:30:19',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'role create',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:19',
                'updated_at' => '2023-09-19 12:30:19',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'role edit',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:20',
                'updated_at' => '2023-09-19 12:30:20',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'role delete',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:20',
                'updated_at' => '2023-09-19 12:30:20',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'user list',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:20',
                'updated_at' => '2023-09-19 12:30:20',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'user create',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:20',
                'updated_at' => '2023-09-19 12:30:20',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'user edit',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:20',
                'updated_at' => '2023-09-19 12:30:20',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'user delete',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:20',
                'updated_at' => '2023-09-19 12:30:20',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'post list',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:20',
                'updated_at' => '2023-09-19 12:30:20',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'post create',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:20',
                'updated_at' => '2023-09-19 12:30:20',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'post edit',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:20',
                'updated_at' => '2023-09-19 12:30:20',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'post delete',
                'guard_name' => 'web',
                'created_at' => '2023-09-19 12:30:20',
                'updated_at' => '2023-09-19 12:30:20',
            ),
        ));

        
    }
}