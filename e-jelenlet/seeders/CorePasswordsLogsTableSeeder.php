<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CorePasswordsLogsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_passwords_logs')->truncate();
        
        \DB::table('core_passwords_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_persons_id' => 5,
                'password' => '$2y$13$yf0fuIPZzNsb0vZYn2leXerqPwMqQQ4eHOZ7xH/RqeSBgjmbHC5Iy',
                'login_count' => 64,
                'created_at' => '2024-03-20 14:55:11',
            ),
        ));

        
    }
}