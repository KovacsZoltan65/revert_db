<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CorePermissionGroupsCoreLegalEntitiesRelTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_permission_groups_core_legal_entities_rel')->truncate();
        
        \DB::table('core_permission_groups_core_legal_entities_rel')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 9,
            ),
            9 => 
            array (
                'id' => 10,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 10,
            ),
            10 => 
            array (
                'id' => 11,
                'core_permission_groups_id' => 1,
                'core_legal_entities_id' => 11,
            ),
        ));

        
    }
}