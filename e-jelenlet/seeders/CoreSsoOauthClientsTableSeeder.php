<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreSsoOauthClientsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_sso_oauth_clients')->truncate();
        

        
    }
}