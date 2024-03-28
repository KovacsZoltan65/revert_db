<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CorePermissionGroupsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_permission_groups')->truncate();
        
        \DB::table('core_permission_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Külsős adminisztrátorok',
                'group_type' => 1,
                'core_firms_id' => 1,
                'active' => 1,
                'created_at' => '2024-03-18 14:42:13',
                'updated_at' => '2024-03-18 14:42:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Adminisztrátorok',
                'group_type' => 2,
                'core_firms_id' => 1,
                'active' => 1,
                'created_at' => '2024-03-18 14:42:13',
                'updated_at' => '2024-03-18 14:42:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Dolgozók',
                'group_type' => 3,
                'core_firms_id' => 1,
                'active' => 1,
                'created_at' => '2024-03-18 14:42:13',
                'updated_at' => '2024-03-18 14:42:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Vezetők',
                'group_type' => 4,
                'core_firms_id' => 1,
                'active' => 1,
                'created_at' => '2024-03-18 14:42:26',
                'updated_at' => '2024-03-18 14:42:26',
            ),
        ));

        
    }
}