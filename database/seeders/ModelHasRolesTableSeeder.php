<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModelHasRolesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('model_has_roles')->truncate();
        
        \DB::table('model_has_roles')->insert(array (
            0 => 
            array (
                'model_id' => 2,
                'model_type' => 'App\\Models\\User',
                'role_id' => 3,
            ),
            1 => 
            array (
                'model_id' => 3,
                'model_type' => 'App\\Models\\User',
                'role_id' => 2,
            ),
            2 => 
            array (
                'model_id' => 4,
                'model_type' => 'App\\Models\\User',
                'role_id' => 1,
            ),
        ));

        
    }
}