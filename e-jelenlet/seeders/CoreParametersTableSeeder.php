<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreParametersTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_parameters')->truncate();
        
        \DB::table('core_parameters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 3,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '2',
                'status' => 2,
                '_order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '2',
                'status' => 2,
                '_order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '4',
                'status' => 1,
                '_order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 4,
                'minimum_value' => 5,
                'maximum_value' => 60,
                'default_value' => '10',
                'status' => 1,
                '_order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'core_components_id' => 1,
                'core_modules_id' => 3,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '8',
                'status' => 1,
                '_order' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'core_components_id' => 1,
                'core_modules_id' => 5,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '10',
                'status' => 0,
                '_order' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'core_components_id' => 1,
                'core_modules_id' => 5,
                'type' => 1,
                'minimum_value' => 1,
                'maximum_value' => 365,
                'default_value' => '30',
                'status' => 0,
                '_order' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '12',
                'status' => 1,
                '_order' => 5,
            ),
            8 => 
            array (
                'id' => 9,
                'core_components_id' => 1,
                'core_modules_id' => 6,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '6',
                'status' => 1,
                '_order' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'core_components_id' => 1,
                'core_modules_id' => 13,
                'type' => 1,
                'minimum_value' => 1,
                'maximum_value' => 24,
                'default_value' => '1',
                'status' => 1,
                '_order' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 4,
                'minimum_value' => 0,
                'maximum_value' => 99,
                'default_value' => '0',
                'status' => 1,
                '_order' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 4,
                'minimum_value' => 0,
                'maximum_value' => 99,
                'default_value' => '0',
                'status' => 1,
                '_order' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 4,
                'minimum_value' => 0,
                'maximum_value' => 10,
                'default_value' => '1',
                'status' => 1,
                '_order' => 4,
            ),
            14 => 
            array (
                'id' => 15,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 4,
                'minimum_value' => 3,
                'maximum_value' => 10,
                'default_value' => '3',
                'status' => 1,
                '_order' => 5,
            ),
            15 => 
            array (
                'id' => 16,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 4,
                'minimum_value' => 10,
                'maximum_value' => 30,
                'default_value' => '30',
                'status' => 1,
                '_order' => 6,
            ),
            16 => 
            array (
                'id' => 17,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '15',
                'status' => 0,
                '_order' => 7,
            ),
            17 => 
            array (
                'id' => 18,
                'core_components_id' => 1,
                'core_modules_id' => 18,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '6',
                'status' => 1,
                '_order' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'core_components_id' => 2,
                'core_modules_id' => 23,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '18',
                'status' => 1,
                '_order' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'core_components_id' => 2,
                'core_modules_id' => 24,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'core_components_id' => 1,
                'core_modules_id' => 13,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'core_components_id' => 2,
                'core_modules_id' => 27,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 8,
            ),
            23 => 
            array (
                'id' => 24,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 9,
            ),
            24 => 
            array (
                'id' => 25,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 10,
            ),
            25 => 
            array (
                'id' => 26,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 11,
            ),
            26 => 
            array (
                'id' => 27,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 1,
                'minimum_value' => 2,
                'maximum_value' => 30,
                'default_value' => '10',
                'status' => 2,
                '_order' => 12,
            ),
            27 => 
            array (
                'id' => 28,
                'core_components_id' => 1,
                'core_modules_id' => 2,
                'type' => 1,
                'minimum_value' => 0,
                'maximum_value' => 60,
                'default_value' => '10',
                'status' => 2,
                '_order' => 13,
            ),
            28 => 
            array (
                'id' => 29,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 1,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '2016-01-01',
                'status' => 1,
                '_order' => 6,
            ),
            29 => 
            array (
                'id' => 30,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '6',
                'status' => 1,
                '_order' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '22',
                'status' => 1,
                '_order' => 3,
            ),
            31 => 
            array (
                'id' => 32,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '23',
                'status' => 1,
                '_order' => 7,
            ),
            32 => 
            array (
                'id' => 33,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 1,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => 'Munkaido adatok ',
                'status' => 1,
                '_order' => 8,
            ),
            33 => 
            array (
                'id' => 34,
                'core_components_id' => 2,
                'core_modules_id' => 37,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '6',
                'status' => 1,
                '_order' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'core_components_id' => 2,
                'core_modules_id' => 37,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 2,
            ),
            35 => 
            array (
                'id' => 36,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '6',
                'status' => 1,
                '_order' => 2,
            ),
            36 => 
            array (
                'id' => 37,
                'core_components_id' => 1,
                'core_modules_id' => 18,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '29',
                'status' => 1,
                '_order' => 2,
            ),
            37 => 
            array (
                'id' => 38,
                'core_components_id' => 1,
                'core_modules_id' => 13,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 3,
            ),
            38 => 
            array (
                'id' => 40,
                'core_components_id' => 2,
                'core_modules_id' => 21,
                'type' => 2,
                'minimum_value' => 0,
                'maximum_value' => 0,
                'default_value' => '31',
                'status' => 1,
                '_order' => 1,
            ),
            39 => 
            array (
                'id' => 41,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 2,
                'minimum_value' => 0,
                'maximum_value' => 0,
                'default_value' => '7',
                'status' => 1,
                '_order' => 4,
            ),
            40 => 
            array (
                'id' => 42,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 4,
                'minimum_value' => 0,
                'maximum_value' => 15,
                'default_value' => '0',
                'status' => 1,
                '_order' => 6,
            ),
            41 => 
            array (
                'id' => 43,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '33',
                'status' => 1,
                '_order' => 7,
            ),
            42 => 
            array (
                'id' => 44,
                'core_components_id' => 2,
                'core_modules_id' => 7,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            43 => 
            array (
                'id' => 45,
                'core_components_id' => 2,
                'core_modules_id' => 7,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 2,
            ),
            44 => 
            array (
                'id' => 47,
                'core_components_id' => 1,
                'core_modules_id' => 13,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '35',
                'status' => 1,
                '_order' => 4,
            ),
            45 => 
            array (
                'id' => 48,
                'core_components_id' => 2,
                'core_modules_id' => 45,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            46 => 
            array (
                'id' => 49,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 8,
            ),
            47 => 
            array (
                'id' => 50,
                'core_components_id' => 1,
                'core_modules_id' => 36,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            48 => 
            array (
                'id' => 51,
                'core_components_id' => 1,
                'core_modules_id' => 25,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            49 => 
            array (
                'id' => 52,
                'core_components_id' => 1,
                'core_modules_id' => 36,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 2,
            ),
            50 => 
            array (
                'id' => 53,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 5,
            ),
            51 => 
            array (
                'id' => 56,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 4,
                'minimum_value' => 0,
                'maximum_value' => 120,
                'default_value' => '0',
                'status' => 1,
                '_order' => 11,
            ),
            52 => 
            array (
                'id' => 58,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 12,
            ),
            53 => 
            array (
                'id' => 59,
                'core_components_id' => 2,
                'core_modules_id' => 45,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 3,
            ),
            54 => 
            array (
                'id' => 60,
                'core_components_id' => 2,
                'core_modules_id' => 48,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            55 => 
            array (
                'id' => 61,
                'core_components_id' => 2,
                'core_modules_id' => 48,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '40',
                'status' => 1,
                '_order' => 2,
            ),
            56 => 
            array (
                'id' => 62,
                'core_components_id' => 2,
                'core_modules_id' => 48,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 3,
            ),
            57 => 
            array (
                'id' => 63,
                'core_components_id' => 2,
                'core_modules_id' => 48,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 4,
            ),
            58 => 
            array (
                'id' => 64,
                'core_components_id' => 2,
                'core_modules_id' => 48,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '42',
                'status' => 1,
                '_order' => 5,
            ),
            59 => 
            array (
                'id' => 65,
                'core_components_id' => 2,
                'core_modules_id' => 49,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            60 => 
            array (
                'id' => 66,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 13,
            ),
            61 => 
            array (
                'id' => 67,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '43',
                'status' => 1,
                '_order' => 9,
            ),
            62 => 
            array (
                'id' => 68,
                'core_components_id' => 1,
                'core_modules_id' => 18,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 3,
            ),
            63 => 
            array (
                'id' => 69,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 11,
            ),
            64 => 
            array (
                'id' => 70,
                'core_components_id' => 2,
                'core_modules_id' => 20,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 14,
            ),
            65 => 
            array (
                'id' => 71,
                'core_components_id' => 1,
                'core_modules_id' => 52,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            66 => 
            array (
                'id' => 72,
                'core_components_id' => 1,
                'core_modules_id' => 55,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            67 => 
            array (
                'id' => 73,
                'core_components_id' => 1,
                'core_modules_id' => 1,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 10,
            ),
            68 => 
            array (
                'id' => 76,
                'core_components_id' => 2,
                'core_modules_id' => 34,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            69 => 
            array (
                'id' => 77,
                'core_components_id' => 2,
                'core_modules_id' => 39,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
            70 => 
            array (
                'id' => 78,
                'core_components_id' => 1,
                'core_modules_id' => 27,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '0',
                'status' => 2,
                '_order' => 0,
            ),
            71 => 
            array (
                'id' => 79,
                'core_components_id' => 2,
                'core_modules_id' => 33,
                'type' => 2,
                'minimum_value' => NULL,
                'maximum_value' => NULL,
                'default_value' => '7',
                'status' => 1,
                '_order' => 1,
            ),
        ));

        
    }
}