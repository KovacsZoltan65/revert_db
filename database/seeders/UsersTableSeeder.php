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
                'created_at' => '2023-07-24 06:44:01',
                'current_team_id' => NULL,
                'email' => 'admin@admin.com',
                'email_verified_at' => '2023-07-24 06:44:01',
                'id' => 1,
                'name' => 'Admin',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'profile_photo_path' => NULL,
                'remember_token' => 'xyn6Y4VtYPOCp5vN2pLiLFuigTfs9WqEQO3wOa7hTzvHtWNEoxP2UceEexqs',
                'two_factor_confirmed_at' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2023-07-24 06:44:01',
            ),
            1 => 
            array (
                'created_at' => '2023-07-24 06:44:06',
                'current_team_id' => NULL,
                'email' => 'superadmin@laraveltuts.com',
                'email_verified_at' => '2023-07-24 06:44:06',
                'id' => 2,
                'name' => 'Super Admin',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'profile_photo_path' => NULL,
                'remember_token' => '8KpXfx3C8x0NZHcrZNIuInJDY6rvmkW1bFxLrof3V8Kl846S62yLSzzGFwcF',
                'two_factor_confirmed_at' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2023-07-24 06:44:06',
            ),
            2 => 
            array (
                'created_at' => '2023-07-24 06:44:06',
                'current_team_id' => NULL,
                'email' => 'admin@laraveltuts.com',
                'email_verified_at' => '2023-07-24 06:44:06',
                'id' => 3,
                'name' => 'Admin User',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'profile_photo_path' => NULL,
                'remember_token' => 'v3vUZO6M9imas5JlinwvH13SAL5HnQ0XO88MOE4gDLpTvIpHl3KdsaoEcXNn',
                'two_factor_confirmed_at' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2023-07-24 06:44:06',
            ),
            3 => 
            array (
                'created_at' => '2023-07-24 06:44:06',
                'current_team_id' => NULL,
                'email' => 'test@laraveltuts.com',
                'email_verified_at' => '2023-07-24 06:44:06',
                'id' => 4,
                'name' => 'Example User',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'profile_photo_path' => NULL,
                'remember_token' => 'XmsIyKi1xON5mwSvBHkAHcVRn2FQq8hMgYZb3HX0yU5Tm7ar4790WkRmpWuy',
                'two_factor_confirmed_at' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2023-07-24 06:44:06',
            ),
        ));

        
    }
}