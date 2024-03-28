<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreCountiesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_counties')->truncate();
        
        \DB::table('core_counties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bács-Kiskun megye',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Baranya megye',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Békés megye',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Borsod-Abaúj-Zemplén megye',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Csongrád megye',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Fejér megye',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Győr-Moson-Sopron megye',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Hajdú-Bihar megye',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Heves megye',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Jász-Nagykun-Szolnok megye',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Komárom-Esztergom megye',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Nógrád megye',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Pest megye',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Somogy megye',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Szabolcs-Szatmár-Bereg megye',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Tolna megye',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Vas megye',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Veszprém megye',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Zala megye',
            ),
        ));

        
    }
}