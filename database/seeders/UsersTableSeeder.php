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
                'name' => 'ejadmin',
                'email' => 'ejadmin@softc.hu',
                'password' => '$2y$13$r0O.jfZ5lU1c8t4DJpxlhOwPbH54kH3cVgTKV8aw2Awp4NTHcosIa',
                'state' => 1,
                'password_change' => 0,
                'remember_token' => NULL,
                'created_at' => '2023-06-01 13:36:37',
                'updated_at' => '2023-06-01 13:36:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Rick Ágnes',
                'email' => 'rick.agnes@softc.hu',
                'password' => '$2y$13$uUx8x0aVxWF5RbrqJmMppuX6xj/Wu0Hv/nOeAwT5kNJEtwW3cJVA2',
                'state' => 1,
                'password_change' => 0,
                'remember_token' => NULL,
                'created_at' => '2023-06-01 13:36:38',
                'updated_at' => '2023-06-01 13:36:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Tanka Veronika',
                'email' => 'tanka.veronika@softc.hu',
                'password' => '$2y$13$qHJNMh.T0dex7zSpVAujhuMZFfr5e4C4QkKnAdLgYAOL9/WEX36cW',
                'state' => 1,
                'password_change' => 0,
                'remember_token' => NULL,
                'created_at' => '2023-06-01 13:36:38',
                'updated_at' => '2023-06-01 13:36:38',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Kovács Zoltán',
                'email' => 'kovacs.zoltan@softc.hu',
                'password' => '$2y$13$0jpa3AJwSvlNzx1fbP9bxuNxg4Tik.ywCUShwwk0INZ1UYFwQ6c3e',
                'state' => 1,
                'password_change' => 0,
                'remember_token' => NULL,
                'created_at' => '2023-06-15 08:39:12',
                'updated_at' => '2023-06-15 08:40:30',
            ),
        ));

        
    }
}