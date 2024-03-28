<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SyncApiTokenTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sync_api_token')->truncate();
        

        
    }
}