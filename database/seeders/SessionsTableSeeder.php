<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sessions')->truncate();
        
        \DB::table('sessions')->insert(array (
            0 => 
            array (
                'id' => 'PwVcHnSu5nWGUT8oqoJBvDspp2UfZqncv63pSxbd',
                'ip_address' => '127.0.0.1',
                'last_activity' => 1691993808,
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMFlKTGh6eFlwelNjV0RNUlcyUEpJV1lUaERza1lZNlhFSGxtaGdwMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9yb2xlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ5MklYVU5wa2pPMHJPUTVieU1pLlllNG9Lb0VhM1JvOWxsQy8ub2cvYXQyLnVoZVdHL2lnaSI7fQ==',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.203',
                'user_id' => 2,
            ),
        ));

        
    }
}