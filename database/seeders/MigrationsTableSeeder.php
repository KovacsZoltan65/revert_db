<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->truncate();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'batch' => 1,
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
            ),
            1 => 
            array (
                'batch' => 1,
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_reset_tokens_table',
            ),
            2 => 
            array (
                'batch' => 1,
                'id' => 3,
                'migration' => '2014_10_12_200000_add_two_factor_columns_to_users_table',
            ),
            3 => 
            array (
                'batch' => 1,
                'id' => 4,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
            ),
            4 => 
            array (
                'batch' => 1,
                'id' => 5,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
            ),
            5 => 
            array (
                'batch' => 1,
                'id' => 6,
                'migration' => '2023_07_15_132328_create_sessions_table',
            ),
            6 => 
            array (
                'batch' => 1,
                'id' => 7,
                'migration' => '2023_07_15_132607_create_books_table',
            ),
            7 => 
            array (
                'batch' => 1,
                'id' => 8,
                'migration' => '2023_07_24_051857_create_permission_tables',
            ),
            8 => 
            array (
                'batch' => 1,
                'id' => 9,
                'migration' => '2023_07_24_055355_create_posts_table',
            ),
            9 => 
            array (
                'batch' => 0,
                'id' => 10,
                'migration' => '2023_08_21_053452_create_books_table',
            ),
            10 => 
            array (
                'batch' => 0,
                'id' => 11,
                'migration' => '2023_08_21_053452_create_failed_jobs_table',
            ),
            11 => 
            array (
                'batch' => 0,
                'id' => 12,
                'migration' => '2023_08_21_053452_create_model_has_permissions_table',
            ),
            12 => 
            array (
                'batch' => 0,
                'id' => 13,
                'migration' => '2023_08_21_053452_create_model_has_roles_table',
            ),
            13 => 
            array (
                'batch' => 0,
                'id' => 14,
                'migration' => '2023_08_21_053452_create_password_reset_tokens_table',
            ),
            14 => 
            array (
                'batch' => 0,
                'id' => 15,
                'migration' => '2023_08_21_053452_create_permissions_table',
            ),
            15 => 
            array (
                'batch' => 0,
                'id' => 16,
                'migration' => '2023_08_21_053452_create_personal_access_tokens_table',
            ),
            16 => 
            array (
                'batch' => 0,
                'id' => 17,
                'migration' => '2023_08_21_053452_create_posts_table',
            ),
            17 => 
            array (
                'batch' => 0,
                'id' => 18,
                'migration' => '2023_08_21_053452_create_role_has_permissions_table',
            ),
            18 => 
            array (
                'batch' => 0,
                'id' => 19,
                'migration' => '2023_08_21_053452_create_roles_table',
            ),
            19 => 
            array (
                'batch' => 0,
                'id' => 20,
                'migration' => '2023_08_21_053452_create_sessions_table',
            ),
            20 => 
            array (
                'batch' => 0,
                'id' => 21,
                'migration' => '2023_08_21_053452_create_users_table',
            ),
            21 => 
            array (
                'batch' => 0,
                'id' => 22,
                'migration' => '2023_08_21_053455_add_foreign_keys_to_model_has_permissions_table',
            ),
            22 => 
            array (
                'batch' => 0,
                'id' => 23,
                'migration' => '2023_08_21_053455_add_foreign_keys_to_model_has_roles_table',
            ),
            23 => 
            array (
                'batch' => 0,
                'id' => 24,
                'migration' => '2023_08_21_053455_add_foreign_keys_to_role_has_permissions_table',
            ),
            24 => 
            array (
                'batch' => 0,
                'id' => 25,
                'migration' => '2023_08_21_063730_create_books_table',
            ),
            25 => 
            array (
                'batch' => 0,
                'id' => 26,
                'migration' => '2023_08_21_063730_create_failed_jobs_table',
            ),
            26 => 
            array (
                'batch' => 0,
                'id' => 27,
                'migration' => '2023_08_21_063730_create_model_has_permissions_table',
            ),
            27 => 
            array (
                'batch' => 0,
                'id' => 28,
                'migration' => '2023_08_21_063730_create_model_has_roles_table',
            ),
            28 => 
            array (
                'batch' => 0,
                'id' => 29,
                'migration' => '2023_08_21_063730_create_password_reset_tokens_table',
            ),
            29 => 
            array (
                'batch' => 0,
                'id' => 30,
                'migration' => '2023_08_21_063730_create_permissions_table',
            ),
            30 => 
            array (
                'batch' => 0,
                'id' => 31,
                'migration' => '2023_08_21_063730_create_personal_access_tokens_table',
            ),
            31 => 
            array (
                'batch' => 0,
                'id' => 32,
                'migration' => '2023_08_21_063730_create_posts_table',
            ),
            32 => 
            array (
                'batch' => 0,
                'id' => 33,
                'migration' => '2023_08_21_063730_create_role_has_permissions_table',
            ),
            33 => 
            array (
                'batch' => 0,
                'id' => 34,
                'migration' => '2023_08_21_063730_create_roles_table',
            ),
            34 => 
            array (
                'batch' => 0,
                'id' => 35,
                'migration' => '2023_08_21_063730_create_sessions_table',
            ),
            35 => 
            array (
                'batch' => 0,
                'id' => 36,
                'migration' => '2023_08_21_063730_create_users_table',
            ),
            36 => 
            array (
                'batch' => 0,
                'id' => 37,
                'migration' => '2023_08_21_063733_add_foreign_keys_to_model_has_permissions_table',
            ),
            37 => 
            array (
                'batch' => 0,
                'id' => 38,
                'migration' => '2023_08_21_063733_add_foreign_keys_to_model_has_roles_table',
            ),
            38 => 
            array (
                'batch' => 0,
                'id' => 39,
                'migration' => '2023_08_21_063733_add_foreign_keys_to_role_has_permissions_table',
            ),
        ));

        
    }
}