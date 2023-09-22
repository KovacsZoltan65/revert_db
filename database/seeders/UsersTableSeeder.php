<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->truncate();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => '2023-09-19 12:30:19',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => '0nwbb7igDK',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-09-19 12:30:19',
                'updated_at' => '2023-09-19 12:30:19',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Super Admin',
                'email' => 'superadmin@laraveltuts.com',
                'email_verified_at' => '2023-09-19 12:30:22',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'heSGkkRUXE',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-09-19 12:30:22',
                'updated_at' => '2023-09-19 12:30:22',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Admin User',
                'email' => 'admin@laraveltuts.com',
                'email_verified_at' => '2023-09-19 12:30:22',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => '8ovRD1d7k8',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-09-19 12:30:22',
                'updated_at' => '2023-09-19 12:30:22',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Example User',
                'email' => 'test@laraveltuts.com',
                'email_verified_at' => '2023-09-19 12:30:22',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'g4rOV9FR5Y',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-09-19 12:30:22',
                'updated_at' => '2023-09-19 12:30:22',
                'deleted_at' => NULL,
            ),
        ));

        
    }
}