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
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'permission list',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            1 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'permission create',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            2 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'permission edit',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            3 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 4,
                'name' => 'permission delete',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            4 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 5,
                'name' => 'role list',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            5 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 6,
                'name' => 'role create',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            6 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 7,
                'name' => 'role edit',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            7 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 8,
                'name' => 'role delete',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            8 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 9,
                'name' => 'user list',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            9 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 10,
                'name' => 'user create',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            10 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 11,
                'name' => 'user edit',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            11 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 12,
                'name' => 'user delete',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            12 => 
            array (
                'created_at' => '2023-07-24 06:44:02',
                'guard_name' => 'web',
                'id' => 13,
                'name' => 'post list',
                'updated_at' => '2023-07-24 06:44:02',
            ),
            13 => 
            array (
                'created_at' => '2023-07-24 06:44:03',
                'guard_name' => 'web',
                'id' => 14,
                'name' => 'post create',
                'updated_at' => '2023-07-24 06:44:03',
            ),
            14 => 
            array (
                'created_at' => '2023-07-24 06:44:03',
                'guard_name' => 'web',
                'id' => 15,
                'name' => 'post edit',
                'updated_at' => '2023-07-24 06:44:03',
            ),
            15 => 
            array (
                'created_at' => '2023-07-24 06:44:03',
                'guard_name' => 'web',
                'id' => 16,
                'name' => 'post delete',
                'updated_at' => '2023-07-24 06:44:03',
            ),
        ));

        
    }
}