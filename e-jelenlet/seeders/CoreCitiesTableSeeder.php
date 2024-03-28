<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreCitiesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_cities')->truncate();
        
        \DB::table('core_cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Budapest',
                'core_counties_id' => 13,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Szentendre',
                'core_counties_id' => 13,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Pilisszentlászló',
                'core_counties_id' => 13,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Budakalász',
                'core_counties_id' => 13,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Csobánka',
                'core_counties_id' => 13,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Szigetmonostor',
                'core_counties_id' => 13,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Leányfalu',
                'core_counties_id' => 13,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Pócsmegyer',
                'core_counties_id' => 13,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Pomáz',
                'core_counties_id' => 13,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Tahitótfalu',
                'core_counties_id' => 13,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Dunabogdány',
                'core_counties_id' => 13,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Kisoroszi',
                'core_counties_id' => 13,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Visegrád',
                'core_counties_id' => 13,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Dömös',
                'core_counties_id' => 11,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Pilismarót',
                'core_counties_id' => 11,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Érd',
                'core_counties_id' => 13,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Sóskút',
                'core_counties_id' => 13,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Pusztazámor',
                'core_counties_id' => 13,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Budaörs',
                'core_counties_id' => 13,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Törökbálint',
                'core_counties_id' => 13,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Diósd',
                'core_counties_id' => 13,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Biatorbágy',
                'core_counties_id' => 13,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Herceghalom',
                'core_counties_id' => 13,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Bicske',
                'core_counties_id' => 6,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Csabdi',
                'core_counties_id' => 6,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Mány',
                'core_counties_id' => 6,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Újbarok',
                'core_counties_id' => 6,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Szár',
                'core_counties_id' => 6,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Szárliget',
                'core_counties_id' => 6,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Páty',
                'core_counties_id' => 13,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Zsámbék',
                'core_counties_id' => 13,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Tök',
                'core_counties_id' => 13,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Perbál',
                'core_counties_id' => 13,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Pilisjászfalu',
                'core_counties_id' => 13,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Piliscsaba',
                'core_counties_id' => 13,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Solymár',
                'core_counties_id' => 13,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Pilisszentiván',
                'core_counties_id' => 13,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Pilisvörösvár',
                'core_counties_id' => 13,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Tinnye',
                'core_counties_id' => 13,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Telki',
                'core_counties_id' => 13,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Remeteszőlős',
                'core_counties_id' => 13,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Etyek',
                'core_counties_id' => 6,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Budakeszi',
                'core_counties_id' => 13,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Budajenő',
                'core_counties_id' => 13,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Nagykovácsi',
                'core_counties_id' => 13,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Pilisszántó',
                'core_counties_id' => 13,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Üröm',
                'core_counties_id' => 13,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Pilisborosjenő',
                'core_counties_id' => 13,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Pilisszentkereszt',
                'core_counties_id' => 13,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Dobogókő',
                'core_counties_id' => 13,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Gödöllő',
                'core_counties_id' => 13,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Szada',
                'core_counties_id' => 13,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Veresegyház',
                'core_counties_id' => 13,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Erdőkertes',
                'core_counties_id' => 13,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Valkó',
                'core_counties_id' => 13,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Vácszentlászló',
                'core_counties_id' => 13,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Zsámbok',
                'core_counties_id' => 13,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Isaszeg',
                'core_counties_id' => 13,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Dány',
                'core_counties_id' => 13,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Pécel',
                'core_counties_id' => 13,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Dunakeszi',
                'core_counties_id' => 13,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Göd',
                'core_counties_id' => 13,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Sződliget',
                'core_counties_id' => 13,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Sződ',
                'core_counties_id' => 13,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Csörög',
                'core_counties_id' => 13,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Csömör',
                'core_counties_id' => 13,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Nagytarcsa',
                'core_counties_id' => 13,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Kistarcsa',
                'core_counties_id' => 13,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Kerepes',
                'core_counties_id' => 13,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Mogyoród',
                'core_counties_id' => 13,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Fót',
                'core_counties_id' => 13,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Csomád',
                'core_counties_id' => 13,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Őrbottyán',
                'core_counties_id' => 13,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Vácrátót',
                'core_counties_id' => 13,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Váchartyán',
                'core_counties_id' => 13,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Kisnémedi',
                'core_counties_id' => 13,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Püspökszilágy',
                'core_counties_id' => 13,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Vácduka',
                'core_counties_id' => 13,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Aszód',
                'core_counties_id' => 13,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Kartal',
                'core_counties_id' => 13,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Verseg',
                'core_counties_id' => 13,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Kálló',
                'core_counties_id' => 12,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Erdőkürt',
                'core_counties_id' => 12,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Erdőtarcsa',
                'core_counties_id' => 12,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Iklad',
                'core_counties_id' => 13,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Domony',
                'core_counties_id' => 13,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Galgamácsa',
                'core_counties_id' => 13,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Vácegres',
                'core_counties_id' => 13,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Váckisújfalu',
                'core_counties_id' => 13,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Bag',
                'core_counties_id' => 13,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Hévízgyörk',
                'core_counties_id' => 13,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Galgahévíz',
                'core_counties_id' => 13,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Tura',
                'core_counties_id' => 13,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Monor',
                'core_counties_id' => 13,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Péteri',
                'core_counties_id' => 13,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Vasad',
                'core_counties_id' => 13,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Csévharaszt',
                'core_counties_id' => 13,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Pánd',
                'core_counties_id' => 13,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Káva',
                'core_counties_id' => 13,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Bénye',
                'core_counties_id' => 13,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Gomba',
                'core_counties_id' => 13,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Vecsés',
                'core_counties_id' => 13,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Üllő',
                'core_counties_id' => 13,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Gyömrő',
                'core_counties_id' => 13,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Ecser',
                'core_counties_id' => 13,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Maglód',
                'core_counties_id' => 13,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Mende',
                'core_counties_id' => 13,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Sülysáp',
                'core_counties_id' => 13,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Kóka',
                'core_counties_id' => 13,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Úri',
                'core_counties_id' => 13,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Tápiószecső',
                'core_counties_id' => 13,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Tóalmás',
                'core_counties_id' => 13,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Tápióság',
                'core_counties_id' => 13,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Szentmártonkáta',
                'core_counties_id' => 13,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Szentlőrinckáta',
                'core_counties_id' => 13,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Ráckeve',
                'core_counties_id' => 13,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Lórév',
                'core_counties_id' => 13,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Szigetszentmiklós',
                'core_counties_id' => 13,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Halásztelek',
                'core_counties_id' => 13,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Szigethalom',
                'core_counties_id' => 13,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Tököl',
                'core_counties_id' => 13,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Szigetcsép',
                'core_counties_id' => 13,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Szigetszentmárton',
                'core_counties_id' => 13,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Szigetújfalu',
                'core_counties_id' => 13,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Szigetbecse',
                'core_counties_id' => 13,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Makád',
                'core_counties_id' => 13,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Dunaharaszti',
                'core_counties_id' => 13,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Taksony',
                'core_counties_id' => 13,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Dunavarsány',
                'core_counties_id' => 13,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Délegyháza',
                'core_counties_id' => 13,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Áporka',
                'core_counties_id' => 13,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Majosháza',
                'core_counties_id' => 13,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Kiskunlacháza',
                'core_counties_id' => 13,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Dömsöd',
                'core_counties_id' => 13,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Apaj',
                'core_counties_id' => 13,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Bugyi',
                'core_counties_id' => 13,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Alsónémedi',
                'core_counties_id' => 13,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Gyál',
                'core_counties_id' => 13,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Felsőpakony',
                'core_counties_id' => 13,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Ócsa',
                'core_counties_id' => 13,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Inárcs',
                'core_counties_id' => 13,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Kakucs',
                'core_counties_id' => 13,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Újhartyán',
                'core_counties_id' => 13,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Dabas',
                'core_counties_id' => 13,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Tatárszentgyörgy',
                'core_counties_id' => 13,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Hernád',
                'core_counties_id' => 13,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Örkény',
                'core_counties_id' => 13,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Pusztavacs',
                'core_counties_id' => 13,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Táborfalva',
                'core_counties_id' => 13,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Dunaújváros',
                'core_counties_id' => 6,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Nagyvenyim',
                'core_counties_id' => 6,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Mezőfalva',
                'core_counties_id' => 6,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Daruszentmiklós',
                'core_counties_id' => 6,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Előszállás',
                'core_counties_id' => 6,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Nagykarácsony',
                'core_counties_id' => 6,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Baracs',
                'core_counties_id' => 6,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Kisapostag',
                'core_counties_id' => 6,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Perkáta',
                'core_counties_id' => 6,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Szabadegyháza',
                'core_counties_id' => 6,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Sárosd',
                'core_counties_id' => 6,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Hantos',
                'core_counties_id' => 6,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Nagylók',
                'core_counties_id' => 6,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Százhalombatta',
                'core_counties_id' => 13,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Ercsi',
                'core_counties_id' => 6,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Iváncsa',
                'core_counties_id' => 6,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Beloiannisz',
                'core_counties_id' => 6,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Besnyő',
                'core_counties_id' => 6,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Adony',
                'core_counties_id' => 6,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Kulcs',
                'core_counties_id' => 6,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Rácalmás',
                'core_counties_id' => 6,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Tárnok',
                'core_counties_id' => 13,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Martonvásár',
                'core_counties_id' => 6,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Tordas',
                'core_counties_id' => 6,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Gyúró',
                'core_counties_id' => 6,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Ráckeresztúr',
                'core_counties_id' => 6,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Baracska',
                'core_counties_id' => 6,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Kajászó',
                'core_counties_id' => 6,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Vál',
                'core_counties_id' => 6,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Kápolnásnyék',
                'core_counties_id' => 6,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Pázmánd',
                'core_counties_id' => 6,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Vereb',
                'core_counties_id' => 6,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Velence',
                'core_counties_id' => 6,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Gárdony',
                'core_counties_id' => 6,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Pusztaszabolcs',
                'core_counties_id' => 6,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Esztergom',
                'core_counties_id' => 11,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Dorog',
                'core_counties_id' => 11,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Kesztölc',
                'core_counties_id' => 11,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Leányvár',
                'core_counties_id' => 11,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Piliscsév',
                'core_counties_id' => 11,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Csolnok',
                'core_counties_id' => 11,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Dág',
                'core_counties_id' => 11,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Sárisáp',
                'core_counties_id' => 11,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Nagysáp',
                'core_counties_id' => 11,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Bajna',
                'core_counties_id' => 11,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Epöl',
                'core_counties_id' => 11,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Máriahalom',
                'core_counties_id' => 11,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Úny',
                'core_counties_id' => 11,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Annavölgy',
                'core_counties_id' => 11,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Tokod',
                'core_counties_id' => 11,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Tokodaltáró',
                'core_counties_id' => 11,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Bajót',
                'core_counties_id' => 11,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Tát',
                'core_counties_id' => 11,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Mogyorósbánya',
                'core_counties_id' => 11,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Nyergesújfalu',
                'core_counties_id' => 11,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Lábatlan',
                'core_counties_id' => 11,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Süttő',
                'core_counties_id' => 11,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Neszmély',
                'core_counties_id' => 11,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Dunaalmás',
                'core_counties_id' => 11,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Vác',
                'core_counties_id' => 13,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Nőtincs',
                'core_counties_id' => 12,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Felsőpetény',
                'core_counties_id' => 12,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Kosd',
                'core_counties_id' => 13,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Rád',
                'core_counties_id' => 13,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Penc',
                'core_counties_id' => 13,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Csővár',
                'core_counties_id' => 13,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Ősagárd',
                'core_counties_id' => 12,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Keszeg',
                'core_counties_id' => 12,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Alsópetény',
                'core_counties_id' => 12,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Nézsa',
                'core_counties_id' => 12,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Legénd',
                'core_counties_id' => 12,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Verőce',
                'core_counties_id' => 13,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Kismaros',
                'core_counties_id' => 13,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Szokolya',
                'core_counties_id' => 13,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Kóspallag',
                'core_counties_id' => 13,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Nagymaros',
                'core_counties_id' => 13,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Zebegény',
                'core_counties_id' => 13,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Szob',
                'core_counties_id' => 13,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Márianosztra',
                'core_counties_id' => 13,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Ipolydamásd',
                'core_counties_id' => 13,
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Letkés',
                'core_counties_id' => 13,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Ipolytölgyes',
                'core_counties_id' => 13,
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Nagybörzsöny',
                'core_counties_id' => 13,
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Vámosmikola',
                'core_counties_id' => 13,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Tésa',
                'core_counties_id' => 13,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Perőcsény',
                'core_counties_id' => 13,
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Kemence',
                'core_counties_id' => 13,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Bernecebaráti',
                'core_counties_id' => 13,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Szendehely',
                'core_counties_id' => 12,
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Berkenye',
                'core_counties_id' => 12,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Nógrád',
                'core_counties_id' => 12,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Diósjenő',
                'core_counties_id' => 12,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Borsosberény',
                'core_counties_id' => 12,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Nagyoroszi',
                'core_counties_id' => 12,
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Drégelypalánk',
                'core_counties_id' => 12,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Hont',
                'core_counties_id' => 12,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Patak',
                'core_counties_id' => 12,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Dejtár',
                'core_counties_id' => 12,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Rétság',
                'core_counties_id' => 12,
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Tereske',
                'core_counties_id' => 12,
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Bánk',
                'core_counties_id' => 12,
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Romhány',
                'core_counties_id' => 12,
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Kétbodony',
                'core_counties_id' => 12,
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Kisecset',
                'core_counties_id' => 12,
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'Szente',
                'core_counties_id' => 12,
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Szátok',
                'core_counties_id' => 12,
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Tolmács',
                'core_counties_id' => 12,
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Horpács',
                'core_counties_id' => 12,
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'Pusztaberki',
                'core_counties_id' => 12,
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Érsekvadkert',
                'core_counties_id' => 12,
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'Balassagyarmat',
                'core_counties_id' => 12,
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Patvarc',
                'core_counties_id' => 12,
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Ipolyvece',
                'core_counties_id' => 12,
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Őrhalom',
                'core_counties_id' => 12,
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Hugyag',
                'core_counties_id' => 12,
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'Csitár',
                'core_counties_id' => 12,
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'Iliny',
                'core_counties_id' => 12,
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'Nógrádmarcal',
                'core_counties_id' => 12,
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'Cserhátsurány',
                'core_counties_id' => 12,
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'Herencsény',
                'core_counties_id' => 12,
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'Csesztve',
                'core_counties_id' => 12,
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Galgagyörk',
                'core_counties_id' => 13,
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'Püspökhatvan',
                'core_counties_id' => 13,
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Acsa',
                'core_counties_id' => 13,
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Nógrádsáp',
                'core_counties_id' => 12,
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'Galgaguta',
                'core_counties_id' => 12,
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Bercel',
                'core_counties_id' => 12,
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Vanyarc',
                'core_counties_id' => 12,
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Nógrádkövesd',
                'core_counties_id' => 12,
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'Szécsénke',
                'core_counties_id' => 12,
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Becske',
                'core_counties_id' => 12,
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Magyarnándor',
                'core_counties_id' => 12,
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Debercsény',
                'core_counties_id' => 12,
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Cserháthaláp',
                'core_counties_id' => 12,
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'Terény',
                'core_counties_id' => 12,
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Szanda',
                'core_counties_id' => 12,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Mohora',
                'core_counties_id' => 12,
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'Szügy',
                'core_counties_id' => 12,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Cegléd',
                'core_counties_id' => 13,
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Tápiószentmárton',
                'core_counties_id' => 13,
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'Nyársapát',
                'core_counties_id' => 13,
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Csemő',
                'core_counties_id' => 13,
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Pilis',
                'core_counties_id' => 13,
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Nyáregyháza',
                'core_counties_id' => 13,
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Újlengyel',
                'core_counties_id' => 13,
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Albertirsa',
                'core_counties_id' => 13,
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Dánszentmiklós',
                'core_counties_id' => 13,
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'Mikebuda',
                'core_counties_id' => 13,
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Ceglédbercel',
                'core_counties_id' => 13,
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'Abony',
                'core_counties_id' => 13,
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Kőröstetétlen',
                'core_counties_id' => 13,
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'Jászkarajenő',
                'core_counties_id' => 13,
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Törtel',
                'core_counties_id' => 13,
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Nagykőrös',
                'core_counties_id' => 13,
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Kocsér',
                'core_counties_id' => 13,
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'Nagykáta',
                'core_counties_id' => 13,
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Tápióbicske',
                'core_counties_id' => 13,
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Farmos',
                'core_counties_id' => 13,
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Tápiószele',
                'core_counties_id' => 13,
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Tápiógyörgye',
                'core_counties_id' => 13,
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Újszilvás',
                'core_counties_id' => 13,
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Tápiószőlős',
                'core_counties_id' => 13,
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'Tatabánya',
                'core_counties_id' => 11,
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Gyermely',
                'core_counties_id' => 11,
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Szomor',
                'core_counties_id' => 11,
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Vértessomló',
                'core_counties_id' => 11,
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Várgesztes',
                'core_counties_id' => 11,
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Tarján',
                'core_counties_id' => 11,
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Héreg',
                'core_counties_id' => 11,
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Vértestolna',
                'core_counties_id' => 11,
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Tardos',
                'core_counties_id' => 11,
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Baj',
                'core_counties_id' => 11,
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Vértesszőlős',
                'core_counties_id' => 11,
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'Oroszlány',
                'core_counties_id' => 11,
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Környe',
                'core_counties_id' => 11,
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'Kecskéd',
                'core_counties_id' => 11,
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Kömlőd',
                'core_counties_id' => 11,
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Dad',
                'core_counties_id' => 11,
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Bokod',
                'core_counties_id' => 11,
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Szákszend',
                'core_counties_id' => 11,
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Császár',
                'core_counties_id' => 11,
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Vérteskethely',
                'core_counties_id' => 11,
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Bakonysárkány',
                'core_counties_id' => 11,
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Aka',
                'core_counties_id' => 11,
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'Kisbér',
                'core_counties_id' => 11,
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Ászár',
                'core_counties_id' => 11,
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Kerékteleki',
                'core_counties_id' => 11,
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Bársonyos',
                'core_counties_id' => 11,
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'Bakonyszombathely',
                'core_counties_id' => 11,
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'Bakonybánk',
                'core_counties_id' => 11,
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Réde',
                'core_counties_id' => 11,
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Ácsteszér',
                'core_counties_id' => 11,
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Csatka',
                'core_counties_id' => 11,
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Súr',
                'core_counties_id' => 11,
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Tata',
                'core_counties_id' => 11,
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Szomód',
                'core_counties_id' => 11,
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Dunaszentmiklós',
                'core_counties_id' => 11,
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Kocs',
                'core_counties_id' => 11,
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Naszály',
                'core_counties_id' => 11,
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'Komárom',
                'core_counties_id' => 11,
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Mocsa',
                'core_counties_id' => 11,
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Almásfüzitő',
                'core_counties_id' => 11,
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'Ács',
                'core_counties_id' => 11,
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'Nagyigmánd',
                'core_counties_id' => 11,
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Bábolna',
                'core_counties_id' => 11,
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'Bana',
                'core_counties_id' => 11,
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Tárkány',
                'core_counties_id' => 11,
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'Csép',
                'core_counties_id' => 11,
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'Ete',
                'core_counties_id' => 11,
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Kisigmánd',
                'core_counties_id' => 11,
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'Csém',
                'core_counties_id' => 11,
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Hatvan',
                'core_counties_id' => 9,
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Heréd',
                'core_counties_id' => 9,
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Nagykökényes',
                'core_counties_id' => 9,
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'Ecséd',
                'core_counties_id' => 9,
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Hort',
                'core_counties_id' => 9,
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Csány',
                'core_counties_id' => 9,
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Boldog',
                'core_counties_id' => 9,
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Lőrinci',
                'core_counties_id' => 9,
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'Petőfibánya',
                'core_counties_id' => 9,
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'Zagyvaszántó',
                'core_counties_id' => 9,
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Apc',
                'core_counties_id' => 9,
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Rózsaszentmárton',
                'core_counties_id' => 9,
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Szűcsi',
                'core_counties_id' => 9,
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'Gyöngyöspata',
                'core_counties_id' => 9,
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Gyöngyöstarján',
                'core_counties_id' => 9,
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'Héhalom',
                'core_counties_id' => 12,
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'Palotás',
                'core_counties_id' => 12,
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Egyházasdengeleg',
                'core_counties_id' => 12,
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Szirák',
                'core_counties_id' => 12,
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'Bér',
                'core_counties_id' => 12,
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'Kisbágyon',
                'core_counties_id' => 12,
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'Buják',
                'core_counties_id' => 12,
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'Szarvasgede',
                'core_counties_id' => 12,
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'Csécse',
                'core_counties_id' => 12,
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Kozárd',
                'core_counties_id' => 12,
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Ecseg',
                'core_counties_id' => 12,
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Pásztó',
                'core_counties_id' => 12,
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Jobbágyi',
                'core_counties_id' => 12,
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'Szurdokpüspöki',
                'core_counties_id' => 12,
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'Kutasó',
                'core_counties_id' => 12,
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Bokor',
                'core_counties_id' => 12,
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Cserhátszentiván',
                'core_counties_id' => 12,
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'Felsőtold',
                'core_counties_id' => 12,
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'Garáb',
                'core_counties_id' => 12,
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Mátraszőlős',
                'core_counties_id' => 12,
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'Alsótold',
                'core_counties_id' => 12,
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'Bátonyterenye',
                'core_counties_id' => 12,
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'Tar',
                'core_counties_id' => 12,
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Sámsonháza',
                'core_counties_id' => 12,
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'Márkháza',
                'core_counties_id' => 12,
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Kisbárkány',
                'core_counties_id' => 12,
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'Nagybárkány',
                'core_counties_id' => 12,
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'Mátraverebély',
                'core_counties_id' => 12,
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'Salgótarján',
                'core_counties_id' => 12,
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'Cered',
                'core_counties_id' => 12,
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'Zabar',
                'core_counties_id' => 12,
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'Szilaspogony',
                'core_counties_id' => 12,
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Bárna',
                'core_counties_id' => 12,
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'Kazár',
                'core_counties_id' => 12,
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'Vizslás',
                'core_counties_id' => 12,
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'Lucfalva',
                'core_counties_id' => 12,
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'Sóshartyán',
                'core_counties_id' => 12,
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'Nógrádmegyer',
                'core_counties_id' => 12,
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'Magyargéc',
                'core_counties_id' => 12,
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'Piliny',
                'core_counties_id' => 12,
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'Szécsényfelfalu',
                'core_counties_id' => 12,
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Etes',
                'core_counties_id' => 12,
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Karancsberény',
                'core_counties_id' => 12,
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'Ipolytarnóc',
                'core_counties_id' => 12,
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'Mátraszele',
                'core_counties_id' => 12,
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'Mátranovák',
                'core_counties_id' => 12,
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'Mátraterenye',
                'core_counties_id' => 12,
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'Rákóczibánya',
                'core_counties_id' => 12,
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'Nemti',
                'core_counties_id' => 12,
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'Dorogháza',
                'core_counties_id' => 12,
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'Szuha',
                'core_counties_id' => 12,
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Mátramindszent',
                'core_counties_id' => 12,
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'Kishartyán',
                'core_counties_id' => 12,
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'Ságújfalu',
                'core_counties_id' => 12,
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Karancsság',
                'core_counties_id' => 12,
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'Szalmatercs',
                'core_counties_id' => 12,
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'Endrefalva',
                'core_counties_id' => 12,
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'Szécsény',
                'core_counties_id' => 12,
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'Nagylóc',
                'core_counties_id' => 12,
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Hollókő',
                'core_counties_id' => 12,
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Rimóc',
                'core_counties_id' => 12,
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Varsány',
                'core_counties_id' => 12,
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Nógrádsipek',
                'core_counties_id' => 12,
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'Karancsalja',
                'core_counties_id' => 12,
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'Karancslapujtő',
                'core_counties_id' => 12,
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'Karancskeszi',
                'core_counties_id' => 12,
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'Mihálygerge',
                'core_counties_id' => 12,
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'Egyházasgerge',
                'core_counties_id' => 12,
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'Litke',
                'core_counties_id' => 12,
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'Nógrádszakál',
                'core_counties_id' => 12,
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'Ludányhalászi',
                'core_counties_id' => 12,
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'Gyöngyös',
                'core_counties_id' => 9,
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'Gyöngyösoroszi',
                'core_counties_id' => 9,
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'Gyöngyöshalász',
                'core_counties_id' => 9,
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'Atkár',
                'core_counties_id' => 9,
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'Nagyréde',
                'core_counties_id' => 9,
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'Gyöngyössolymos',
                'core_counties_id' => 9,
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'Mátraszentimre',
                'core_counties_id' => 9,
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'Parád',
                'core_counties_id' => 9,
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'Parádsasvár',
                'core_counties_id' => 9,
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'Bodony',
                'core_counties_id' => 9,
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'Recsk',
                'core_counties_id' => 9,
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'Mátraderecske',
                'core_counties_id' => 9,
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'Mátraballa',
                'core_counties_id' => 9,
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'Ivád',
                'core_counties_id' => 9,
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'Pétervására',
                'core_counties_id' => 9,
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'Erdőkövesd',
                'core_counties_id' => 9,
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'Istenmezeje',
                'core_counties_id' => 9,
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'Váraszó',
                'core_counties_id' => 9,
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'Fedémes',
                'core_counties_id' => 9,
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'Kisfüzes',
                'core_counties_id' => 9,
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'Bükkszenterzsébet',
                'core_counties_id' => 9,
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'Tarnalelesz',
                'core_counties_id' => 9,
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'Szentdomonkos',
                'core_counties_id' => 9,
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'Abasár',
                'core_counties_id' => 9,
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'Markaz',
                'core_counties_id' => 9,
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'Domoszló',
                'core_counties_id' => 9,
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'Kisnána',
                'core_counties_id' => 9,
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'Vécs',
                'core_counties_id' => 9,
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'Visonta',
                'core_counties_id' => 9,
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'Halmajugra',
                'core_counties_id' => 9,
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'Ludas',
                'core_counties_id' => 9,
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'Detk',
                'core_counties_id' => 9,
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'Karácsond',
                'core_counties_id' => 9,
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'Nagyfüged',
                'core_counties_id' => 9,
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'Tarnazsadány',
                'core_counties_id' => 9,
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'Tarnaméra',
                'core_counties_id' => 9,
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'Vámosgyörk',
                'core_counties_id' => 9,
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'Adács',
                'core_counties_id' => 9,
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'Visznek',
                'core_counties_id' => 9,
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'Tarnaörs',
                'core_counties_id' => 9,
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'Erk',
                'core_counties_id' => 9,
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'Zaránk',
                'core_counties_id' => 9,
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'Eger',
                'core_counties_id' => 9,
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'Egerbakta',
                'core_counties_id' => 9,
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'Hevesaranyos',
                'core_counties_id' => 9,
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'Szarvaskő',
                'core_counties_id' => 9,
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'Felsőtárkány',
                'core_counties_id' => 9,
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'Noszvaj',
                'core_counties_id' => 9,
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'Ostoros',
                'core_counties_id' => 9,
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'Novaj',
                'core_counties_id' => 9,
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'Egerszólát',
                'core_counties_id' => 9,
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'Tarnaszentmária',
                'core_counties_id' => 9,
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'Sirok',
                'core_counties_id' => 9,
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'Terpes',
                'core_counties_id' => 9,
            ),
        ));
        \DB::table('core_cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'Szajla',
                'core_counties_id' => 9,
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'Bükkszék',
                'core_counties_id' => 9,
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'Bátor',
                'core_counties_id' => 9,
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'Egerbocs',
                'core_counties_id' => 9,
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'Szúcs',
                'core_counties_id' => 9,
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'Egercsehi',
                'core_counties_id' => 9,
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'Bekölce',
                'core_counties_id' => 9,
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'Mikófalva',
                'core_counties_id' => 9,
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'Mónosbél',
                'core_counties_id' => 9,
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'Bélapátfalva',
                'core_counties_id' => 9,
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'Bükkszentmárton',
                'core_counties_id' => 9,
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'Balaton',
                'core_counties_id' => 9,
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'Szilvásvárad',
                'core_counties_id' => 9,
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'Nagyvisnyó',
                'core_counties_id' => 9,
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'Kál',
                'core_counties_id' => 9,
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'Verpelét',
                'core_counties_id' => 9,
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'Feldebrő',
                'core_counties_id' => 9,
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'Aldebrő',
                'core_counties_id' => 9,
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'Tófalu',
                'core_counties_id' => 9,
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'Kápolna',
                'core_counties_id' => 9,
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'Kompolt',
                'core_counties_id' => 9,
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'Nagyút',
                'core_counties_id' => 9,
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'Erdőtelek',
                'core_counties_id' => 9,
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'Tenk',
                'core_counties_id' => 9,
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'Heves',
                'core_counties_id' => 9,
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'Boconád',
                'core_counties_id' => 9,
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'Tarnabod',
                'core_counties_id' => 9,
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'Átány',
                'core_counties_id' => 9,
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'Kömlő',
                'core_counties_id' => 9,
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'Besenyőtelek',
                'core_counties_id' => 9,
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'Dormánd',
                'core_counties_id' => 9,
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'Mezőtárkány',
                'core_counties_id' => 9,
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'Szihalom',
                'core_counties_id' => 9,
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'Mezőszemere',
                'core_counties_id' => 9,
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'Egerfarmos',
                'core_counties_id' => 9,
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'Pély',
                'core_counties_id' => 9,
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'Tarnaszentmiklós',
                'core_counties_id' => 9,
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'Hevesvezekény',
                'core_counties_id' => 9,
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'Kisköre',
                'core_counties_id' => 9,
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'Tiszanána',
                'core_counties_id' => 9,
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'Sarud',
                'core_counties_id' => 9,
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'Újlőrincfalva',
                'core_counties_id' => 9,
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'Poroszló',
                'core_counties_id' => 9,
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'Füzesabony',
                'core_counties_id' => 9,
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'Egerszalók',
                'core_counties_id' => 9,
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'Demjén',
                'core_counties_id' => 9,
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'Kerecsend',
                'core_counties_id' => 9,
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'Maklár',
                'core_counties_id' => 9,
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'Nagytálya',
                'core_counties_id' => 9,
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'Andornaktálya',
                'core_counties_id' => 9,
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'Mezőkövesd',
                'core_counties_id' => 4,
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'Szomolya',
                'core_counties_id' => 4,
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'Bogács',
                'core_counties_id' => 4,
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'Cserépfalu',
                'core_counties_id' => 4,
            ),
            54 => 
            array (
                'id' => 555,
                'name' => 'Bükkzsérc',
                'core_counties_id' => 4,
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'Tard',
                'core_counties_id' => 4,
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'Cserépváralja',
                'core_counties_id' => 4,
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'Szentistván',
                'core_counties_id' => 4,
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'Mezőnyárád',
                'core_counties_id' => 4,
            ),
            59 => 
            array (
                'id' => 560,
                'name' => 'Bükkábrány',
                'core_counties_id' => 4,
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'Tibolddaróc',
                'core_counties_id' => 4,
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'Kács',
                'core_counties_id' => 4,
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'Sály',
                'core_counties_id' => 4,
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'Borsodgeszt',
                'core_counties_id' => 4,
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'Vatta',
                'core_counties_id' => 4,
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'Emőd',
                'core_counties_id' => 4,
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'Nyékládháza',
                'core_counties_id' => 4,
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'Mályi',
                'core_counties_id' => 4,
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'Mezőkeresztes',
                'core_counties_id' => 4,
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'Csincse',
                'core_counties_id' => 4,
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'Mezőnagymihály',
                'core_counties_id' => 4,
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'Gelej',
                'core_counties_id' => 4,
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'Mezőcsát',
                'core_counties_id' => 4,
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'Tiszakeszi',
                'core_counties_id' => 4,
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'Igrici',
                'core_counties_id' => 4,
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'Egerlövő',
                'core_counties_id' => 4,
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'Borsodivánka',
                'core_counties_id' => 4,
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'Négyes',
                'core_counties_id' => 4,
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'Tiszavalk',
                'core_counties_id' => 4,
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'Tiszabábolna',
                'core_counties_id' => 4,
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'Tiszadorogma',
                'core_counties_id' => 4,
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'Ároktő',
                'core_counties_id' => 4,
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'Miskolc',
                'core_counties_id' => 4,
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'Ónod',
                'core_counties_id' => 4,
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'Muhi',
                'core_counties_id' => 4,
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'Kistokaj',
                'core_counties_id' => 4,
            ),
            86 => 
            array (
                'id' => 587,
                'name' => 'Bükkaranyos',
                'core_counties_id' => 4,
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'Harsány',
                'core_counties_id' => 4,
            ),
            88 => 
            array (
                'id' => 589,
                'name' => 'Kisgyőr',
                'core_counties_id' => 4,
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'Bükkszentkereszt',
                'core_counties_id' => 4,
            ),
            90 => 
            array (
                'id' => 591,
                'name' => 'Répáshuta',
                'core_counties_id' => 4,
            ),
            91 => 
            array (
                'id' => 592,
                'name' => 'Felsőzsolca',
                'core_counties_id' => 4,
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'Onga',
                'core_counties_id' => 4,
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'Hernádkak',
                'core_counties_id' => 4,
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'Hernádnémeti',
                'core_counties_id' => 4,
            ),
            95 => 
            array (
                'id' => 596,
                'name' => 'Tiszalúc',
                'core_counties_id' => 4,
            ),
            96 => 
            array (
                'id' => 597,
                'name' => 'Alsózsolca',
                'core_counties_id' => 4,
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'Sajólád',
                'core_counties_id' => 4,
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'Sajópetri',
                'core_counties_id' => 4,
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'Bőcs',
                'core_counties_id' => 4,
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'Berzék',
                'core_counties_id' => 4,
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'Sajóhídvég',
                'core_counties_id' => 4,
            ),
            102 => 
            array (
                'id' => 603,
                'name' => 'Köröm',
                'core_counties_id' => 4,
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'Girincs',
                'core_counties_id' => 4,
            ),
            104 => 
            array (
                'id' => 605,
                'name' => 'Kiscsécs',
                'core_counties_id' => 4,
            ),
            105 => 
            array (
                'id' => 606,
                'name' => 'Kesznyéten',
                'core_counties_id' => 4,
            ),
            106 => 
            array (
                'id' => 607,
                'name' => 'Tiszaújváros',
                'core_counties_id' => 4,
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'Sajóörös',
                'core_counties_id' => 4,
            ),
            108 => 
            array (
                'id' => 609,
                'name' => 'Tiszapalkonya',
                'core_counties_id' => 4,
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'Hejőkürt',
                'core_counties_id' => 4,
            ),
            110 => 
            array (
                'id' => 611,
                'name' => 'Tiszatarján',
                'core_counties_id' => 4,
            ),
            111 => 
            array (
                'id' => 612,
                'name' => 'Oszlár',
                'core_counties_id' => 4,
            ),
            112 => 
            array (
                'id' => 613,
                'name' => 'Nemesbikk',
                'core_counties_id' => 4,
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'Hejőbába',
                'core_counties_id' => 4,
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'Hejőpapi',
                'core_counties_id' => 4,
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'Hejőszalonta',
                'core_counties_id' => 4,
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'Szakáld',
                'core_counties_id' => 4,
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'Hejőkeresztúr',
                'core_counties_id' => 4,
            ),
            118 => 
            array (
                'id' => 619,
                'name' => 'Nagycsécs',
                'core_counties_id' => 4,
            ),
            119 => 
            array (
                'id' => 620,
                'name' => 'Sajószöged',
                'core_counties_id' => 4,
            ),
            120 => 
            array (
                'id' => 621,
                'name' => 'Ózd',
                'core_counties_id' => 4,
            ),
            121 => 
            array (
                'id' => 622,
                'name' => 'Uppony',
                'core_counties_id' => 4,
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'Borsodszentgyörgy',
                'core_counties_id' => 4,
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'Hangony',
                'core_counties_id' => 4,
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'Kissikátor',
                'core_counties_id' => 4,
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'Domaháza',
                'core_counties_id' => 4,
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'Putnok',
                'core_counties_id' => 4,
            ),
            127 => 
            array (
                'id' => 628,
                'name' => 'Dubicsány',
                'core_counties_id' => 4,
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'Sajógalgóc',
                'core_counties_id' => 4,
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'Vadna',
                'core_counties_id' => 4,
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'Nagybarca',
                'core_counties_id' => 4,
            ),
            131 => 
            array (
                'id' => 632,
                'name' => 'Bánhorváti',
                'core_counties_id' => 4,
            ),
            132 => 
            array (
                'id' => 633,
                'name' => 'Dédestapolcsány',
                'core_counties_id' => 4,
            ),
            133 => 
            array (
                'id' => 634,
                'name' => 'Tardona',
                'core_counties_id' => 4,
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'Mályinka',
                'core_counties_id' => 4,
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'Nekézseny',
                'core_counties_id' => 4,
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'Csokvaomány',
                'core_counties_id' => 4,
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'Lénárddaróc',
                'core_counties_id' => 4,
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'Bükkmogyorósd',
                'core_counties_id' => 4,
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'Csernely',
                'core_counties_id' => 4,
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'Lénárddaróc',
                'core_counties_id' => 4,
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'Sajónémeti',
                'core_counties_id' => 4,
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'Sajópüspöki',
                'core_counties_id' => 4,
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'Bánréve',
                'core_counties_id' => 4,
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'Hét',
                'core_counties_id' => 4,
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'Sajómercse',
                'core_counties_id' => 4,
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'Sajóvelezd',
                'core_counties_id' => 4,
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'Királd',
                'core_counties_id' => 4,
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'Borsodbóta',
                'core_counties_id' => 4,
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'Sáta',
                'core_counties_id' => 4,
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'Arló',
                'core_counties_id' => 4,
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'Járdánháza',
                'core_counties_id' => 4,
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'Borsodnádasd',
                'core_counties_id' => 4,
            ),
            153 => 
            array (
                'id' => 654,
                'name' => 'Kazincbarcika',
                'core_counties_id' => 4,
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'Szirmabesenyő',
                'core_counties_id' => 4,
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'Sajósenye',
                'core_counties_id' => 4,
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'Sajóvámos',
                'core_counties_id' => 4,
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'Arnót',
                'core_counties_id' => 4,
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'Sajópálfala',
                'core_counties_id' => 4,
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'Gesztely',
                'core_counties_id' => 4,
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'Újcsanálos',
                'core_counties_id' => 4,
            ),
            161 => 
            array (
                'id' => 662,
                'name' => 'Sóstófalva',
                'core_counties_id' => 4,
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'Alsódobsza',
                'core_counties_id' => 4,
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'Megyaszó',
                'core_counties_id' => 4,
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'Sajókaza',
                'core_counties_id' => 4,
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'Sajóivánka',
                'core_counties_id' => 4,
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'Felsőnyárád',
                'core_counties_id' => 4,
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'Jákfalva',
                'core_counties_id' => 4,
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'Dövény',
                'core_counties_id' => 4,
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'Felsőkelecsény',
                'core_counties_id' => 4,
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'Zubogy',
                'core_counties_id' => 4,
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'Imola',
                'core_counties_id' => 4,
            ),
            172 => 
            array (
                'id' => 673,
                'name' => 'Ragály',
                'core_counties_id' => 4,
            ),
            173 => 
            array (
                'id' => 674,
                'name' => 'Trizs',
                'core_counties_id' => 4,
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'Alsószuha',
                'core_counties_id' => 4,
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'Szuhafő',
                'core_counties_id' => 4,
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'Zádorfalva',
                'core_counties_id' => 4,
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'Gömörszőlős',
                'core_counties_id' => 4,
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'Kelemér',
                'core_counties_id' => 4,
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'Serényfalva',
                'core_counties_id' => 4,
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'Szuhakálló',
                'core_counties_id' => 4,
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'Kurityán',
                'core_counties_id' => 4,
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'Rudabánya',
                'core_counties_id' => 4,
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'Szuhogy',
                'core_counties_id' => 4,
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'Kánó',
                'core_counties_id' => 4,
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'Felsőtelekes',
                'core_counties_id' => 4,
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'Alsótelekes',
                'core_counties_id' => 4,
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'Izsófalva',
                'core_counties_id' => 4,
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'Rudolftelep',
                'core_counties_id' => 4,
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'Ormosbánya',
                'core_counties_id' => 4,
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'Múcsony',
                'core_counties_id' => 4,
            ),
            191 => 
            array (
                'id' => 692,
                'name' => 'Szendrőlád',
                'core_counties_id' => 4,
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'Galvács',
                'core_counties_id' => 4,
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'Szendrő',
                'core_counties_id' => 4,
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'Abod',
                'core_counties_id' => 4,
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'Szalonna',
                'core_counties_id' => 4,
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'Meszes',
                'core_counties_id' => 4,
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'Martonyi',
                'core_counties_id' => 4,
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'Varbóc',
                'core_counties_id' => 4,
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'Perkupa',
                'core_counties_id' => 4,
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'Égerszög',
                'core_counties_id' => 4,
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'Teresztenye',
                'core_counties_id' => 4,
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'Szőlősardó',
                'core_counties_id' => 4,
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'Jósvafő',
                'core_counties_id' => 4,
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'Aggtelek',
                'core_counties_id' => 4,
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'Szin',
                'core_counties_id' => 4,
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'Tornakápolna',
                'core_counties_id' => 4,
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'Szinpetri',
                'core_counties_id' => 4,
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'Szögliget',
                'core_counties_id' => 4,
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'Bódvaszilas',
                'core_counties_id' => 4,
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'Bódvarákó',
                'core_counties_id' => 4,
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'Tornaszentandrás',
                'core_counties_id' => 4,
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'Komjáti',
                'core_counties_id' => 4,
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'Tornabarakony',
                'core_counties_id' => 4,
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'Tornanádaska',
                'core_counties_id' => 4,
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'Hidvégardó',
                'core_counties_id' => 4,
            ),
            216 => 
            array (
                'id' => 717,
                'name' => 'Bódvalenke',
                'core_counties_id' => 4,
            ),
            217 => 
            array (
                'id' => 718,
                'name' => 'Becskeháza',
                'core_counties_id' => 4,
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'Tornaszentjakab',
                'core_counties_id' => 4,
            ),
            219 => 
            array (
                'id' => 720,
                'name' => 'Sajószentpéter',
                'core_counties_id' => 4,
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'Sajókápolna',
                'core_counties_id' => 4,
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'Sajólászlófalva',
                'core_counties_id' => 4,
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'Kondó',
                'core_counties_id' => 4,
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'Radostyán',
                'core_counties_id' => 4,
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'Parasznya',
                'core_counties_id' => 4,
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'Varbó',
                'core_counties_id' => 4,
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'Alacska',
                'core_counties_id' => 4,
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'Ládbesenyő',
                'core_counties_id' => 4,
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'Damak',
                'core_counties_id' => 4,
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'Balajt',
                'core_counties_id' => 4,
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'Edelény',
                'core_counties_id' => 4,
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'Ládbesenyő',
                'core_counties_id' => 4,
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'Irota',
                'core_counties_id' => 4,
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'Szakácsi',
                'core_counties_id' => 4,
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'Hegymeg',
                'core_counties_id' => 4,
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'Lak',
                'core_counties_id' => 4,
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'Tomor',
                'core_counties_id' => 4,
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'Sajókeresztúr',
                'core_counties_id' => 4,
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'Sajóbábony',
                'core_counties_id' => 4,
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'Sajóecseg',
                'core_counties_id' => 4,
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'Boldva',
                'core_counties_id' => 4,
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'Ziliz',
                'core_counties_id' => 4,
            ),
            242 => 
            array (
                'id' => 743,
                'name' => 'Hangács',
                'core_counties_id' => 4,
            ),
            243 => 
            array (
                'id' => 744,
                'name' => 'Nyomár',
                'core_counties_id' => 4,
            ),
            244 => 
            array (
                'id' => 745,
                'name' => 'Borsodszirák',
                'core_counties_id' => 4,
            ),
            245 => 
            array (
                'id' => 746,
                'name' => 'Szikszó',
                'core_counties_id' => 4,
            ),
            246 => 
            array (
                'id' => 747,
                'name' => 'Abaújszolnok',
                'core_counties_id' => 4,
            ),
            247 => 
            array (
                'id' => 748,
                'name' => 'Nyésta',
                'core_counties_id' => 4,
            ),
            248 => 
            array (
                'id' => 749,
                'name' => 'Selyeb',
                'core_counties_id' => 4,
            ),
            249 => 
            array (
                'id' => 750,
                'name' => 'Alsóvadász',
                'core_counties_id' => 4,
            ),
            250 => 
            array (
                'id' => 751,
                'name' => 'Monaj',
                'core_counties_id' => 4,
            ),
            251 => 
            array (
                'id' => 752,
                'name' => 'Homrogd',
                'core_counties_id' => 4,
            ),
            252 => 
            array (
                'id' => 753,
                'name' => 'Kupa',
                'core_counties_id' => 4,
            ),
            253 => 
            array (
                'id' => 754,
                'name' => 'Felsővadász',
                'core_counties_id' => 4,
            ),
            254 => 
            array (
                'id' => 755,
                'name' => 'Gadna',
                'core_counties_id' => 4,
            ),
            255 => 
            array (
                'id' => 756,
                'name' => 'Abaújlak',
                'core_counties_id' => 4,
            ),
            256 => 
            array (
                'id' => 757,
                'name' => 'Gagyvendégi',
                'core_counties_id' => 4,
            ),
            257 => 
            array (
                'id' => 758,
                'name' => 'Gagybátor',
                'core_counties_id' => 4,
            ),
            258 => 
            array (
                'id' => 759,
                'name' => 'Pamlény',
                'core_counties_id' => 4,
            ),
            259 => 
            array (
                'id' => 760,
                'name' => 'Büttös',
                'core_counties_id' => 4,
            ),
            260 => 
            array (
                'id' => 761,
                'name' => 'Szászfa',
                'core_counties_id' => 4,
            ),
            261 => 
            array (
                'id' => 762,
                'name' => 'Kány',
                'core_counties_id' => 4,
            ),
            262 => 
            array (
                'id' => 763,
                'name' => 'Perecse',
                'core_counties_id' => 4,
            ),
            263 => 
            array (
                'id' => 764,
                'name' => 'Krasznokvajda',
                'core_counties_id' => 4,
            ),
            264 => 
            array (
                'id' => 765,
                'name' => 'Keresztéte',
                'core_counties_id' => 4,
            ),
            265 => 
            array (
                'id' => 766,
                'name' => 'Debréte',
                'core_counties_id' => 4,
            ),
            266 => 
            array (
                'id' => 767,
                'name' => 'Rakaca',
                'core_counties_id' => 4,
            ),
            267 => 
            array (
                'id' => 768,
                'name' => 'Viszló',
                'core_counties_id' => 4,
            ),
            268 => 
            array (
                'id' => 769,
                'name' => 'Rakacaszend',
                'core_counties_id' => 4,
            ),
            269 => 
            array (
                'id' => 770,
                'name' => 'Kázsmárk',
                'core_counties_id' => 4,
            ),
            270 => 
            array (
                'id' => 771,
                'name' => 'Léh',
                'core_counties_id' => 4,
            ),
            271 => 
            array (
                'id' => 772,
                'name' => 'Rásonysápberencs',
                'core_counties_id' => 4,
            ),
            272 => 
            array (
                'id' => 773,
                'name' => 'Beret',
                'core_counties_id' => 4,
            ),
            273 => 
            array (
                'id' => 774,
                'name' => 'Detek',
                'core_counties_id' => 4,
            ),
            274 => 
            array (
                'id' => 775,
                'name' => 'Baktakék',
                'core_counties_id' => 4,
            ),
            275 => 
            array (
                'id' => 776,
                'name' => 'Felsőgagy',
                'core_counties_id' => 4,
            ),
            276 => 
            array (
                'id' => 777,
                'name' => 'Gagyapáti',
                'core_counties_id' => 4,
            ),
            277 => 
            array (
                'id' => 778,
                'name' => 'Alsógagy',
                'core_counties_id' => 4,
            ),
            278 => 
            array (
                'id' => 779,
                'name' => 'Csenyéte',
                'core_counties_id' => 4,
            ),
            279 => 
            array (
                'id' => 780,
                'name' => 'Aszaló',
                'core_counties_id' => 4,
            ),
            280 => 
            array (
                'id' => 781,
                'name' => 'Halmaj',
                'core_counties_id' => 4,
            ),
            281 => 
            array (
                'id' => 782,
                'name' => 'Kiskinizs',
                'core_counties_id' => 4,
            ),
            282 => 
            array (
                'id' => 783,
                'name' => 'Szentistvánbaksa',
                'core_counties_id' => 4,
            ),
            283 => 
            array (
                'id' => 784,
                'name' => 'Nagykinizs',
                'core_counties_id' => 4,
            ),
            284 => 
            array (
                'id' => 785,
                'name' => 'Hernádkércs',
                'core_counties_id' => 4,
            ),
            285 => 
            array (
                'id' => 786,
                'name' => 'Felsődobsza',
                'core_counties_id' => 4,
            ),
            286 => 
            array (
                'id' => 787,
                'name' => 'Csobád',
                'core_counties_id' => 4,
            ),
            287 => 
            array (
                'id' => 788,
                'name' => 'Forró',
                'core_counties_id' => 4,
            ),
            288 => 
            array (
                'id' => 789,
                'name' => 'Ináncs',
                'core_counties_id' => 4,
            ),
            289 => 
            array (
                'id' => 790,
                'name' => 'Hernádszentandrás',
                'core_counties_id' => 4,
            ),
            290 => 
            array (
                'id' => 791,
                'name' => 'Pere',
                'core_counties_id' => 4,
            ),
            291 => 
            array (
                'id' => 792,
                'name' => 'Hernádbűd',
                'core_counties_id' => 4,
            ),
            292 => 
            array (
                'id' => 793,
                'name' => 'Hernádbűd',
                'core_counties_id' => 4,
            ),
            293 => 
            array (
                'id' => 794,
                'name' => 'Fancsal',
                'core_counties_id' => 4,
            ),
            294 => 
            array (
                'id' => 795,
                'name' => 'Encs',
                'core_counties_id' => 4,
            ),
            295 => 
            array (
                'id' => 796,
                'name' => 'Szalaszend',
                'core_counties_id' => 4,
            ),
            296 => 
            array (
                'id' => 797,
                'name' => 'Fulókércs',
                'core_counties_id' => 4,
            ),
            297 => 
            array (
                'id' => 798,
                'name' => 'Fáj',
                'core_counties_id' => 4,
            ),
            298 => 
            array (
                'id' => 799,
                'name' => 'Szemere',
                'core_counties_id' => 4,
            ),
            299 => 
            array (
                'id' => 800,
                'name' => 'Litka',
                'core_counties_id' => 4,
            ),
            300 => 
            array (
                'id' => 801,
                'name' => 'Méra',
                'core_counties_id' => 4,
            ),
            301 => 
            array (
                'id' => 802,
                'name' => 'Novajidrány',
                'core_counties_id' => 4,
            ),
            302 => 
            array (
                'id' => 803,
                'name' => 'Garadna',
                'core_counties_id' => 4,
            ),
            303 => 
            array (
                'id' => 804,
                'name' => 'Pusztaradvány',
                'core_counties_id' => 4,
            ),
            304 => 
            array (
                'id' => 805,
                'name' => 'Hernádvécse',
                'core_counties_id' => 4,
            ),
            305 => 
            array (
                'id' => 806,
                'name' => 'Hernádpetri',
                'core_counties_id' => 4,
            ),
            306 => 
            array (
                'id' => 807,
                'name' => 'Hernádszurdok',
                'core_counties_id' => 4,
            ),
            307 => 
            array (
                'id' => 808,
                'name' => 'Hidasnémeti',
                'core_counties_id' => 4,
            ),
            308 => 
            array (
                'id' => 809,
                'name' => 'Tornyosnémeti',
                'core_counties_id' => 4,
            ),
            309 => 
            array (
                'id' => 810,
                'name' => 'Abaújszántó',
                'core_counties_id' => 4,
            ),
            310 => 
            array (
                'id' => 811,
                'name' => 'Sima',
                'core_counties_id' => 4,
            ),
            311 => 
            array (
                'id' => 812,
                'name' => 'Baskó',
                'core_counties_id' => 4,
            ),
            312 => 
            array (
                'id' => 813,
                'name' => 'Abaújalpár',
                'core_counties_id' => 4,
            ),
            313 => 
            array (
                'id' => 814,
                'name' => 'Abaújkér',
                'core_counties_id' => 4,
            ),
            314 => 
            array (
                'id' => 815,
                'name' => 'Boldogkőújfalu',
                'core_counties_id' => 4,
            ),
            315 => 
            array (
                'id' => 816,
                'name' => 'Boldogkőváralja',
                'core_counties_id' => 4,
            ),
            316 => 
            array (
                'id' => 817,
                'name' => 'Arka',
                'core_counties_id' => 4,
            ),
            317 => 
            array (
                'id' => 818,
                'name' => 'Korlát',
                'core_counties_id' => 4,
            ),
            318 => 
            array (
                'id' => 819,
                'name' => 'Hernádcéce',
                'core_counties_id' => 4,
            ),
            319 => 
            array (
                'id' => 820,
                'name' => 'Vizsoly',
                'core_counties_id' => 4,
            ),
            320 => 
            array (
                'id' => 821,
                'name' => 'Vilmány',
                'core_counties_id' => 4,
            ),
            321 => 
            array (
                'id' => 822,
                'name' => 'Hejce',
                'core_counties_id' => 4,
            ),
            322 => 
            array (
                'id' => 823,
                'name' => 'Regéc',
                'core_counties_id' => 4,
            ),
            323 => 
            array (
                'id' => 824,
                'name' => 'Fony',
                'core_counties_id' => 4,
            ),
            324 => 
            array (
                'id' => 825,
                'name' => 'Mogyoróska',
                'core_counties_id' => 4,
            ),
            325 => 
            array (
                'id' => 826,
                'name' => 'Göncruszka',
                'core_counties_id' => 4,
            ),
            326 => 
            array (
                'id' => 827,
                'name' => 'Gönc',
                'core_counties_id' => 4,
            ),
            327 => 
            array (
                'id' => 828,
                'name' => 'Telkibánya',
                'core_counties_id' => 4,
            ),
            328 => 
            array (
                'id' => 829,
                'name' => 'Zsujta',
                'core_counties_id' => 4,
            ),
            329 => 
            array (
                'id' => 830,
                'name' => 'Abaújvár',
                'core_counties_id' => 4,
            ),
            330 => 
            array (
                'id' => 831,
                'name' => 'Pányok',
                'core_counties_id' => 4,
            ),
            331 => 
            array (
                'id' => 832,
                'name' => 'Kéked',
                'core_counties_id' => 4,
            ),
            332 => 
            array (
                'id' => 833,
                'name' => 'Szerencs',
                'core_counties_id' => 4,
            ),
            333 => 
            array (
                'id' => 834,
                'name' => 'Bekecs',
                'core_counties_id' => 4,
            ),
            334 => 
            array (
                'id' => 835,
                'name' => 'Legyesbénye',
                'core_counties_id' => 4,
            ),
            335 => 
            array (
                'id' => 836,
                'name' => 'Monok',
                'core_counties_id' => 4,
            ),
            336 => 
            array (
                'id' => 837,
                'name' => 'Golop',
                'core_counties_id' => 4,
            ),
            337 => 
            array (
                'id' => 838,
                'name' => 'Tállya',
                'core_counties_id' => 4,
            ),
            338 => 
            array (
                'id' => 839,
                'name' => 'Rátka',
                'core_counties_id' => 4,
            ),
            339 => 
            array (
                'id' => 840,
                'name' => 'Mád',
                'core_counties_id' => 4,
            ),
            340 => 
            array (
                'id' => 841,
                'name' => 'Tokaj',
                'core_counties_id' => 4,
            ),
            341 => 
            array (
                'id' => 842,
                'name' => 'Tarcal',
                'core_counties_id' => 4,
            ),
            342 => 
            array (
                'id' => 843,
                'name' => 'Bodrogkeresztúr',
                'core_counties_id' => 4,
            ),
            343 => 
            array (
                'id' => 844,
                'name' => 'Bodrogkisfalud',
                'core_counties_id' => 4,
            ),
            344 => 
            array (
                'id' => 845,
                'name' => 'Szegi',
                'core_counties_id' => 4,
            ),
            345 => 
            array (
                'id' => 846,
                'name' => 'Szegilong',
                'core_counties_id' => 4,
            ),
            346 => 
            array (
                'id' => 847,
                'name' => 'Taktaszada',
                'core_counties_id' => 4,
            ),
            347 => 
            array (
                'id' => 848,
                'name' => 'Taktaharkány',
                'core_counties_id' => 4,
            ),
            348 => 
            array (
                'id' => 849,
                'name' => 'Taktakenéz',
                'core_counties_id' => 4,
            ),
            349 => 
            array (
                'id' => 850,
                'name' => 'Prügy',
                'core_counties_id' => 4,
            ),
            350 => 
            array (
                'id' => 851,
                'name' => 'Taktabáj',
                'core_counties_id' => 4,
            ),
            351 => 
            array (
                'id' => 852,
                'name' => 'Csobaj',
                'core_counties_id' => 4,
            ),
            352 => 
            array (
                'id' => 853,
                'name' => 'Tiszatardos',
                'core_counties_id' => 4,
            ),
            353 => 
            array (
                'id' => 854,
                'name' => 'Tiszaladány',
                'core_counties_id' => 4,
            ),
            354 => 
            array (
                'id' => 855,
                'name' => 'Mezőzombor',
                'core_counties_id' => 4,
            ),
            355 => 
            array (
                'id' => 856,
                'name' => 'Erdőbénye',
                'core_counties_id' => 4,
            ),
            356 => 
            array (
                'id' => 857,
                'name' => 'Olaszliszka',
                'core_counties_id' => 4,
            ),
            357 => 
            array (
                'id' => 858,
                'name' => 'Tolcsva',
                'core_counties_id' => 4,
            ),
            358 => 
            array (
                'id' => 859,
                'name' => 'Erdőhorváti',
                'core_counties_id' => 4,
            ),
            359 => 
            array (
                'id' => 860,
                'name' => 'Háromhuta',
                'core_counties_id' => 4,
            ),
            360 => 
            array (
                'id' => 861,
                'name' => 'Komlóska',
                'core_counties_id' => 4,
            ),
            361 => 
            array (
                'id' => 862,
                'name' => 'Vámosújfalu',
                'core_counties_id' => 4,
            ),
            362 => 
            array (
                'id' => 863,
                'name' => 'Sárazsadány',
                'core_counties_id' => 4,
            ),
            363 => 
            array (
                'id' => 864,
                'name' => 'Bodrogolaszi',
                'core_counties_id' => 4,
            ),
            364 => 
            array (
                'id' => 865,
                'name' => 'Sárospatak',
                'core_counties_id' => 4,
            ),
            365 => 
            array (
                'id' => 866,
                'name' => 'Györgytarló',
                'core_counties_id' => 4,
            ),
            366 => 
            array (
                'id' => 867,
                'name' => 'Kenézlő',
                'core_counties_id' => 4,
            ),
            367 => 
            array (
                'id' => 868,
                'name' => 'Viss',
                'core_counties_id' => 4,
            ),
            368 => 
            array (
                'id' => 869,
                'name' => 'Zalkod',
                'core_counties_id' => 4,
            ),
            369 => 
            array (
                'id' => 870,
                'name' => 'Hercegkút',
                'core_counties_id' => 4,
            ),
            370 => 
            array (
                'id' => 871,
                'name' => 'Makkoshotyka',
                'core_counties_id' => 4,
            ),
            371 => 
            array (
                'id' => 872,
                'name' => 'Vajdácska',
                'core_counties_id' => 4,
            ),
            372 => 
            array (
                'id' => 873,
                'name' => 'Karos',
                'core_counties_id' => 4,
            ),
            373 => 
            array (
                'id' => 874,
                'name' => 'Karcsa',
                'core_counties_id' => 4,
            ),
            374 => 
            array (
                'id' => 875,
                'name' => 'Pácin',
                'core_counties_id' => 4,
            ),
            375 => 
            array (
                'id' => 876,
                'name' => 'Kisrozvágy',
                'core_counties_id' => 4,
            ),
            376 => 
            array (
                'id' => 877,
                'name' => 'Nagyrozvágy',
                'core_counties_id' => 4,
            ),
            377 => 
            array (
                'id' => 878,
                'name' => 'Lácacséke',
                'core_counties_id' => 4,
            ),
            378 => 
            array (
                'id' => 879,
                'name' => 'Tiszakarád',
                'core_counties_id' => 4,
            ),
            379 => 
            array (
                'id' => 880,
                'name' => 'Tiszacsermely',
                'core_counties_id' => 4,
            ),
            380 => 
            array (
                'id' => 881,
                'name' => 'Cigánd',
                'core_counties_id' => 4,
            ),
            381 => 
            array (
                'id' => 882,
                'name' => 'Ricse',
                'core_counties_id' => 4,
            ),
            382 => 
            array (
                'id' => 883,
                'name' => 'Semjén',
                'core_counties_id' => 4,
            ),
            383 => 
            array (
                'id' => 884,
                'name' => 'Révleányvár',
                'core_counties_id' => 4,
            ),
            384 => 
            array (
                'id' => 885,
                'name' => 'Zemplénagárd',
                'core_counties_id' => 4,
            ),
            385 => 
            array (
                'id' => 886,
                'name' => 'Dámóc',
                'core_counties_id' => 4,
            ),
            386 => 
            array (
                'id' => 887,
                'name' => 'Sátoraljaújhely',
                'core_counties_id' => 4,
            ),
            387 => 
            array (
                'id' => 888,
                'name' => 'Felsőberecki',
                'core_counties_id' => 4,
            ),
            388 => 
            array (
                'id' => 889,
                'name' => 'Alsóberecki',
                'core_counties_id' => 4,
            ),
            389 => 
            array (
                'id' => 890,
                'name' => 'Bodroghalom',
                'core_counties_id' => 4,
            ),
            390 => 
            array (
                'id' => 891,
                'name' => 'Mikóháza',
                'core_counties_id' => 4,
            ),
            391 => 
            array (
                'id' => 892,
                'name' => 'Felsőregmec',
                'core_counties_id' => 4,
            ),
            392 => 
            array (
                'id' => 893,
                'name' => 'Alsóregmec',
                'core_counties_id' => 4,
            ),
            393 => 
            array (
                'id' => 894,
                'name' => 'Vilyvitány',
                'core_counties_id' => 4,
            ),
            394 => 
            array (
                'id' => 895,
                'name' => 'Vágáshuta',
                'core_counties_id' => 4,
            ),
            395 => 
            array (
                'id' => 896,
                'name' => 'Kovácsvágás',
                'core_counties_id' => 4,
            ),
            396 => 
            array (
                'id' => 897,
                'name' => 'Füzérradvány',
                'core_counties_id' => 4,
            ),
            397 => 
            array (
                'id' => 898,
                'name' => 'Kishuta',
                'core_counties_id' => 4,
            ),
            398 => 
            array (
                'id' => 899,
                'name' => 'Filkeháza',
                'core_counties_id' => 4,
            ),
            399 => 
            array (
                'id' => 900,
                'name' => 'Nagyhuta',
                'core_counties_id' => 4,
            ),
            400 => 
            array (
                'id' => 901,
                'name' => 'Füzérkajata',
                'core_counties_id' => 4,
            ),
            401 => 
            array (
                'id' => 902,
                'name' => 'Pálháza',
                'core_counties_id' => 4,
            ),
            402 => 
            array (
                'id' => 903,
                'name' => 'Bózsva',
                'core_counties_id' => 4,
            ),
            403 => 
            array (
                'id' => 904,
                'name' => 'Pusztafalu',
                'core_counties_id' => 4,
            ),
            404 => 
            array (
                'id' => 905,
                'name' => 'Füzér',
                'core_counties_id' => 4,
            ),
            405 => 
            array (
                'id' => 906,
                'name' => 'Füzérkomlós',
                'core_counties_id' => 4,
            ),
            406 => 
            array (
                'id' => 907,
                'name' => 'Nyíri',
                'core_counties_id' => 4,
            ),
            407 => 
            array (
                'id' => 908,
                'name' => 'Hollóháza',
                'core_counties_id' => 4,
            ),
            408 => 
            array (
                'id' => 909,
                'name' => 'Debrecen',
                'core_counties_id' => 8,
            ),
            409 => 
            array (
                'id' => 910,
                'name' => 'Balmazújváros',
                'core_counties_id' => 8,
            ),
            410 => 
            array (
                'id' => 911,
                'name' => 'Nagyhegyes',
                'core_counties_id' => 8,
            ),
            411 => 
            array (
                'id' => 912,
                'name' => 'Újszentmargita',
                'core_counties_id' => 8,
            ),
            412 => 
            array (
                'id' => 913,
                'name' => 'Tiszacsege',
                'core_counties_id' => 8,
            ),
            413 => 
            array (
                'id' => 914,
                'name' => 'Egyek',
                'core_counties_id' => 8,
            ),
            414 => 
            array (
                'id' => 915,
                'name' => 'Hortobágy',
                'core_counties_id' => 8,
            ),
            415 => 
            array (
                'id' => 916,
                'name' => 'Tarnalelesz',
                'core_counties_id' => 8,
            ),
            416 => 
            array (
                'id' => 917,
                'name' => 'Görbeháza',
                'core_counties_id' => 8,
            ),
            417 => 
            array (
                'id' => 918,
                'name' => 'Hajdúnánás',
                'core_counties_id' => 8,
            ),
            418 => 
            array (
                'id' => 919,
                'name' => 'Hajdúdorog',
                'core_counties_id' => 8,
            ),
            419 => 
            array (
                'id' => 920,
                'name' => 'Polgár',
                'core_counties_id' => 8,
            ),
            420 => 
            array (
                'id' => 921,
                'name' => 'Folyás',
                'core_counties_id' => 8,
            ),
            421 => 
            array (
                'id' => 922,
                'name' => 'Újtikos',
                'core_counties_id' => 8,
            ),
            422 => 
            array (
                'id' => 923,
                'name' => 'Tiszagyulaháza',
                'core_counties_id' => 8,
            ),
            423 => 
            array (
                'id' => 924,
                'name' => 'Berettyóújfalu',
                'core_counties_id' => 8,
            ),
            424 => 
            array (
                'id' => 925,
                'name' => 'Biharkeresztes',
                'core_counties_id' => 8,
            ),
            425 => 
            array (
                'id' => 926,
                'name' => 'Bojt',
                'core_counties_id' => 8,
            ),
            426 => 
            array (
                'id' => 927,
                'name' => 'Ártánd',
                'core_counties_id' => 8,
            ),
            427 => 
            array (
                'id' => 928,
                'name' => 'Berekböszörmény',
                'core_counties_id' => 8,
            ),
            428 => 
            array (
                'id' => 929,
                'name' => 'Told',
                'core_counties_id' => 8,
            ),
            429 => 
            array (
                'id' => 930,
                'name' => 'Mezőpeterd',
                'core_counties_id' => 8,
            ),
            430 => 
            array (
                'id' => 931,
                'name' => 'Váncsod',
                'core_counties_id' => 8,
            ),
            431 => 
            array (
                'id' => 932,
                'name' => 'Szentpéterszeg',
                'core_counties_id' => 8,
            ),
            432 => 
            array (
                'id' => 933,
                'name' => 'Gáborján',
                'core_counties_id' => 8,
            ),
            433 => 
            array (
                'id' => 934,
                'name' => 'Hencida',
                'core_counties_id' => 8,
            ),
            434 => 
            array (
                'id' => 935,
                'name' => 'Esztár',
                'core_counties_id' => 8,
            ),
            435 => 
            array (
                'id' => 936,
                'name' => 'Pocsaj',
                'core_counties_id' => 8,
            ),
            436 => 
            array (
                'id' => 937,
                'name' => 'Kismarja',
                'core_counties_id' => 8,
            ),
            437 => 
            array (
                'id' => 938,
                'name' => 'Nagykereki',
                'core_counties_id' => 8,
            ),
            438 => 
            array (
                'id' => 939,
                'name' => 'Bedő',
                'core_counties_id' => 8,
            ),
            439 => 
            array (
                'id' => 940,
                'name' => 'Derecske',
                'core_counties_id' => 8,
            ),
            440 => 
            array (
                'id' => 941,
                'name' => 'Tépe',
                'core_counties_id' => 8,
            ),
            441 => 
            array (
                'id' => 942,
                'name' => 'Konyár',
                'core_counties_id' => 8,
            ),
            442 => 
            array (
                'id' => 943,
                'name' => 'Mezősas',
                'core_counties_id' => 8,
            ),
            443 => 
            array (
                'id' => 944,
                'name' => 'Körösszegapáti',
                'core_counties_id' => 8,
            ),
            444 => 
            array (
                'id' => 945,
                'name' => 'Körösszakál',
                'core_counties_id' => 8,
            ),
            445 => 
            array (
                'id' => 946,
                'name' => 'Magyarhomorog',
                'core_counties_id' => 8,
            ),
            446 => 
            array (
                'id' => 947,
                'name' => 'Komádi',
                'core_counties_id' => 8,
            ),
            447 => 
            array (
                'id' => 948,
                'name' => 'Furta',
                'core_counties_id' => 8,
            ),
            448 => 
            array (
                'id' => 949,
                'name' => 'Zsáka',
                'core_counties_id' => 8,
            ),
            449 => 
            array (
                'id' => 950,
                'name' => 'Vekerd',
                'core_counties_id' => 8,
            ),
            450 => 
            array (
                'id' => 951,
                'name' => 'Darvas',
                'core_counties_id' => 8,
            ),
            451 => 
            array (
                'id' => 952,
                'name' => 'Csökmő',
                'core_counties_id' => 8,
            ),
            452 => 
            array (
                'id' => 953,
                'name' => 'Újiráz',
                'core_counties_id' => 8,
            ),
            453 => 
            array (
                'id' => 954,
                'name' => 'Püspökladány',
                'core_counties_id' => 8,
            ),
            454 => 
            array (
                'id' => 955,
                'name' => 'Báránd',
                'core_counties_id' => 8,
            ),
            455 => 
            array (
                'id' => 956,
                'name' => 'Szerep',
                'core_counties_id' => 8,
            ),
            456 => 
            array (
                'id' => 957,
                'name' => 'Bakonszeg',
                'core_counties_id' => 8,
            ),
            457 => 
            array (
                'id' => 958,
                'name' => 'Sárrétudvari',
                'core_counties_id' => 8,
            ),
            458 => 
            array (
                'id' => 959,
                'name' => 'Biharnagybajom',
                'core_counties_id' => 8,
            ),
            459 => 
            array (
                'id' => 960,
                'name' => 'Nagyrábé',
                'core_counties_id' => 8,
            ),
            460 => 
            array (
                'id' => 961,
                'name' => 'Bihartorda',
                'core_counties_id' => 8,
            ),
            461 => 
            array (
                'id' => 962,
                'name' => 'Bihardancsháza',
                'core_counties_id' => 8,
            ),
            462 => 
            array (
                'id' => 963,
                'name' => 'Sáp',
                'core_counties_id' => 8,
            ),
            463 => 
            array (
                'id' => 964,
                'name' => 'Földes',
                'core_counties_id' => 8,
            ),
            464 => 
            array (
                'id' => 965,
                'name' => 'Nádudvar',
                'core_counties_id' => 8,
            ),
            465 => 
            array (
                'id' => 966,
                'name' => 'Kaba',
                'core_counties_id' => 8,
            ),
            466 => 
            array (
                'id' => 967,
                'name' => 'Tetétlen',
                'core_counties_id' => 8,
            ),
            467 => 
            array (
                'id' => 968,
                'name' => 'Hajdúszoboszló',
                'core_counties_id' => 8,
            ),
            468 => 
            array (
                'id' => 969,
                'name' => 'Ebes',
                'core_counties_id' => 8,
            ),
            469 => 
            array (
                'id' => 970,
                'name' => 'Hajdúszovát',
                'core_counties_id' => 8,
            ),
            470 => 
            array (
                'id' => 971,
                'name' => 'Hajdúböszörmény',
                'core_counties_id' => 8,
            ),
            471 => 
            array (
                'id' => 972,
                'name' => 'Debrecen',
                'core_counties_id' => 8,
            ),
            472 => 
            array (
                'id' => 973,
                'name' => 'Bököny',
                'core_counties_id' => 15,
            ),
            473 => 
            array (
                'id' => 974,
                'name' => 'Geszteréd',
                'core_counties_id' => 15,
            ),
            474 => 
            array (
                'id' => 975,
                'name' => 'Balkány',
                'core_counties_id' => 15,
            ),
            475 => 
            array (
                'id' => 976,
                'name' => 'Szakoly',
                'core_counties_id' => 15,
            ),
            476 => 
            array (
                'id' => 977,
                'name' => 'Biri',
                'core_counties_id' => 15,
            ),
            477 => 
            array (
                'id' => 978,
                'name' => 'Bocskaikert',
                'core_counties_id' => 8,
            ),
            478 => 
            array (
                'id' => 979,
                'name' => 'Hajdúhadház',
                'core_counties_id' => 8,
            ),
            479 => 
            array (
                'id' => 980,
                'name' => 'Téglás',
                'core_counties_id' => 8,
            ),
            480 => 
            array (
                'id' => 981,
                'name' => 'Újfehértó',
                'core_counties_id' => 15,
            ),
            481 => 
            array (
                'id' => 982,
                'name' => 'Érpatak',
                'core_counties_id' => 15,
            ),
            482 => 
            array (
                'id' => 983,
                'name' => 'Hajdúsámson',
                'core_counties_id' => 8,
            ),
            483 => 
            array (
                'id' => 984,
                'name' => 'Nyíradony',
                'core_counties_id' => 8,
            ),
            484 => 
            array (
                'id' => 985,
                'name' => 'Nyíracsád',
                'core_counties_id' => 8,
            ),
            485 => 
            array (
                'id' => 986,
                'name' => 'Nyírmártonfalva',
                'core_counties_id' => 8,
            ),
            486 => 
            array (
                'id' => 987,
                'name' => 'Nyírábrány',
                'core_counties_id' => 8,
            ),
            487 => 
            array (
                'id' => 988,
                'name' => 'Fülöp',
                'core_counties_id' => 8,
            ),
            488 => 
            array (
                'id' => 989,
                'name' => 'Penészlek',
                'core_counties_id' => 15,
            ),
            489 => 
            array (
                'id' => 990,
                'name' => 'Mikepércs',
                'core_counties_id' => 8,
            ),
            490 => 
            array (
                'id' => 991,
                'name' => 'Sáránd',
                'core_counties_id' => 8,
            ),
            491 => 
            array (
                'id' => 992,
                'name' => 'Hajdúbagos',
                'core_counties_id' => 8,
            ),
            492 => 
            array (
                'id' => 993,
                'name' => 'Hosszúpályi',
                'core_counties_id' => 8,
            ),
            493 => 
            array (
                'id' => 994,
                'name' => 'Monostorpályi',
                'core_counties_id' => 8,
            ),
            494 => 
            array (
                'id' => 995,
                'name' => 'Létavértes',
                'core_counties_id' => 8,
            ),
            495 => 
            array (
                'id' => 996,
                'name' => 'Kokad',
                'core_counties_id' => 8,
            ),
            496 => 
            array (
                'id' => 997,
                'name' => 'Álmosd',
                'core_counties_id' => 8,
            ),
            497 => 
            array (
                'id' => 998,
                'name' => 'Bagamér',
                'core_counties_id' => 8,
            ),
            498 => 
            array (
                'id' => 999,
                'name' => 'Vámospércs',
                'core_counties_id' => 8,
            ),
            499 => 
            array (
                'id' => 1000,
                'name' => 'Újléta',
                'core_counties_id' => 8,
            ),
        ));
        \DB::table('core_cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'name' => 'Nyírbátor',
                'core_counties_id' => 15,
            ),
            1 => 
            array (
                'id' => 1002,
                'name' => 'Nyírgyulaj',
                'core_counties_id' => 15,
            ),
            2 => 
            array (
                'id' => 1003,
                'name' => 'Nagykálló',
                'core_counties_id' => 15,
            ),
            3 => 
            array (
                'id' => 1004,
                'name' => 'Kállósemjén',
                'core_counties_id' => 15,
            ),
            4 => 
            array (
                'id' => 1005,
                'name' => 'Kisléta',
                'core_counties_id' => 15,
            ),
            5 => 
            array (
                'id' => 1006,
                'name' => 'Máriapócs',
                'core_counties_id' => 15,
            ),
            6 => 
            array (
                'id' => 1007,
                'name' => 'Pócspetri',
                'core_counties_id' => 15,
            ),
            7 => 
            array (
                'id' => 1008,
                'name' => 'Nyírcsászári',
                'core_counties_id' => 15,
            ),
            8 => 
            array (
                'id' => 1009,
                'name' => 'Nyírderzs',
                'core_counties_id' => 15,
            ),
            9 => 
            array (
                'id' => 1010,
                'name' => 'Nyírkáta',
                'core_counties_id' => 15,
            ),
            10 => 
            array (
                'id' => 1011,
                'name' => 'Hodász',
                'core_counties_id' => 15,
            ),
            11 => 
            array (
                'id' => 1012,
                'name' => 'Kántorjánosi',
                'core_counties_id' => 15,
            ),
            12 => 
            array (
                'id' => 1013,
                'name' => 'Őr',
                'core_counties_id' => 15,
            ),
            13 => 
            array (
                'id' => 1014,
                'name' => 'Jármi',
                'core_counties_id' => 15,
            ),
            14 => 
            array (
                'id' => 1015,
                'name' => 'Papos',
                'core_counties_id' => 15,
            ),
            15 => 
            array (
                'id' => 1016,
                'name' => 'Nyírvasvári',
                'core_counties_id' => 15,
            ),
            16 => 
            array (
                'id' => 1017,
                'name' => 'Terem',
                'core_counties_id' => 15,
            ),
            17 => 
            array (
                'id' => 1018,
                'name' => 'Bátorliget',
                'core_counties_id' => 15,
            ),
            18 => 
            array (
                'id' => 1019,
                'name' => 'Vállaj',
                'core_counties_id' => 15,
            ),
            19 => 
            array (
                'id' => 1020,
                'name' => 'Mérk',
                'core_counties_id' => 15,
            ),
            20 => 
            array (
                'id' => 1021,
                'name' => 'Tiborszállás',
                'core_counties_id' => 15,
            ),
            21 => 
            array (
                'id' => 1022,
                'name' => 'Fábiánháza',
                'core_counties_id' => 15,
            ),
            22 => 
            array (
                'id' => 1023,
                'name' => 'Nagyecsed',
                'core_counties_id' => 15,
            ),
            23 => 
            array (
                'id' => 1024,
                'name' => 'Nyírcsaholy',
                'core_counties_id' => 15,
            ),
            24 => 
            array (
                'id' => 1025,
                'name' => 'Nyírbogát',
                'core_counties_id' => 15,
            ),
            25 => 
            array (
                'id' => 1026,
                'name' => 'Nyírgelse',
                'core_counties_id' => 15,
            ),
            26 => 
            array (
                'id' => 1027,
                'name' => 'Nyírmihálydi',
                'core_counties_id' => 15,
            ),
            27 => 
            array (
                'id' => 1028,
                'name' => 'Nyírlugos',
                'core_counties_id' => 15,
            ),
            28 => 
            array (
                'id' => 1029,
                'name' => 'Nyírbéltek',
                'core_counties_id' => 15,
            ),
            29 => 
            array (
                'id' => 1030,
                'name' => 'Ömböly',
                'core_counties_id' => 15,
            ),
            30 => 
            array (
                'id' => 1031,
                'name' => 'Encsencs',
                'core_counties_id' => 15,
            ),
            31 => 
            array (
                'id' => 1032,
                'name' => 'Piricse',
                'core_counties_id' => 15,
            ),
            32 => 
            array (
                'id' => 1033,
                'name' => 'Nyírpilis',
                'core_counties_id' => 15,
            ),
            33 => 
            array (
                'id' => 1034,
                'name' => 'Nyíregyháza',
                'core_counties_id' => 15,
            ),
            34 => 
            array (
                'id' => 1035,
                'name' => 'Kálmánháza',
                'core_counties_id' => 15,
            ),
            35 => 
            array (
                'id' => 1036,
                'name' => 'Tiszavasvári',
                'core_counties_id' => 15,
            ),
            36 => 
            array (
                'id' => 1037,
                'name' => 'Szorgalmatos',
                'core_counties_id' => 15,
            ),
            37 => 
            array (
                'id' => 1038,
                'name' => 'Nagycserkesz',
                'core_counties_id' => 15,
            ),
            38 => 
            array (
                'id' => 1039,
                'name' => 'Tiszalök',
                'core_counties_id' => 15,
            ),
            39 => 
            array (
                'id' => 1040,
                'name' => 'Tiszadada',
                'core_counties_id' => 15,
            ),
            40 => 
            array (
                'id' => 1041,
                'name' => 'Tiszadob',
                'core_counties_id' => 15,
            ),
            41 => 
            array (
                'id' => 1042,
                'name' => 'Nyírtelek',
                'core_counties_id' => 15,
            ),
            42 => 
            array (
                'id' => 1043,
                'name' => 'Tiszanagyfalu',
                'core_counties_id' => 15,
            ),
            43 => 
            array (
                'id' => 1044,
                'name' => 'Tiszaeszlár',
                'core_counties_id' => 15,
            ),
            44 => 
            array (
                'id' => 1045,
                'name' => 'Rakamaz',
                'core_counties_id' => 15,
            ),
            45 => 
            array (
                'id' => 1046,
                'name' => 'Timár',
                'core_counties_id' => 15,
            ),
            46 => 
            array (
                'id' => 1047,
                'name' => 'Szabolcs',
                'core_counties_id' => 15,
            ),
            47 => 
            array (
                'id' => 1048,
                'name' => 'Balsa',
                'core_counties_id' => 15,
            ),
            48 => 
            array (
                'id' => 1049,
                'name' => 'Gávavencsellő',
                'core_counties_id' => 15,
            ),
            49 => 
            array (
                'id' => 1050,
                'name' => 'Tiszabercel',
                'core_counties_id' => 15,
            ),
            50 => 
            array (
                'id' => 1051,
                'name' => 'Paszab',
                'core_counties_id' => 15,
            ),
            51 => 
            array (
                'id' => 1052,
                'name' => 'Kótaj',
                'core_counties_id' => 15,
            ),
            52 => 
            array (
                'id' => 1053,
                'name' => 'Buj',
                'core_counties_id' => 15,
            ),
            53 => 
            array (
                'id' => 1054,
                'name' => 'Ibrány',
                'core_counties_id' => 15,
            ),
            54 => 
            array (
                'id' => 1055,
                'name' => 'Nagyhalász',
                'core_counties_id' => 15,
            ),
            55 => 
            array (
                'id' => 1056,
                'name' => 'Tiszatelek',
                'core_counties_id' => 15,
            ),
            56 => 
            array (
                'id' => 1057,
                'name' => 'Beszterec',
                'core_counties_id' => 15,
            ),
            57 => 
            array (
                'id' => 1058,
                'name' => 'Újdombrád',
                'core_counties_id' => 15,
            ),
            58 => 
            array (
                'id' => 1059,
                'name' => 'Dombrád',
                'core_counties_id' => 15,
            ),
            59 => 
            array (
                'id' => 1060,
                'name' => 'Tiszakanyár',
                'core_counties_id' => 15,
            ),
            60 => 
            array (
                'id' => 1061,
                'name' => 'Kékcse',
                'core_counties_id' => 15,
            ),
            61 => 
            array (
                'id' => 1062,
                'name' => 'Döge',
                'core_counties_id' => 15,
            ),
            62 => 
            array (
                'id' => 1063,
                'name' => 'Szabolcsveresmart',
                'core_counties_id' => 15,
            ),
            63 => 
            array (
                'id' => 1064,
                'name' => 'Kemecse',
                'core_counties_id' => 15,
            ),
            64 => 
            array (
                'id' => 1065,
                'name' => 'Vasmegyer',
                'core_counties_id' => 15,
            ),
            65 => 
            array (
                'id' => 1066,
                'name' => 'Tiszarád',
                'core_counties_id' => 15,
            ),
            66 => 
            array (
                'id' => 1067,
                'name' => 'Nyírbogdány',
                'core_counties_id' => 15,
            ),
            67 => 
            array (
                'id' => 1068,
                'name' => 'Kék',
                'core_counties_id' => 15,
            ),
            68 => 
            array (
                'id' => 1069,
                'name' => 'Demecser',
                'core_counties_id' => 15,
            ),
            69 => 
            array (
                'id' => 1070,
                'name' => 'Gégény',
                'core_counties_id' => 15,
            ),
            70 => 
            array (
                'id' => 1071,
                'name' => 'Berkesz',
                'core_counties_id' => 15,
            ),
            71 => 
            array (
                'id' => 1072,
                'name' => 'Nyírtass',
                'core_counties_id' => 15,
            ),
            72 => 
            array (
                'id' => 1073,
                'name' => 'Pátroha',
                'core_counties_id' => 15,
            ),
            73 => 
            array (
                'id' => 1074,
                'name' => 'Ajak',
                'core_counties_id' => 15,
            ),
            74 => 
            array (
                'id' => 1075,
                'name' => 'Rétközberencs',
                'core_counties_id' => 15,
            ),
            75 => 
            array (
                'id' => 1076,
                'name' => 'Nyírpazony',
                'core_counties_id' => 15,
            ),
            76 => 
            array (
                'id' => 1077,
                'name' => 'Nyírtura',
                'core_counties_id' => 15,
            ),
            77 => 
            array (
                'id' => 1078,
                'name' => 'Sényő',
                'core_counties_id' => 15,
            ),
            78 => 
            array (
                'id' => 1079,
                'name' => 'Székely',
                'core_counties_id' => 15,
            ),
            79 => 
            array (
                'id' => 1080,
                'name' => 'Nyíribrony',
                'core_counties_id' => 15,
            ),
            80 => 
            array (
                'id' => 1081,
                'name' => 'Ramocsaháza',
                'core_counties_id' => 15,
            ),
            81 => 
            array (
                'id' => 1082,
                'name' => 'Nyírkércs',
                'core_counties_id' => 15,
            ),
            82 => 
            array (
                'id' => 1083,
                'name' => 'Nyírjákó',
                'core_counties_id' => 15,
            ),
            83 => 
            array (
                'id' => 1084,
                'name' => 'Petneháza',
                'core_counties_id' => 15,
            ),
            84 => 
            array (
                'id' => 1085,
                'name' => 'Laskod',
                'core_counties_id' => 15,
            ),
            85 => 
            array (
                'id' => 1086,
                'name' => 'Nyírkarász',
                'core_counties_id' => 15,
            ),
            86 => 
            array (
                'id' => 1087,
                'name' => 'Gyulaháza',
                'core_counties_id' => 15,
            ),
            87 => 
            array (
                'id' => 1088,
                'name' => 'Anarcs',
                'core_counties_id' => 15,
            ),
            88 => 
            array (
                'id' => 1089,
                'name' => 'Szabolcsbáka',
                'core_counties_id' => 15,
            ),
            89 => 
            array (
                'id' => 1090,
                'name' => 'Napkor',
                'core_counties_id' => 15,
            ),
            90 => 
            array (
                'id' => 1091,
                'name' => 'Apagy',
                'core_counties_id' => 15,
            ),
            91 => 
            array (
                'id' => 1092,
                'name' => 'Nyírtét',
                'core_counties_id' => 15,
            ),
            92 => 
            array (
                'id' => 1093,
                'name' => 'Levelek',
                'core_counties_id' => 15,
            ),
            93 => 
            array (
                'id' => 1094,
                'name' => 'Magy',
                'core_counties_id' => 15,
            ),
            94 => 
            array (
                'id' => 1095,
                'name' => 'Besenyőd',
                'core_counties_id' => 15,
            ),
            95 => 
            array (
                'id' => 1096,
                'name' => 'Ófehértó',
                'core_counties_id' => 15,
            ),
            96 => 
            array (
                'id' => 1097,
                'name' => 'Baktalórántháza',
                'core_counties_id' => 15,
            ),
            97 => 
            array (
                'id' => 1098,
                'name' => 'Vaja',
                'core_counties_id' => 15,
            ),
            98 => 
            array (
                'id' => 1099,
                'name' => 'Rohod',
                'core_counties_id' => 15,
            ),
            99 => 
            array (
                'id' => 1100,
                'name' => 'Nyírmada',
                'core_counties_id' => 15,
            ),
            100 => 
            array (
                'id' => 1101,
                'name' => 'Pusztadobos',
                'core_counties_id' => 15,
            ),
            101 => 
            array (
                'id' => 1102,
                'name' => 'Ilk',
                'core_counties_id' => 15,
            ),
            102 => 
            array (
                'id' => 1103,
                'name' => 'Gemzse',
                'core_counties_id' => 15,
            ),
            103 => 
            array (
                'id' => 1104,
                'name' => 'Kisvárda',
                'core_counties_id' => 15,
            ),
            104 => 
            array (
                'id' => 1105,
                'name' => 'Jéke',
                'core_counties_id' => 15,
            ),
            105 => 
            array (
                'id' => 1106,
                'name' => 'Fényeslitke',
                'core_counties_id' => 15,
            ),
            106 => 
            array (
                'id' => 1107,
                'name' => 'Komoró',
                'core_counties_id' => 15,
            ),
            107 => 
            array (
                'id' => 1108,
                'name' => 'Tuzsér',
                'core_counties_id' => 15,
            ),
            108 => 
            array (
                'id' => 1109,
                'name' => 'Tiszabezdéd',
                'core_counties_id' => 15,
            ),
            109 => 
            array (
                'id' => 1110,
                'name' => 'Győröcske',
                'core_counties_id' => 15,
            ),
            110 => 
            array (
                'id' => 1111,
                'name' => 'Záhony',
                'core_counties_id' => 15,
            ),
            111 => 
            array (
                'id' => 1112,
                'name' => 'Zsurk',
                'core_counties_id' => 15,
            ),
            112 => 
            array (
                'id' => 1113,
                'name' => 'Tiszaszentmárton',
                'core_counties_id' => 15,
            ),
            113 => 
            array (
                'id' => 1114,
                'name' => 'Pap',
                'core_counties_id' => 15,
            ),
            114 => 
            array (
                'id' => 1115,
                'name' => 'Nyírlövő',
                'core_counties_id' => 15,
            ),
            115 => 
            array (
                'id' => 1116,
                'name' => 'Lövőpetri',
                'core_counties_id' => 15,
            ),
            116 => 
            array (
                'id' => 1117,
                'name' => 'Aranyosapáti',
                'core_counties_id' => 15,
            ),
            117 => 
            array (
                'id' => 1118,
                'name' => 'Újkenéz',
                'core_counties_id' => 15,
            ),
            118 => 
            array (
                'id' => 1119,
                'name' => 'Mezőladány',
                'core_counties_id' => 15,
            ),
            119 => 
            array (
                'id' => 1120,
                'name' => 'Tornyospálca',
                'core_counties_id' => 15,
            ),
            120 => 
            array (
                'id' => 1121,
                'name' => 'Benk',
                'core_counties_id' => 15,
            ),
            121 => 
            array (
                'id' => 1122,
                'name' => 'Mándok',
                'core_counties_id' => 15,
            ),
            122 => 
            array (
                'id' => 1123,
                'name' => 'Tiszamogyorós',
                'core_counties_id' => 15,
            ),
            123 => 
            array (
                'id' => 1124,
                'name' => 'Eperjeske',
                'core_counties_id' => 15,
            ),
            124 => 
            array (
                'id' => 1125,
                'name' => 'Mátészalka',
                'core_counties_id' => 15,
            ),
            125 => 
            array (
                'id' => 1126,
                'name' => 'Szamoskér',
                'core_counties_id' => 15,
            ),
            126 => 
            array (
                'id' => 1127,
                'name' => 'Nyírmeggyes',
                'core_counties_id' => 15,
            ),
            127 => 
            array (
                'id' => 1128,
                'name' => 'Tunyogmatolcs',
                'core_counties_id' => 15,
            ),
            128 => 
            array (
                'id' => 1129,
                'name' => 'Cégénydányád',
                'core_counties_id' => 15,
            ),
            129 => 
            array (
                'id' => 1130,
                'name' => 'Gyügye',
                'core_counties_id' => 15,
            ),
            130 => 
            array (
                'id' => 1131,
                'name' => 'Szamosújlak',
                'core_counties_id' => 15,
            ),
            131 => 
            array (
                'id' => 1132,
                'name' => 'Hermánszeg',
                'core_counties_id' => 15,
            ),
            132 => 
            array (
                'id' => 1133,
                'name' => 'Szamossályi',
                'core_counties_id' => 15,
            ),
            133 => 
            array (
                'id' => 1134,
                'name' => 'Darnó',
                'core_counties_id' => 15,
            ),
            134 => 
            array (
                'id' => 1135,
                'name' => 'Kisnamény',
                'core_counties_id' => 15,
            ),
            135 => 
            array (
                'id' => 1136,
                'name' => 'Jánkmajtis',
                'core_counties_id' => 15,
            ),
            136 => 
            array (
                'id' => 1137,
                'name' => 'Csegöld',
                'core_counties_id' => 15,
            ),
            137 => 
            array (
                'id' => 1138,
                'name' => 'Csengersima',
                'core_counties_id' => 15,
            ),
            138 => 
            array (
                'id' => 1139,
                'name' => 'Szamosbecs',
                'core_counties_id' => 15,
            ),
            139 => 
            array (
                'id' => 1140,
                'name' => 'Szamostatárfalva',
                'core_counties_id' => 15,
            ),
            140 => 
            array (
                'id' => 1141,
                'name' => 'Kocsord',
                'core_counties_id' => 15,
            ),
            141 => 
            array (
                'id' => 1142,
                'name' => 'Győrtelek',
                'core_counties_id' => 15,
            ),
            142 => 
            array (
                'id' => 1143,
                'name' => 'Géberjén',
                'core_counties_id' => 15,
            ),
            143 => 
            array (
                'id' => 1144,
                'name' => 'Fülpösdaróc',
                'core_counties_id' => 15,
            ),
            144 => 
            array (
                'id' => 1145,
                'name' => 'Ököritófülpös',
                'core_counties_id' => 15,
            ),
            145 => 
            array (
                'id' => 1146,
                'name' => 'Rápolt',
                'core_counties_id' => 15,
            ),
            146 => 
            array (
                'id' => 1147,
                'name' => 'Porcsalma',
                'core_counties_id' => 15,
            ),
            147 => 
            array (
                'id' => 1148,
                'name' => 'Tyukod',
                'core_counties_id' => 15,
            ),
            148 => 
            array (
                'id' => 1149,
                'name' => 'Ura',
                'core_counties_id' => 15,
            ),
            149 => 
            array (
                'id' => 1150,
                'name' => 'Csengerújfalu',
                'core_counties_id' => 15,
            ),
            150 => 
            array (
                'id' => 1151,
                'name' => 'Komlódtótfalu',
                'core_counties_id' => 15,
            ),
            151 => 
            array (
                'id' => 1152,
                'name' => 'Csenger',
                'core_counties_id' => 15,
            ),
            152 => 
            array (
                'id' => 1153,
                'name' => 'Pátyod',
                'core_counties_id' => 15,
            ),
            153 => 
            array (
                'id' => 1154,
                'name' => 'Szamosangyalos',
                'core_counties_id' => 15,
            ),
            154 => 
            array (
                'id' => 1155,
                'name' => 'Vásárosnamény',
                'core_counties_id' => 15,
            ),
            155 => 
            array (
                'id' => 1156,
                'name' => 'Kisvarsány',
                'core_counties_id' => 15,
            ),
            156 => 
            array (
                'id' => 1157,
                'name' => 'Nagyvarsány',
                'core_counties_id' => 15,
            ),
            157 => 
            array (
                'id' => 1158,
                'name' => 'Gyüre',
                'core_counties_id' => 15,
            ),
            158 => 
            array (
                'id' => 1159,
                'name' => 'Ópályi',
                'core_counties_id' => 15,
            ),
            159 => 
            array (
                'id' => 1160,
                'name' => 'Nyírparasznya',
                'core_counties_id' => 15,
            ),
            160 => 
            array (
                'id' => 1161,
                'name' => 'Nagydobos',
                'core_counties_id' => 15,
            ),
            161 => 
            array (
                'id' => 1162,
                'name' => 'Szamosszeg',
                'core_counties_id' => 15,
            ),
            162 => 
            array (
                'id' => 1163,
                'name' => 'Olcsva',
                'core_counties_id' => 15,
            ),
            163 => 
            array (
                'id' => 1164,
                'name' => 'Tiszaszalka',
                'core_counties_id' => 15,
            ),
            164 => 
            array (
                'id' => 1165,
                'name' => 'Tiszavid',
                'core_counties_id' => 15,
            ),
            165 => 
            array (
                'id' => 1166,
                'name' => 'Tiszaadony',
                'core_counties_id' => 15,
            ),
            166 => 
            array (
                'id' => 1167,
                'name' => 'Tiszakerecseny',
                'core_counties_id' => 15,
            ),
            167 => 
            array (
                'id' => 1168,
                'name' => 'Mátyus',
                'core_counties_id' => 15,
            ),
            168 => 
            array (
                'id' => 1169,
                'name' => 'Lónya',
                'core_counties_id' => 15,
            ),
            169 => 
            array (
                'id' => 1170,
                'name' => 'Jánd',
                'core_counties_id' => 15,
            ),
            170 => 
            array (
                'id' => 1171,
                'name' => 'Gulács',
                'core_counties_id' => 15,
            ),
            171 => 
            array (
                'id' => 1172,
                'name' => 'Hetefejércse',
                'core_counties_id' => 15,
            ),
            172 => 
            array (
                'id' => 1173,
                'name' => 'Csaroda',
                'core_counties_id' => 15,
            ),
            173 => 
            array (
                'id' => 1174,
                'name' => 'Tákos',
                'core_counties_id' => 15,
            ),
            174 => 
            array (
                'id' => 1175,
                'name' => 'Fehérgyarmat',
                'core_counties_id' => 15,
            ),
            175 => 
            array (
                'id' => 1176,
                'name' => 'Nábrád',
                'core_counties_id' => 15,
            ),
            176 => 
            array (
                'id' => 1177,
                'name' => 'Kérsemjén',
                'core_counties_id' => 15,
            ),
            177 => 
            array (
                'id' => 1178,
                'name' => 'Panyola',
                'core_counties_id' => 15,
            ),
            178 => 
            array (
                'id' => 1179,
                'name' => 'Olcsvaapáti',
                'core_counties_id' => 15,
            ),
            179 => 
            array (
                'id' => 1180,
                'name' => 'Tivadar',
                'core_counties_id' => 15,
            ),
            180 => 
            array (
                'id' => 1181,
                'name' => 'Kisar',
                'core_counties_id' => 15,
            ),
            181 => 
            array (
                'id' => 1182,
                'name' => 'Nagyar',
                'core_counties_id' => 15,
            ),
            182 => 
            array (
                'id' => 1183,
                'name' => 'Tarpa',
                'core_counties_id' => 15,
            ),
            183 => 
            array (
                'id' => 1184,
                'name' => 'Márokpapi',
                'core_counties_id' => 15,
            ),
            184 => 
            array (
                'id' => 1185,
                'name' => 'Beregsurány',
                'core_counties_id' => 15,
            ),
            185 => 
            array (
                'id' => 1186,
                'name' => 'Beregdaróc',
                'core_counties_id' => 15,
            ),
            186 => 
            array (
                'id' => 1187,
                'name' => 'Gelénes',
                'core_counties_id' => 15,
            ),
            187 => 
            array (
                'id' => 1188,
                'name' => 'Vámosatya',
                'core_counties_id' => 15,
            ),
            188 => 
            array (
                'id' => 1189,
                'name' => 'Barabás',
                'core_counties_id' => 15,
            ),
            189 => 
            array (
                'id' => 1190,
                'name' => 'Penyige',
                'core_counties_id' => 15,
            ),
            190 => 
            array (
                'id' => 1191,
                'name' => 'Mánd',
                'core_counties_id' => 15,
            ),
            191 => 
            array (
                'id' => 1192,
                'name' => 'Nemesborzova',
                'core_counties_id' => 15,
            ),
            192 => 
            array (
                'id' => 1193,
                'name' => 'Kömörő',
                'core_counties_id' => 15,
            ),
            193 => 
            array (
                'id' => 1194,
                'name' => 'Túristvándi',
                'core_counties_id' => 15,
            ),
            194 => 
            array (
                'id' => 1195,
                'name' => 'Szatmárcseke',
                'core_counties_id' => 15,
            ),
            195 => 
            array (
                'id' => 1196,
                'name' => 'Tiszakóród',
                'core_counties_id' => 15,
            ),
            196 => 
            array (
                'id' => 1197,
                'name' => 'Tiszacsécse',
                'core_counties_id' => 15,
            ),
            197 => 
            array (
                'id' => 1198,
                'name' => 'Milota',
                'core_counties_id' => 15,
            ),
            198 => 
            array (
                'id' => 1199,
                'name' => 'Tiszabecs',
                'core_counties_id' => 15,
            ),
            199 => 
            array (
                'id' => 1200,
                'name' => 'Uszka',
                'core_counties_id' => 15,
            ),
            200 => 
            array (
                'id' => 1201,
                'name' => 'Magosliget',
                'core_counties_id' => 15,
            ),
            201 => 
            array (
                'id' => 1202,
                'name' => 'Sonkád',
                'core_counties_id' => 15,
            ),
            202 => 
            array (
                'id' => 1203,
                'name' => 'Botpalád',
                'core_counties_id' => 15,
            ),
            203 => 
            array (
                'id' => 1204,
                'name' => 'Kispalád',
                'core_counties_id' => 15,
            ),
            204 => 
            array (
                'id' => 1205,
                'name' => 'Zsarolyán',
                'core_counties_id' => 15,
            ),
            205 => 
            array (
                'id' => 1206,
                'name' => 'Nagyszekeres',
                'core_counties_id' => 15,
            ),
            206 => 
            array (
                'id' => 1207,
                'name' => 'Kisszekeres',
                'core_counties_id' => 15,
            ),
            207 => 
            array (
                'id' => 1208,
                'name' => 'Fülesd',
                'core_counties_id' => 15,
            ),
            208 => 
            array (
                'id' => 1209,
                'name' => 'Kölcse',
                'core_counties_id' => 15,
            ),
            209 => 
            array (
                'id' => 1210,
                'name' => 'Vámosoroszi',
                'core_counties_id' => 15,
            ),
            210 => 
            array (
                'id' => 1211,
                'name' => 'Csaholc',
                'core_counties_id' => 15,
            ),
            211 => 
            array (
                'id' => 1212,
                'name' => 'Túrricse',
                'core_counties_id' => 15,
            ),
            212 => 
            array (
                'id' => 1213,
                'name' => 'Tisztaberek',
                'core_counties_id' => 15,
            ),
            213 => 
            array (
                'id' => 1214,
                'name' => 'Rozsály',
                'core_counties_id' => 15,
            ),
            214 => 
            array (
                'id' => 1215,
                'name' => 'Gacsály',
                'core_counties_id' => 15,
            ),
            215 => 
            array (
                'id' => 1216,
                'name' => 'Császló',
                'core_counties_id' => 15,
            ),
            216 => 
            array (
                'id' => 1217,
                'name' => 'Zajta',
                'core_counties_id' => 15,
            ),
            217 => 
            array (
                'id' => 1218,
                'name' => 'Méhtelek',
                'core_counties_id' => 15,
            ),
            218 => 
            array (
                'id' => 1219,
                'name' => 'Garbolc',
                'core_counties_id' => 15,
            ),
            219 => 
            array (
                'id' => 1220,
                'name' => 'Kishódos',
                'core_counties_id' => 15,
            ),
            220 => 
            array (
                'id' => 1221,
                'name' => 'Nagyhódos',
                'core_counties_id' => 15,
            ),
            221 => 
            array (
                'id' => 1222,
                'name' => 'Szolnok',
                'core_counties_id' => 10,
            ),
            222 => 
            array (
                'id' => 1223,
                'name' => 'Zagyvarékas',
                'core_counties_id' => 10,
            ),
            223 => 
            array (
                'id' => 1224,
                'name' => 'Újszász',
                'core_counties_id' => 10,
            ),
            224 => 
            array (
                'id' => 1225,
                'name' => 'Szászberek',
                'core_counties_id' => 10,
            ),
            225 => 
            array (
                'id' => 1226,
                'name' => 'Jászalsószentgyörgy',
                'core_counties_id' => 10,
            ),
            226 => 
            array (
                'id' => 1227,
                'name' => 'Jászladány',
                'core_counties_id' => 10,
            ),
            227 => 
            array (
                'id' => 1228,
                'name' => 'Tiszasüly',
                'core_counties_id' => 10,
            ),
            228 => 
            array (
                'id' => 1229,
                'name' => 'Kőtelek',
                'core_counties_id' => 10,
            ),
            229 => 
            array (
                'id' => 1230,
                'name' => 'Hunyadfalva',
                'core_counties_id' => 10,
            ),
            230 => 
            array (
                'id' => 1231,
                'name' => 'Csataszög',
                'core_counties_id' => 10,
            ),
            231 => 
            array (
                'id' => 1232,
                'name' => 'Nagykörű',
                'core_counties_id' => 10,
            ),
            232 => 
            array (
                'id' => 1233,
                'name' => 'Besenyszög',
                'core_counties_id' => 10,
            ),
            233 => 
            array (
                'id' => 1234,
                'name' => 'Szajol',
                'core_counties_id' => 10,
            ),
            234 => 
            array (
                'id' => 1235,
                'name' => 'Tiszatenyő',
                'core_counties_id' => 10,
            ),
            235 => 
            array (
                'id' => 1236,
                'name' => 'Kengyel',
                'core_counties_id' => 10,
            ),
            236 => 
            array (
                'id' => 1237,
                'name' => 'Rákócziújfalu',
                'core_counties_id' => 10,
            ),
            237 => 
            array (
                'id' => 1238,
                'name' => 'Rákóczifalva',
                'core_counties_id' => 10,
            ),
            238 => 
            array (
                'id' => 1239,
                'name' => 'Tószeg',
                'core_counties_id' => 10,
            ),
            239 => 
            array (
                'id' => 1240,
                'name' => 'Tiszavárkony',
                'core_counties_id' => 10,
            ),
            240 => 
            array (
                'id' => 1241,
                'name' => 'Vezseny',
                'core_counties_id' => 10,
            ),
            241 => 
            array (
                'id' => 1242,
                'name' => 'Tiszajenő',
                'core_counties_id' => 10,
            ),
            242 => 
            array (
                'id' => 1243,
                'name' => 'Jászberény',
                'core_counties_id' => 10,
            ),
            243 => 
            array (
                'id' => 1244,
                'name' => 'Jászfelsőszentgyörgy',
                'core_counties_id' => 10,
            ),
            244 => 
            array (
                'id' => 1245,
                'name' => 'Jászjákóhalma',
                'core_counties_id' => 10,
            ),
            245 => 
            array (
                'id' => 1246,
                'name' => 'Jászdózsa',
                'core_counties_id' => 10,
            ),
            246 => 
            array (
                'id' => 1247,
                'name' => 'Jászárokszállás',
                'core_counties_id' => 10,
            ),
            247 => 
            array (
                'id' => 1248,
                'name' => 'Jászágó',
                'core_counties_id' => 10,
            ),
            248 => 
            array (
                'id' => 1249,
                'name' => 'Pusztamonostor',
                'core_counties_id' => 10,
            ),
            249 => 
            array (
                'id' => 1250,
                'name' => 'Jászfényszaru',
                'core_counties_id' => 10,
            ),
            250 => 
            array (
                'id' => 1251,
                'name' => 'Jászapáti',
                'core_counties_id' => 10,
            ),
            251 => 
            array (
                'id' => 1252,
                'name' => 'Jászivány',
                'core_counties_id' => 10,
            ),
            252 => 
            array (
                'id' => 1253,
                'name' => 'Jászszentandrás',
                'core_counties_id' => 10,
            ),
            253 => 
            array (
                'id' => 1254,
                'name' => 'Jászkisér',
                'core_counties_id' => 10,
            ),
            254 => 
            array (
                'id' => 1255,
                'name' => 'Jásztelek',
                'core_counties_id' => 10,
            ),
            255 => 
            array (
                'id' => 1256,
                'name' => 'Alattyán',
                'core_counties_id' => 10,
            ),
            256 => 
            array (
                'id' => 1257,
                'name' => 'Jánoshida',
                'core_counties_id' => 10,
            ),
            257 => 
            array (
                'id' => 1258,
                'name' => 'Jászboldogháza',
                'core_counties_id' => 10,
            ),
            258 => 
            array (
                'id' => 1259,
                'name' => 'Törökszentmiklós',
                'core_counties_id' => 10,
            ),
            259 => 
            array (
                'id' => 1260,
                'name' => 'Tiszapüspöki',
                'core_counties_id' => 10,
            ),
            260 => 
            array (
                'id' => 1261,
                'name' => 'Örményes',
                'core_counties_id' => 10,
            ),
            261 => 
            array (
                'id' => 1262,
                'name' => 'Fegyvernek',
                'core_counties_id' => 10,
            ),
            262 => 
            array (
                'id' => 1263,
                'name' => 'Tiszabő',
                'core_counties_id' => 10,
            ),
            263 => 
            array (
                'id' => 1264,
                'name' => 'Tiszagyenda',
                'core_counties_id' => 10,
            ),
            264 => 
            array (
                'id' => 1265,
                'name' => 'Tiszaroff',
                'core_counties_id' => 10,
            ),
            265 => 
            array (
                'id' => 1266,
                'name' => 'Tiszabura',
                'core_counties_id' => 10,
            ),
            266 => 
            array (
                'id' => 1267,
                'name' => 'Abádszalók',
                'core_counties_id' => 10,
            ),
            267 => 
            array (
                'id' => 1268,
                'name' => 'Tiszaderzs',
                'core_counties_id' => 10,
            ),
            268 => 
            array (
                'id' => 1269,
                'name' => 'Tiszaszőlős',
                'core_counties_id' => 10,
            ),
            269 => 
            array (
                'id' => 1270,
                'name' => 'Karcag',
                'core_counties_id' => 10,
            ),
            270 => 
            array (
                'id' => 1271,
                'name' => 'Berekfürdő',
                'core_counties_id' => 10,
            ),
            271 => 
            array (
                'id' => 1272,
                'name' => 'Kisújszállás',
                'core_counties_id' => 10,
            ),
            272 => 
            array (
                'id' => 1273,
                'name' => 'Kunmadaras',
                'core_counties_id' => 10,
            ),
            273 => 
            array (
                'id' => 1274,
                'name' => 'Tiszaszentimre',
                'core_counties_id' => 10,
            ),
            274 => 
            array (
                'id' => 1275,
                'name' => 'Tomajmonostora',
                'core_counties_id' => 10,
            ),
            275 => 
            array (
                'id' => 1276,
                'name' => 'Kenderes',
                'core_counties_id' => 10,
            ),
            276 => 
            array (
                'id' => 1277,
                'name' => 'Kunhegyes',
                'core_counties_id' => 10,
            ),
            277 => 
            array (
                'id' => 1278,
                'name' => 'Tiszafüred',
                'core_counties_id' => 10,
            ),
            278 => 
            array (
                'id' => 1279,
                'name' => 'Tiszaigar',
                'core_counties_id' => 10,
            ),
            279 => 
            array (
                'id' => 1280,
                'name' => 'Tiszaörs',
                'core_counties_id' => 10,
            ),
            280 => 
            array (
                'id' => 1281,
                'name' => 'Nagyiván',
                'core_counties_id' => 10,
            ),
            281 => 
            array (
                'id' => 1282,
                'name' => 'Mezőtúr',
                'core_counties_id' => 10,
            ),
            282 => 
            array (
                'id' => 1283,
                'name' => 'Kétpó',
                'core_counties_id' => 10,
            ),
            283 => 
            array (
                'id' => 1284,
                'name' => 'Kuncsorba',
                'core_counties_id' => 10,
            ),
            284 => 
            array (
                'id' => 1285,
                'name' => 'Túrkeve',
                'core_counties_id' => 10,
            ),
            285 => 
            array (
                'id' => 1286,
                'name' => 'Tiszaföldvár',
                'core_counties_id' => 10,
            ),
            286 => 
            array (
                'id' => 1287,
                'name' => 'Martfű',
                'core_counties_id' => 10,
            ),
            287 => 
            array (
                'id' => 1288,
                'name' => 'Kunszentmárton',
                'core_counties_id' => 10,
            ),
            288 => 
            array (
                'id' => 1289,
                'name' => 'Öcsöd',
                'core_counties_id' => 10,
            ),
            289 => 
            array (
                'id' => 1290,
                'name' => 'Mesterszállás',
                'core_counties_id' => 10,
            ),
            290 => 
            array (
                'id' => 1291,
                'name' => 'Mezőhék',
                'core_counties_id' => 10,
            ),
            291 => 
            array (
                'id' => 1292,
                'name' => 'Cibakháza',
                'core_counties_id' => 10,
            ),
            292 => 
            array (
                'id' => 1293,
                'name' => 'Nagyrév',
                'core_counties_id' => 10,
            ),
            293 => 
            array (
                'id' => 1294,
                'name' => 'Tiszainoka',
                'core_counties_id' => 10,
            ),
            294 => 
            array (
                'id' => 1295,
                'name' => 'Cserkeszőlő',
                'core_counties_id' => 10,
            ),
            295 => 
            array (
                'id' => 1296,
                'name' => 'Tiszakürt',
                'core_counties_id' => 10,
            ),
            296 => 
            array (
                'id' => 1297,
                'name' => 'Tiszaug',
                'core_counties_id' => 10,
            ),
            297 => 
            array (
                'id' => 1298,
                'name' => 'Tiszasas',
                'core_counties_id' => 10,
            ),
            298 => 
            array (
                'id' => 1299,
                'name' => 'Csépa',
                'core_counties_id' => 10,
            ),
            299 => 
            array (
                'id' => 1300,
                'name' => 'Szelevény',
                'core_counties_id' => 10,
            ),
            300 => 
            array (
                'id' => 1301,
                'name' => 'Gyomaendrőd',
                'core_counties_id' => 3,
            ),
            301 => 
            array (
                'id' => 1302,
                'name' => 'Dévaványa',
                'core_counties_id' => 3,
            ),
            302 => 
            array (
                'id' => 1303,
                'name' => 'Ecsegfalva',
                'core_counties_id' => 3,
            ),
            303 => 
            array (
                'id' => 1304,
                'name' => 'Körösladány',
                'core_counties_id' => 3,
            ),
            304 => 
            array (
                'id' => 1305,
                'name' => 'Szeghalom',
                'core_counties_id' => 3,
            ),
            305 => 
            array (
                'id' => 1306,
                'name' => 'Füzesgyarmat',
                'core_counties_id' => 3,
            ),
            306 => 
            array (
                'id' => 1307,
                'name' => 'Kertészsziget',
                'core_counties_id' => 3,
            ),
            307 => 
            array (
                'id' => 1308,
                'name' => 'Bucsa',
                'core_counties_id' => 3,
            ),
            308 => 
            array (
                'id' => 1309,
                'name' => 'Vésztő',
                'core_counties_id' => 3,
            ),
            309 => 
            array (
                'id' => 1310,
                'name' => 'Okány',
                'core_counties_id' => 3,
            ),
            310 => 
            array (
                'id' => 1311,
                'name' => 'Körösújfalu',
                'core_counties_id' => 3,
            ),
            311 => 
            array (
                'id' => 1312,
                'name' => 'Zsadány',
                'core_counties_id' => 3,
            ),
            312 => 
            array (
                'id' => 1313,
                'name' => 'Biharugra',
                'core_counties_id' => 3,
            ),
            313 => 
            array (
                'id' => 1314,
                'name' => 'Körösnagyharsány',
                'core_counties_id' => 3,
            ),
            314 => 
            array (
                'id' => 1315,
                'name' => 'Szarvas',
                'core_counties_id' => 3,
            ),
            315 => 
            array (
                'id' => 1316,
                'name' => 'Csabacsűd',
                'core_counties_id' => 3,
            ),
            316 => 
            array (
                'id' => 1317,
                'name' => 'Kardos',
                'core_counties_id' => 3,
            ),
            317 => 
            array (
                'id' => 1318,
                'name' => 'Kondoros',
                'core_counties_id' => 3,
            ),
            318 => 
            array (
                'id' => 1319,
                'name' => 'Hunya',
                'core_counties_id' => 3,
            ),
            319 => 
            array (
                'id' => 1320,
                'name' => 'Örménykút',
                'core_counties_id' => 3,
            ),
            320 => 
            array (
                'id' => 1321,
                'name' => 'Békésszentandrás',
                'core_counties_id' => 3,
            ),
            321 => 
            array (
                'id' => 1322,
                'name' => 'Békéscsaba',
                'core_counties_id' => 3,
            ),
            322 => 
            array (
                'id' => 1323,
                'name' => 'Csabaszabadi',
                'core_counties_id' => 3,
            ),
            323 => 
            array (
                'id' => 1324,
                'name' => 'Csárdaszállás',
                'core_counties_id' => 3,
            ),
            324 => 
            array (
                'id' => 1325,
                'name' => 'Köröstarcsa',
                'core_counties_id' => 3,
            ),
            325 => 
            array (
                'id' => 1326,
                'name' => 'Doboz',
                'core_counties_id' => 3,
            ),
            326 => 
            array (
                'id' => 1327,
                'name' => 'Békés',
                'core_counties_id' => 3,
            ),
            327 => 
            array (
                'id' => 1328,
                'name' => 'Tarhos',
                'core_counties_id' => 3,
            ),
            328 => 
            array (
                'id' => 1329,
                'name' => 'Bélmegyer',
                'core_counties_id' => 3,
            ),
            329 => 
            array (
                'id' => 1330,
                'name' => 'Mezőberény',
                'core_counties_id' => 3,
            ),
            330 => 
            array (
                'id' => 1331,
                'name' => 'Újkígyós',
                'core_counties_id' => 3,
            ),
            331 => 
            array (
                'id' => 1332,
                'name' => 'Csanádapáca',
                'core_counties_id' => 3,
            ),
            332 => 
            array (
                'id' => 1333,
                'name' => 'Medgyesbodzás',
                'core_counties_id' => 3,
            ),
            333 => 
            array (
                'id' => 1334,
                'name' => 'Pusztaottlaka',
                'core_counties_id' => 3,
            ),
            334 => 
            array (
                'id' => 1335,
                'name' => 'Medgyesegyháza',
                'core_counties_id' => 3,
            ),
            335 => 
            array (
                'id' => 1336,
                'name' => 'Magyarbánhegyes',
                'core_counties_id' => 3,
            ),
            336 => 
            array (
                'id' => 1337,
                'name' => 'Nagybánhegyes',
                'core_counties_id' => 3,
            ),
            337 => 
            array (
                'id' => 1338,
                'name' => 'Murony',
                'core_counties_id' => 3,
            ),
            338 => 
            array (
                'id' => 1339,
                'name' => 'Kamut',
                'core_counties_id' => 3,
            ),
            339 => 
            array (
                'id' => 1340,
                'name' => 'Kétsoprony',
                'core_counties_id' => 3,
            ),
            340 => 
            array (
                'id' => 1341,
                'name' => 'Telekgerendás',
                'core_counties_id' => 3,
            ),
            341 => 
            array (
                'id' => 1342,
                'name' => 'Gyula',
                'core_counties_id' => 3,
            ),
            342 => 
            array (
                'id' => 1343,
                'name' => 'Szabadkígyós',
                'core_counties_id' => 3,
            ),
            343 => 
            array (
                'id' => 1344,
                'name' => 'Sarkad',
                'core_counties_id' => 3,
            ),
            344 => 
            array (
                'id' => 1345,
                'name' => 'Kötegyán',
                'core_counties_id' => 3,
            ),
            345 => 
            array (
                'id' => 1346,
                'name' => 'Méhkerék',
                'core_counties_id' => 3,
            ),
            346 => 
            array (
                'id' => 1347,
                'name' => 'Újszalonta',
                'core_counties_id' => 3,
            ),
            347 => 
            array (
                'id' => 1348,
                'name' => 'Sarkadkeresztúr',
                'core_counties_id' => 3,
            ),
            348 => 
            array (
                'id' => 1349,
                'name' => 'Mezőgyán',
                'core_counties_id' => 3,
            ),
            349 => 
            array (
                'id' => 1350,
                'name' => 'Geszt',
                'core_counties_id' => 3,
            ),
            350 => 
            array (
                'id' => 1351,
                'name' => 'Kétegyháza',
                'core_counties_id' => 3,
            ),
            351 => 
            array (
                'id' => 1352,
                'name' => 'Elek',
                'core_counties_id' => 3,
            ),
            352 => 
            array (
                'id' => 1353,
                'name' => 'Lőkösháza',
                'core_counties_id' => 3,
            ),
            353 => 
            array (
                'id' => 1354,
                'name' => 'Kevermes',
                'core_counties_id' => 3,
            ),
            354 => 
            array (
                'id' => 1355,
                'name' => 'Dombiratos',
                'core_counties_id' => 3,
            ),
            355 => 
            array (
                'id' => 1356,
                'name' => 'Kunágota',
                'core_counties_id' => 3,
            ),
            356 => 
            array (
                'id' => 1357,
                'name' => 'Almáskamarás',
                'core_counties_id' => 3,
            ),
            357 => 
            array (
                'id' => 1358,
                'name' => 'Nagykamarás',
                'core_counties_id' => 3,
            ),
            358 => 
            array (
                'id' => 1359,
                'name' => 'Mezőkovácsháza',
                'core_counties_id' => 3,
            ),
            359 => 
            array (
                'id' => 1360,
                'name' => 'Végegyháza',
                'core_counties_id' => 3,
            ),
            360 => 
            array (
                'id' => 1361,
                'name' => 'Mezőhegyes',
                'core_counties_id' => 3,
            ),
            361 => 
            array (
                'id' => 1362,
                'name' => 'Battonya',
                'core_counties_id' => 3,
            ),
            362 => 
            array (
                'id' => 1363,
                'name' => 'Dombegyház',
                'core_counties_id' => 3,
            ),
            363 => 
            array (
                'id' => 1364,
                'name' => 'Kisdombegyház',
                'core_counties_id' => 3,
            ),
            364 => 
            array (
                'id' => 1365,
                'name' => 'Magyardombegyház',
                'core_counties_id' => 3,
            ),
            365 => 
            array (
                'id' => 1366,
                'name' => 'Orosháza',
                'core_counties_id' => 3,
            ),
            366 => 
            array (
                'id' => 1367,
                'name' => 'Pusztaföldvár',
                'core_counties_id' => 3,
            ),
            367 => 
            array (
                'id' => 1368,
                'name' => 'Csorvás',
                'core_counties_id' => 3,
            ),
            368 => 
            array (
                'id' => 1369,
                'name' => 'Gerendás',
                'core_counties_id' => 3,
            ),
            369 => 
            array (
                'id' => 1370,
                'name' => 'Nagyszénás',
                'core_counties_id' => 3,
            ),
            370 => 
            array (
                'id' => 1371,
                'name' => 'Gádoros',
                'core_counties_id' => 3,
            ),
            371 => 
            array (
                'id' => 1372,
                'name' => 'Tótkomlós',
                'core_counties_id' => 3,
            ),
            372 => 
            array (
                'id' => 1373,
                'name' => 'Kardoskút',
                'core_counties_id' => 3,
            ),
            373 => 
            array (
                'id' => 1374,
                'name' => 'Békéssámson',
                'core_counties_id' => 3,
            ),
            374 => 
            array (
                'id' => 1375,
                'name' => 'Kaszaper',
                'core_counties_id' => 3,
            ),
            375 => 
            array (
                'id' => 1376,
                'name' => 'Kecskemét',
                'core_counties_id' => 1,
            ),
            376 => 
            array (
                'id' => 1377,
                'name' => 'Szentkirály',
                'core_counties_id' => 1,
            ),
            377 => 
            array (
                'id' => 1378,
                'name' => 'Nyárlőrinc',
                'core_counties_id' => 1,
            ),
            378 => 
            array (
                'id' => 1379,
                'name' => 'Városföld',
                'core_counties_id' => 1,
            ),
            379 => 
            array (
                'id' => 1380,
                'name' => 'Helvécia',
                'core_counties_id' => 1,
            ),
            380 => 
            array (
                'id' => 1381,
                'name' => 'Ballószög',
                'core_counties_id' => 1,
            ),
            381 => 
            array (
                'id' => 1382,
                'name' => 'Kerekegyháza',
                'core_counties_id' => 1,
            ),
            382 => 
            array (
                'id' => 1383,
                'name' => 'Fülöpháza',
                'core_counties_id' => 1,
            ),
            383 => 
            array (
                'id' => 1384,
                'name' => 'Kunbaracs',
                'core_counties_id' => 1,
            ),
            384 => 
            array (
                'id' => 1385,
                'name' => 'Ladánybene',
                'core_counties_id' => 1,
            ),
            385 => 
            array (
                'id' => 1386,
                'name' => 'Lajosmizse',
                'core_counties_id' => 1,
            ),
            386 => 
            array (
                'id' => 1387,
                'name' => 'Felsőlajos',
                'core_counties_id' => 1,
            ),
            387 => 
            array (
                'id' => 1388,
                'name' => 'Tiszakécske',
                'core_counties_id' => 1,
            ),
            388 => 
            array (
                'id' => 1389,
                'name' => 'Tiszaug',
                'core_counties_id' => 1,
            ),
            389 => 
            array (
                'id' => 1390,
                'name' => 'Lakitelek',
                'core_counties_id' => 1,
            ),
            390 => 
            array (
                'id' => 1391,
                'name' => 'Tiszaalpár',
                'core_counties_id' => 1,
            ),
            391 => 
            array (
                'id' => 1392,
                'name' => 'Izsák',
                'core_counties_id' => 1,
            ),
            392 => 
            array (
                'id' => 1393,
                'name' => 'Páhi',
                'core_counties_id' => 1,
            ),
            393 => 
            array (
                'id' => 1394,
                'name' => 'Ágasegyháza',
                'core_counties_id' => 1,
            ),
            394 => 
            array (
                'id' => 1395,
                'name' => 'Orgovány',
                'core_counties_id' => 1,
            ),
            395 => 
            array (
                'id' => 1396,
                'name' => 'Jakabszállás',
                'core_counties_id' => 1,
            ),
            396 => 
            array (
                'id' => 1397,
                'name' => 'Szabadszállás',
                'core_counties_id' => 1,
            ),
            397 => 
            array (
                'id' => 1398,
                'name' => 'Fülöpszállás',
                'core_counties_id' => 1,
            ),
            398 => 
            array (
                'id' => 1399,
                'name' => 'Szalkszentmárton',
                'core_counties_id' => 1,
            ),
            399 => 
            array (
                'id' => 1400,
                'name' => 'Dunavecse',
                'core_counties_id' => 1,
            ),
            400 => 
            array (
                'id' => 1401,
                'name' => 'Apostag',
                'core_counties_id' => 1,
            ),
            401 => 
            array (
                'id' => 1402,
                'name' => 'Kunszentmiklós',
                'core_counties_id' => 1,
            ),
            402 => 
            array (
                'id' => 1403,
                'name' => 'Kunpeszér',
                'core_counties_id' => 1,
            ),
            403 => 
            array (
                'id' => 1404,
                'name' => 'Kunadacs',
                'core_counties_id' => 1,
            ),
            404 => 
            array (
                'id' => 1405,
                'name' => 'Tass',
                'core_counties_id' => 1,
            ),
            405 => 
            array (
                'id' => 1406,
                'name' => 'Kiskunfélegyháza',
                'core_counties_id' => 1,
            ),
            406 => 
            array (
                'id' => 1407,
                'name' => 'Gátér',
                'core_counties_id' => 1,
            ),
            407 => 
            array (
                'id' => 1408,
                'name' => 'Pálmonostora',
                'core_counties_id' => 1,
            ),
            408 => 
            array (
                'id' => 1409,
                'name' => 'Petőfiszállás',
                'core_counties_id' => 1,
            ),
            409 => 
            array (
                'id' => 1410,
                'name' => 'Bugac',
                'core_counties_id' => 1,
            ),
            410 => 
            array (
                'id' => 1411,
                'name' => 'Bugacpusztaháza',
                'core_counties_id' => 1,
            ),
            411 => 
            array (
                'id' => 1412,
                'name' => 'Kunszállás',
                'core_counties_id' => 1,
            ),
            412 => 
            array (
                'id' => 1413,
                'name' => 'Fülöpjakab',
                'core_counties_id' => 1,
            ),
            413 => 
            array (
                'id' => 1414,
                'name' => 'Kiskunmajsa',
                'core_counties_id' => 1,
            ),
            414 => 
            array (
                'id' => 1415,
                'name' => 'Szank',
                'core_counties_id' => 1,
            ),
            415 => 
            array (
                'id' => 1416,
                'name' => 'Móricgát',
                'core_counties_id' => 1,
            ),
            416 => 
            array (
                'id' => 1417,
                'name' => 'Jászszentlászló',
                'core_counties_id' => 1,
            ),
            417 => 
            array (
                'id' => 1418,
                'name' => 'Kömpöc',
                'core_counties_id' => 1,
            ),
            418 => 
            array (
                'id' => 1419,
                'name' => 'Csólyospálos',
                'core_counties_id' => 1,
            ),
            419 => 
            array (
                'id' => 1420,
                'name' => 'Harkakötöny',
                'core_counties_id' => 1,
            ),
            420 => 
            array (
                'id' => 1421,
                'name' => 'Kiskőrös',
                'core_counties_id' => 1,
            ),
            421 => 
            array (
                'id' => 1422,
                'name' => 'Kaskantyú',
                'core_counties_id' => 1,
            ),
            422 => 
            array (
                'id' => 1423,
                'name' => 'Akasztó',
                'core_counties_id' => 1,
            ),
            423 => 
            array (
                'id' => 1424,
                'name' => 'Csengőd',
                'core_counties_id' => 1,
            ),
            424 => 
            array (
                'id' => 1425,
                'name' => 'Soltszentimre',
                'core_counties_id' => 1,
            ),
            425 => 
            array (
                'id' => 1426,
                'name' => 'Tabdi',
                'core_counties_id' => 1,
            ),
            426 => 
            array (
                'id' => 1427,
                'name' => 'Soltvadkert',
                'core_counties_id' => 1,
            ),
            427 => 
            array (
                'id' => 1428,
                'name' => 'Bócsa',
                'core_counties_id' => 1,
            ),
            428 => 
            array (
                'id' => 1429,
                'name' => 'Tázlár',
                'core_counties_id' => 1,
            ),
            429 => 
            array (
                'id' => 1430,
                'name' => 'Kecel',
                'core_counties_id' => 1,
            ),
            430 => 
            array (
                'id' => 1431,
                'name' => 'Imrehegy',
                'core_counties_id' => 1,
            ),
            431 => 
            array (
                'id' => 1432,
                'name' => 'Császártöltés',
                'core_counties_id' => 1,
            ),
            432 => 
            array (
                'id' => 1433,
                'name' => 'Kalocsa',
                'core_counties_id' => 1,
            ),
            433 => 
            array (
                'id' => 1434,
                'name' => 'Öregcsertő',
                'core_counties_id' => 1,
            ),
            434 => 
            array (
                'id' => 1435,
                'name' => 'Solt',
                'core_counties_id' => 1,
            ),
            435 => 
            array (
                'id' => 1436,
                'name' => 'Újsolt',
                'core_counties_id' => 1,
            ),
            436 => 
            array (
                'id' => 1437,
                'name' => 'Dunaegyháza',
                'core_counties_id' => 1,
            ),
            437 => 
            array (
                'id' => 1438,
                'name' => 'Dunatetétlen',
                'core_counties_id' => 1,
            ),
            438 => 
            array (
                'id' => 1439,
                'name' => 'Harta',
                'core_counties_id' => 1,
            ),
            439 => 
            array (
                'id' => 1440,
                'name' => 'Dunapataj',
                'core_counties_id' => 1,
            ),
            440 => 
            array (
                'id' => 1441,
                'name' => 'Foktő',
                'core_counties_id' => 1,
            ),
            441 => 
            array (
                'id' => 1442,
                'name' => 'Uszód',
                'core_counties_id' => 1,
            ),
            442 => 
            array (
                'id' => 1443,
                'name' => 'Dunaszentbenedek',
                'core_counties_id' => 1,
            ),
            443 => 
            array (
                'id' => 1444,
                'name' => 'Géderlak',
                'core_counties_id' => 1,
            ),
            444 => 
            array (
                'id' => 1445,
                'name' => 'Ordas',
                'core_counties_id' => 1,
            ),
            445 => 
            array (
                'id' => 1446,
                'name' => 'Szakmár',
                'core_counties_id' => 1,
            ),
            446 => 
            array (
                'id' => 1447,
                'name' => 'Újtelek',
                'core_counties_id' => 1,
            ),
            447 => 
            array (
                'id' => 1448,
                'name' => 'Homokmégy',
                'core_counties_id' => 1,
            ),
            448 => 
            array (
                'id' => 1449,
                'name' => 'Drágszél',
                'core_counties_id' => 1,
            ),
            449 => 
            array (
                'id' => 1450,
                'name' => 'Miske',
                'core_counties_id' => 1,
            ),
            450 => 
            array (
                'id' => 1451,
                'name' => 'Hajós',
                'core_counties_id' => 1,
            ),
            451 => 
            array (
                'id' => 1452,
                'name' => 'Nemesnádudvar',
                'core_counties_id' => 1,
            ),
            452 => 
            array (
                'id' => 1453,
                'name' => 'Sükösd',
                'core_counties_id' => 1,
            ),
            453 => 
            array (
                'id' => 1454,
                'name' => 'Érsekcsanád',
                'core_counties_id' => 1,
            ),
            454 => 
            array (
                'id' => 1455,
                'name' => 'Érsekhalma',
                'core_counties_id' => 1,
            ),
            455 => 
            array (
                'id' => 1456,
                'name' => 'Bátya',
                'core_counties_id' => 1,
            ),
            456 => 
            array (
                'id' => 1457,
                'name' => 'Fajsz',
                'core_counties_id' => 1,
            ),
            457 => 
            array (
                'id' => 1458,
                'name' => 'Dusnok',
                'core_counties_id' => 1,
            ),
            458 => 
            array (
                'id' => 1459,
                'name' => 'Kiskunhalas',
                'core_counties_id' => 1,
            ),
            459 => 
            array (
                'id' => 1460,
                'name' => 'Zsana',
                'core_counties_id' => 1,
            ),
            460 => 
            array (
                'id' => 1461,
                'name' => 'Balotaszállás',
                'core_counties_id' => 1,
            ),
            461 => 
            array (
                'id' => 1462,
                'name' => 'Kunfehértó',
                'core_counties_id' => 1,
            ),
            462 => 
            array (
                'id' => 1463,
                'name' => 'Pirtó',
                'core_counties_id' => 1,
            ),
            463 => 
            array (
                'id' => 1464,
                'name' => 'Kisszállás',
                'core_counties_id' => 1,
            ),
            464 => 
            array (
                'id' => 1465,
                'name' => 'Tompa',
                'core_counties_id' => 1,
            ),
            465 => 
            array (
                'id' => 1466,
                'name' => 'Kelebia',
                'core_counties_id' => 1,
            ),
            466 => 
            array (
                'id' => 1467,
                'name' => 'Csikéria',
                'core_counties_id' => 1,
            ),
            467 => 
            array (
                'id' => 1468,
                'name' => 'Bácsszőlős',
                'core_counties_id' => 1,
            ),
            468 => 
            array (
                'id' => 1469,
                'name' => 'Bácsalmás',
                'core_counties_id' => 1,
            ),
            469 => 
            array (
                'id' => 1470,
                'name' => 'Kunbaja',
                'core_counties_id' => 1,
            ),
            470 => 
            array (
                'id' => 1471,
                'name' => 'Jánoshalma',
                'core_counties_id' => 1,
            ),
            471 => 
            array (
                'id' => 1472,
                'name' => 'Kéleshalom',
                'core_counties_id' => 1,
            ),
            472 => 
            array (
                'id' => 1473,
                'name' => 'Borota',
                'core_counties_id' => 1,
            ),
            473 => 
            array (
                'id' => 1474,
                'name' => 'Rém',
                'core_counties_id' => 1,
            ),
            474 => 
            array (
                'id' => 1475,
                'name' => 'Felsőszentiván',
                'core_counties_id' => 1,
            ),
            475 => 
            array (
                'id' => 1476,
                'name' => 'Csávoly',
                'core_counties_id' => 1,
            ),
            476 => 
            array (
                'id' => 1477,
                'name' => 'Mélykút',
                'core_counties_id' => 1,
            ),
            477 => 
            array (
                'id' => 1478,
                'name' => 'Tataháza',
                'core_counties_id' => 1,
            ),
            478 => 
            array (
                'id' => 1479,
                'name' => 'Mátételke',
                'core_counties_id' => 1,
            ),
            479 => 
            array (
                'id' => 1480,
                'name' => 'Bácsbokod',
                'core_counties_id' => 1,
            ),
            480 => 
            array (
                'id' => 1481,
                'name' => 'Bácsborsód',
                'core_counties_id' => 1,
            ),
            481 => 
            array (
                'id' => 1482,
                'name' => 'Katymár',
                'core_counties_id' => 1,
            ),
            482 => 
            array (
                'id' => 1483,
                'name' => 'Madaras',
                'core_counties_id' => 1,
            ),
            483 => 
            array (
                'id' => 1484,
                'name' => 'Baja',
                'core_counties_id' => 1,
            ),
            484 => 
            array (
                'id' => 1485,
                'name' => 'Bácsszentgyörgy',
                'core_counties_id' => 1,
            ),
            485 => 
            array (
                'id' => 1486,
                'name' => 'Szeremle',
                'core_counties_id' => 1,
            ),
            486 => 
            array (
                'id' => 1487,
                'name' => 'Dunafalva',
                'core_counties_id' => 1,
            ),
            487 => 
            array (
                'id' => 1488,
                'name' => 'Vaskút',
                'core_counties_id' => 1,
            ),
            488 => 
            array (
                'id' => 1489,
                'name' => 'Gara',
                'core_counties_id' => 1,
            ),
            489 => 
            array (
                'id' => 1490,
                'name' => 'Csátalja',
                'core_counties_id' => 1,
            ),
            490 => 
            array (
                'id' => 1491,
                'name' => 'Dávod',
                'core_counties_id' => 1,
            ),
            491 => 
            array (
                'id' => 1492,
                'name' => 'Hercegszántó',
                'core_counties_id' => 1,
            ),
            492 => 
            array (
                'id' => 1493,
                'name' => 'Nagybaracska',
                'core_counties_id' => 1,
            ),
            493 => 
            array (
                'id' => 1494,
                'name' => 'Bátmonostor',
                'core_counties_id' => 1,
            ),
            494 => 
            array (
                'id' => 1495,
                'name' => 'Szentes',
                'core_counties_id' => 5,
            ),
            495 => 
            array (
                'id' => 1496,
                'name' => 'Nagytőke',
                'core_counties_id' => 5,
            ),
            496 => 
            array (
                'id' => 1497,
                'name' => 'Derekegyház',
                'core_counties_id' => 5,
            ),
            497 => 
            array (
                'id' => 1498,
                'name' => 'Nagymágocs',
                'core_counties_id' => 5,
            ),
            498 => 
            array (
                'id' => 1499,
                'name' => 'Árpádhalom',
                'core_counties_id' => 5,
            ),
            499 => 
            array (
                'id' => 1500,
                'name' => 'Eperjes',
                'core_counties_id' => 5,
            ),
        ));
        \DB::table('core_cities')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'name' => 'Fábiánsebestyén',
                'core_counties_id' => 5,
            ),
            1 => 
            array (
                'id' => 1502,
                'name' => 'Mindszent',
                'core_counties_id' => 5,
            ),
            2 => 
            array (
                'id' => 1503,
                'name' => 'Szegvár',
                'core_counties_id' => 5,
            ),
            3 => 
            array (
                'id' => 1504,
                'name' => 'Mártély',
                'core_counties_id' => 5,
            ),
            4 => 
            array (
                'id' => 1505,
                'name' => 'Csongrád',
                'core_counties_id' => 5,
            ),
            5 => 
            array (
                'id' => 1506,
                'name' => 'Felgyő',
                'core_counties_id' => 5,
            ),
            6 => 
            array (
                'id' => 1507,
                'name' => 'Tömörkény',
                'core_counties_id' => 5,
            ),
            7 => 
            array (
                'id' => 1508,
                'name' => 'Csanytelek',
                'core_counties_id' => 5,
            ),
            8 => 
            array (
                'id' => 1509,
                'name' => 'Szeged',
                'core_counties_id' => 5,
            ),
            9 => 
            array (
                'id' => 1510,
                'name' => 'Algyő',
                'core_counties_id' => 5,
            ),
            10 => 
            array (
                'id' => 1511,
                'name' => 'Újszentiván',
                'core_counties_id' => 5,
            ),
            11 => 
            array (
                'id' => 1512,
                'name' => 'Kübekháza',
                'core_counties_id' => 5,
            ),
            12 => 
            array (
                'id' => 1513,
                'name' => 'Tiszasziget',
                'core_counties_id' => 5,
            ),
            13 => 
            array (
                'id' => 1514,
                'name' => 'Röszke',
                'core_counties_id' => 5,
            ),
            14 => 
            array (
                'id' => 1515,
                'name' => 'Kistelek',
                'core_counties_id' => 5,
            ),
            15 => 
            array (
                'id' => 1516,
                'name' => 'Sándorfalva',
                'core_counties_id' => 5,
            ),
            16 => 
            array (
                'id' => 1517,
                'name' => 'Szatymaz',
                'core_counties_id' => 5,
            ),
            17 => 
            array (
                'id' => 1518,
                'name' => 'Balástya',
                'core_counties_id' => 5,
            ),
            18 => 
            array (
                'id' => 1519,
                'name' => 'Csengele',
                'core_counties_id' => 5,
            ),
            19 => 
            array (
                'id' => 1520,
                'name' => 'Dóc',
                'core_counties_id' => 5,
            ),
            20 => 
            array (
                'id' => 1521,
                'name' => 'Ópusztaszer',
                'core_counties_id' => 5,
            ),
            21 => 
            array (
                'id' => 1522,
                'name' => 'Baks',
                'core_counties_id' => 5,
            ),
            22 => 
            array (
                'id' => 1523,
                'name' => 'Pusztaszer',
                'core_counties_id' => 5,
            ),
            23 => 
            array (
                'id' => 1524,
                'name' => 'Deszk',
                'core_counties_id' => 5,
            ),
            24 => 
            array (
                'id' => 1525,
                'name' => 'Klárafalva',
                'core_counties_id' => 5,
            ),
            25 => 
            array (
                'id' => 1526,
                'name' => 'Ferencszállás',
                'core_counties_id' => 5,
            ),
            26 => 
            array (
                'id' => 1527,
                'name' => 'Kiszombor',
                'core_counties_id' => 5,
            ),
            27 => 
            array (
                'id' => 1528,
                'name' => 'Domaszék',
                'core_counties_id' => 5,
            ),
            28 => 
            array (
                'id' => 1529,
                'name' => 'Mórahalom',
                'core_counties_id' => 5,
            ),
            29 => 
            array (
                'id' => 1530,
                'name' => 'Ásotthalom',
                'core_counties_id' => 5,
            ),
            30 => 
            array (
                'id' => 1531,
                'name' => 'Öttömös',
                'core_counties_id' => 5,
            ),
            31 => 
            array (
                'id' => 1532,
                'name' => 'Pusztamérges',
                'core_counties_id' => 5,
            ),
            32 => 
            array (
                'id' => 1533,
                'name' => 'Ruzsa',
                'core_counties_id' => 5,
            ),
            33 => 
            array (
                'id' => 1534,
                'name' => 'Zákányszék',
                'core_counties_id' => 5,
            ),
            34 => 
            array (
                'id' => 1535,
                'name' => 'Zsombó',
                'core_counties_id' => 5,
            ),
            35 => 
            array (
                'id' => 1536,
                'name' => 'Forráskút',
                'core_counties_id' => 5,
            ),
            36 => 
            array (
                'id' => 1537,
                'name' => 'Üllés',
                'core_counties_id' => 5,
            ),
            37 => 
            array (
                'id' => 1538,
                'name' => 'Bordány',
                'core_counties_id' => 5,
            ),
            38 => 
            array (
                'id' => 1539,
                'name' => 'Hódmezővásárhely',
                'core_counties_id' => 5,
            ),
            39 => 
            array (
                'id' => 1540,
                'name' => 'Székkutas',
                'core_counties_id' => 5,
            ),
            40 => 
            array (
                'id' => 1541,
                'name' => 'Makó',
                'core_counties_id' => 5,
            ),
            41 => 
            array (
                'id' => 1542,
                'name' => 'Királyhegyes',
                'core_counties_id' => 5,
            ),
            42 => 
            array (
                'id' => 1543,
                'name' => 'Kövegy',
                'core_counties_id' => 5,
            ),
            43 => 
            array (
                'id' => 1544,
                'name' => 'Csanádpalota',
                'core_counties_id' => 5,
            ),
            44 => 
            array (
                'id' => 1545,
                'name' => 'Pitvaros',
                'core_counties_id' => 5,
            ),
            45 => 
            array (
                'id' => 1546,
                'name' => 'Csanádalberti',
                'core_counties_id' => 5,
            ),
            46 => 
            array (
                'id' => 1547,
                'name' => 'Ambrózfalva',
                'core_counties_id' => 5,
            ),
            47 => 
            array (
                'id' => 1548,
                'name' => 'Nagyér',
                'core_counties_id' => 5,
            ),
            48 => 
            array (
                'id' => 1549,
                'name' => 'Maroslele',
                'core_counties_id' => 5,
            ),
            49 => 
            array (
                'id' => 1550,
                'name' => 'Földeák',
                'core_counties_id' => 5,
            ),
            50 => 
            array (
                'id' => 1551,
                'name' => 'Óföldeák',
                'core_counties_id' => 5,
            ),
            51 => 
            array (
                'id' => 1552,
                'name' => 'Apátfalva',
                'core_counties_id' => 5,
            ),
            52 => 
            array (
                'id' => 1553,
                'name' => 'Magyarcsanád',
                'core_counties_id' => 5,
            ),
            53 => 
            array (
                'id' => 1554,
                'name' => 'Nagylak',
                'core_counties_id' => 5,
            ),
            54 => 
            array (
                'id' => 1555,
                'name' => 'Sárbogárd',
                'core_counties_id' => 6,
            ),
            55 => 
            array (
                'id' => 1556,
                'name' => 'Alap',
                'core_counties_id' => 6,
            ),
            56 => 
            array (
                'id' => 1557,
                'name' => 'Alsószentiván',
                'core_counties_id' => 6,
            ),
            57 => 
            array (
                'id' => 1558,
                'name' => 'Cece',
                'core_counties_id' => 6,
            ),
            58 => 
            array (
                'id' => 1559,
                'name' => 'Sáregres',
                'core_counties_id' => 6,
            ),
            59 => 
            array (
                'id' => 1560,
                'name' => 'Igar',
                'core_counties_id' => 6,
            ),
            60 => 
            array (
                'id' => 1561,
                'name' => 'Mezőszilas',
                'core_counties_id' => 6,
            ),
            61 => 
            array (
                'id' => 1562,
                'name' => 'Dunaföldvár',
                'core_counties_id' => 16,
            ),
            62 => 
            array (
                'id' => 1563,
                'name' => 'Bölcske',
                'core_counties_id' => 16,
            ),
            63 => 
            array (
                'id' => 1564,
                'name' => 'Madocsa',
                'core_counties_id' => 16,
            ),
            64 => 
            array (
                'id' => 1565,
                'name' => 'Paks',
                'core_counties_id' => 16,
            ),
            65 => 
            array (
                'id' => 1566,
                'name' => 'Pusztahencse',
                'core_counties_id' => 16,
            ),
            66 => 
            array (
                'id' => 1567,
                'name' => 'Németkér',
                'core_counties_id' => 16,
            ),
            67 => 
            array (
                'id' => 1568,
                'name' => 'Vajta',
                'core_counties_id' => 6,
            ),
            68 => 
            array (
                'id' => 1569,
                'name' => 'Pálfa',
                'core_counties_id' => 16,
            ),
            69 => 
            array (
                'id' => 1570,
                'name' => 'Bikács',
                'core_counties_id' => 16,
            ),
            70 => 
            array (
                'id' => 1571,
                'name' => 'Nagydorog',
                'core_counties_id' => 16,
            ),
            71 => 
            array (
                'id' => 1572,
                'name' => 'Györköny',
                'core_counties_id' => 16,
            ),
            72 => 
            array (
                'id' => 1573,
                'name' => 'Sárszentlőrinc',
                'core_counties_id' => 16,
            ),
            73 => 
            array (
                'id' => 1574,
                'name' => 'Kajdacs',
                'core_counties_id' => 16,
            ),
            74 => 
            array (
                'id' => 1575,
                'name' => 'Kölesd',
                'core_counties_id' => 16,
            ),
            75 => 
            array (
                'id' => 1576,
                'name' => 'Tengelic',
                'core_counties_id' => 16,
            ),
            76 => 
            array (
                'id' => 1577,
                'name' => 'Szedres',
                'core_counties_id' => 16,
            ),
            77 => 
            array (
                'id' => 1578,
                'name' => 'Medina',
                'core_counties_id' => 16,
            ),
            78 => 
            array (
                'id' => 1579,
                'name' => 'Belecska',
                'core_counties_id' => 16,
            ),
            79 => 
            array (
                'id' => 1580,
                'name' => 'Keszőhidegkút',
                'core_counties_id' => 16,
            ),
            80 => 
            array (
                'id' => 1581,
                'name' => 'Szárazd',
                'core_counties_id' => 16,
            ),
            81 => 
            array (
                'id' => 1582,
                'name' => 'Gyönk',
                'core_counties_id' => 16,
            ),
            82 => 
            array (
                'id' => 1583,
                'name' => 'Miszla',
                'core_counties_id' => 16,
            ),
            83 => 
            array (
                'id' => 1584,
                'name' => 'Udvari',
                'core_counties_id' => 16,
            ),
            84 => 
            array (
                'id' => 1585,
                'name' => 'Varsád',
                'core_counties_id' => 16,
            ),
            85 => 
            array (
                'id' => 1586,
                'name' => 'Kistormás',
                'core_counties_id' => 16,
            ),
            86 => 
            array (
                'id' => 1587,
                'name' => 'Szakadát',
                'core_counties_id' => 16,
            ),
            87 => 
            array (
                'id' => 1588,
                'name' => 'Diósberény',
                'core_counties_id' => 16,
            ),
            88 => 
            array (
                'id' => 1589,
                'name' => 'Simontornya',
                'core_counties_id' => 16,
            ),
            89 => 
            array (
                'id' => 1590,
                'name' => 'Kisszékely',
                'core_counties_id' => 16,
            ),
            90 => 
            array (
                'id' => 1591,
                'name' => 'Tolnanémedi',
                'core_counties_id' => 16,
            ),
            91 => 
            array (
                'id' => 1592,
                'name' => 'Pincehely',
                'core_counties_id' => 16,
            ),
            92 => 
            array (
                'id' => 1593,
                'name' => 'Nagyszékely',
                'core_counties_id' => 16,
            ),
            93 => 
            array (
                'id' => 1594,
                'name' => 'Ozora',
                'core_counties_id' => 16,
            ),
            94 => 
            array (
                'id' => 1595,
                'name' => 'Fürged',
                'core_counties_id' => 16,
            ),
            95 => 
            array (
                'id' => 1596,
                'name' => 'Tamási',
                'core_counties_id' => 16,
            ),
            96 => 
            array (
                'id' => 1597,
                'name' => 'Nagykónyi',
                'core_counties_id' => 16,
            ),
            97 => 
            array (
                'id' => 1598,
                'name' => 'Értény',
                'core_counties_id' => 16,
            ),
            98 => 
            array (
                'id' => 1599,
                'name' => 'Koppányszántó',
                'core_counties_id' => 16,
            ),
            99 => 
            array (
                'id' => 1600,
                'name' => 'Iregszemcse',
                'core_counties_id' => 16,
            ),
            100 => 
            array (
                'id' => 1601,
                'name' => 'Újireg',
                'core_counties_id' => 16,
            ),
            101 => 
            array (
                'id' => 1602,
                'name' => 'Nagyszokoly',
                'core_counties_id' => 16,
            ),
            102 => 
            array (
                'id' => 1603,
                'name' => 'Magyarkeszi',
                'core_counties_id' => 16,
            ),
            103 => 
            array (
                'id' => 1604,
                'name' => 'Felsőnyék',
                'core_counties_id' => 16,
            ),
            104 => 
            array (
                'id' => 1605,
                'name' => 'Szekszárd',
                'core_counties_id' => 16,
            ),
            105 => 
            array (
                'id' => 1606,
                'name' => 'Szálka',
                'core_counties_id' => 16,
            ),
            106 => 
            array (
                'id' => 1607,
                'name' => 'Kakasd',
                'core_counties_id' => 16,
            ),
            107 => 
            array (
                'id' => 1608,
                'name' => 'Tolna',
                'core_counties_id' => 16,
            ),
            108 => 
            array (
                'id' => 1609,
                'name' => 'Bogyiszló',
                'core_counties_id' => 16,
            ),
            109 => 
            array (
                'id' => 1610,
                'name' => 'Fadd',
                'core_counties_id' => 16,
            ),
            110 => 
            array (
                'id' => 1611,
                'name' => 'Gerjen',
                'core_counties_id' => 16,
            ),
            111 => 
            array (
                'id' => 1612,
                'name' => 'Dunaszentgyörgy',
                'core_counties_id' => 16,
            ),
            112 => 
            array (
                'id' => 1613,
                'name' => 'Fácánkert',
                'core_counties_id' => 16,
            ),
            113 => 
            array (
                'id' => 1614,
                'name' => 'Bátaszék',
                'core_counties_id' => 16,
            ),
            114 => 
            array (
                'id' => 1615,
                'name' => 'Pörböly',
                'core_counties_id' => 16,
            ),
            115 => 
            array (
                'id' => 1616,
                'name' => 'Őcsény',
                'core_counties_id' => 16,
            ),
            116 => 
            array (
                'id' => 1617,
                'name' => 'Decs',
                'core_counties_id' => 16,
            ),
            117 => 
            array (
                'id' => 1618,
                'name' => 'Sárpilis',
                'core_counties_id' => 16,
            ),
            118 => 
            array (
                'id' => 1619,
                'name' => 'Várdomb',
                'core_counties_id' => 16,
            ),
            119 => 
            array (
                'id' => 1620,
                'name' => 'Alsónána',
                'core_counties_id' => 16,
            ),
            120 => 
            array (
                'id' => 1621,
                'name' => 'Alsónyék',
                'core_counties_id' => 16,
            ),
            121 => 
            array (
                'id' => 1622,
                'name' => 'Báta',
                'core_counties_id' => 16,
            ),
            122 => 
            array (
                'id' => 1623,
                'name' => 'Bonyhád',
                'core_counties_id' => 16,
            ),
            123 => 
            array (
                'id' => 1624,
                'name' => 'Bonyhádvarasd',
                'core_counties_id' => 16,
            ),
            124 => 
            array (
                'id' => 1625,
                'name' => 'Kisdorog',
                'core_counties_id' => 16,
            ),
            125 => 
            array (
                'id' => 1626,
                'name' => 'Cikó',
                'core_counties_id' => 16,
            ),
            126 => 
            array (
                'id' => 1627,
                'name' => 'Grábóc',
                'core_counties_id' => 16,
            ),
            127 => 
            array (
                'id' => 1628,
                'name' => 'Mőcsény',
                'core_counties_id' => 16,
            ),
            128 => 
            array (
                'id' => 1629,
                'name' => 'Bátaapáti',
                'core_counties_id' => 16,
            ),
            129 => 
            array (
                'id' => 1630,
                'name' => 'Mórágy',
                'core_counties_id' => 16,
            ),
            130 => 
            array (
                'id' => 1631,
                'name' => 'Sióagárd',
                'core_counties_id' => 16,
            ),
            131 => 
            array (
                'id' => 1632,
                'name' => 'Harc',
                'core_counties_id' => 16,
            ),
            132 => 
            array (
                'id' => 1633,
                'name' => 'Zomba',
                'core_counties_id' => 16,
            ),
            133 => 
            array (
                'id' => 1634,
                'name' => 'Kéty',
                'core_counties_id' => 16,
            ),
            134 => 
            array (
                'id' => 1635,
                'name' => 'Felsőnána',
                'core_counties_id' => 16,
            ),
            135 => 
            array (
                'id' => 1636,
                'name' => 'Murga',
                'core_counties_id' => 16,
            ),
            136 => 
            array (
                'id' => 1637,
                'name' => 'Tevel',
                'core_counties_id' => 16,
            ),
            137 => 
            array (
                'id' => 1638,
                'name' => 'Závod',
                'core_counties_id' => 16,
            ),
            138 => 
            array (
                'id' => 1639,
                'name' => 'Kisvejke',
                'core_counties_id' => 16,
            ),
            139 => 
            array (
                'id' => 1640,
                'name' => 'Lengyel',
                'core_counties_id' => 2,
            ),
            140 => 
            array (
                'id' => 1641,
                'name' => 'Szárász',
                'core_counties_id' => 16,
            ),
            141 => 
            array (
                'id' => 1642,
                'name' => 'Mucsfa',
                'core_counties_id' => 16,
            ),
            142 => 
            array (
                'id' => 1643,
                'name' => 'Aparhant',
                'core_counties_id' => 16,
            ),
            143 => 
            array (
                'id' => 1644,
                'name' => 'Nagyvejke',
                'core_counties_id' => 16,
            ),
            144 => 
            array (
                'id' => 1645,
                'name' => 'Szárász',
                'core_counties_id' => 2,
            ),
            145 => 
            array (
                'id' => 1646,
                'name' => 'Hőgyész',
                'core_counties_id' => 16,
            ),
            146 => 
            array (
                'id' => 1647,
                'name' => 'Szakály',
                'core_counties_id' => 16,
            ),
            147 => 
            array (
                'id' => 1648,
                'name' => 'Regöly',
                'core_counties_id' => 16,
            ),
            148 => 
            array (
                'id' => 1649,
                'name' => 'Kalaznó',
                'core_counties_id' => 16,
            ),
            149 => 
            array (
                'id' => 1650,
                'name' => 'Mucsi',
                'core_counties_id' => 16,
            ),
            150 => 
            array (
                'id' => 1651,
                'name' => 'Dombóvár',
                'core_counties_id' => 16,
            ),
            151 => 
            array (
                'id' => 1652,
                'name' => 'Dalmand',
                'core_counties_id' => 16,
            ),
            152 => 
            array (
                'id' => 1653,
                'name' => 'Kocsola',
                'core_counties_id' => 16,
            ),
            153 => 
            array (
                'id' => 1654,
                'name' => 'Szakcs',
                'core_counties_id' => 16,
            ),
            154 => 
            array (
                'id' => 1655,
                'name' => 'Várong',
                'core_counties_id' => 16,
            ),
            155 => 
            array (
                'id' => 1656,
                'name' => 'Lápafő',
                'core_counties_id' => 16,
            ),
            156 => 
            array (
                'id' => 1657,
                'name' => 'Nak',
                'core_counties_id' => 16,
            ),
            157 => 
            array (
                'id' => 1658,
                'name' => 'Dúzs',
                'core_counties_id' => 16,
            ),
            158 => 
            array (
                'id' => 1659,
                'name' => 'Csibrák',
                'core_counties_id' => 16,
            ),
            159 => 
            array (
                'id' => 1660,
                'name' => 'Kurd',
                'core_counties_id' => 16,
            ),
            160 => 
            array (
                'id' => 1661,
                'name' => 'Gyulaj',
                'core_counties_id' => 16,
            ),
            161 => 
            array (
                'id' => 1662,
                'name' => 'Döbrököz',
                'core_counties_id' => 16,
            ),
            162 => 
            array (
                'id' => 1663,
                'name' => 'Kapospula',
                'core_counties_id' => 16,
            ),
            163 => 
            array (
                'id' => 1664,
                'name' => 'Attala',
                'core_counties_id' => 16,
            ),
            164 => 
            array (
                'id' => 1665,
                'name' => 'Csoma',
                'core_counties_id' => 14,
            ),
            165 => 
            array (
                'id' => 1666,
                'name' => 'Szabadi',
                'core_counties_id' => 14,
            ),
            166 => 
            array (
                'id' => 1667,
                'name' => 'Nagyberki',
                'core_counties_id' => 14,
            ),
            167 => 
            array (
                'id' => 1668,
                'name' => 'Kercseliget',
                'core_counties_id' => 14,
            ),
            168 => 
            array (
                'id' => 1669,
                'name' => 'Mosdós',
                'core_counties_id' => 14,
            ),
            169 => 
            array (
                'id' => 1670,
                'name' => 'Kaposkeresztúr',
                'core_counties_id' => 14,
            ),
            170 => 
            array (
                'id' => 1671,
                'name' => 'Baté',
                'core_counties_id' => 14,
            ),
            171 => 
            array (
                'id' => 1672,
                'name' => 'Kaposhomok',
                'core_counties_id' => 14,
            ),
            172 => 
            array (
                'id' => 1673,
                'name' => 'Taszár',
                'core_counties_id' => 14,
            ),
            173 => 
            array (
                'id' => 1674,
                'name' => 'Fonó',
                'core_counties_id' => 14,
            ),
            174 => 
            array (
                'id' => 1675,
                'name' => 'Gölle',
                'core_counties_id' => 14,
            ),
            175 => 
            array (
                'id' => 1676,
                'name' => 'Büssü',
                'core_counties_id' => 14,
            ),
            176 => 
            array (
                'id' => 1677,
                'name' => 'Kazsok',
                'core_counties_id' => 14,
            ),
            177 => 
            array (
                'id' => 1678,
                'name' => 'Igal',
                'core_counties_id' => 14,
            ),
            178 => 
            array (
                'id' => 1679,
                'name' => 'Somogyszil',
                'core_counties_id' => 14,
            ),
            179 => 
            array (
                'id' => 1680,
                'name' => 'Gadács',
                'core_counties_id' => 14,
            ),
            180 => 
            array (
                'id' => 1681,
                'name' => 'Kisgyalán',
                'core_counties_id' => 14,
            ),
            181 => 
            array (
                'id' => 1682,
                'name' => 'Bonnya',
                'core_counties_id' => 14,
            ),
            182 => 
            array (
                'id' => 1683,
                'name' => 'Kisbárapáti',
                'core_counties_id' => 14,
            ),
            183 => 
            array (
                'id' => 1684,
                'name' => 'Fiad',
                'core_counties_id' => 14,
            ),
            184 => 
            array (
                'id' => 1685,
                'name' => 'Somogyacsa',
                'core_counties_id' => 14,
            ),
            185 => 
            array (
                'id' => 1686,
                'name' => 'Somogydöröcske',
                'core_counties_id' => 14,
            ),
            186 => 
            array (
                'id' => 1687,
                'name' => 'Kára',
                'core_counties_id' => 14,
            ),
            187 => 
            array (
                'id' => 1688,
                'name' => 'Szorosad',
                'core_counties_id' => 14,
            ),
            188 => 
            array (
                'id' => 1689,
                'name' => 'Törökkoppány',
                'core_counties_id' => 14,
            ),
            189 => 
            array (
                'id' => 1690,
                'name' => 'Miklósi',
                'core_counties_id' => 14,
            ),
            190 => 
            array (
                'id' => 1691,
                'name' => 'Mecsekpölöske',
                'core_counties_id' => 2,
            ),
            191 => 
            array (
                'id' => 1692,
                'name' => 'Komló',
                'core_counties_id' => 2,
            ),
            192 => 
            array (
                'id' => 1693,
                'name' => 'Mánfa',
                'core_counties_id' => 2,
            ),
            193 => 
            array (
                'id' => 1694,
                'name' => 'Liget',
                'core_counties_id' => 2,
            ),
            194 => 
            array (
                'id' => 1695,
                'name' => 'Magyaregregy',
                'core_counties_id' => 2,
            ),
            195 => 
            array (
                'id' => 1696,
                'name' => 'Kárász',
                'core_counties_id' => 2,
            ),
            196 => 
            array (
                'id' => 1697,
                'name' => 'Vékény',
                'core_counties_id' => 2,
            ),
            197 => 
            array (
                'id' => 1698,
                'name' => 'Köblény',
                'core_counties_id' => 2,
            ),
            198 => 
            array (
                'id' => 1699,
                'name' => 'Szalatnak',
                'core_counties_id' => 2,
            ),
            199 => 
            array (
                'id' => 1700,
                'name' => 'Csikóstőttős',
                'core_counties_id' => 16,
            ),
            200 => 
            array (
                'id' => 1701,
                'name' => 'Mágocs',
                'core_counties_id' => 2,
            ),
            201 => 
            array (
                'id' => 1702,
                'name' => 'Nagyhajmás',
                'core_counties_id' => 2,
            ),
            202 => 
            array (
                'id' => 1703,
                'name' => 'Mekényes',
                'core_counties_id' => 2,
            ),
            203 => 
            array (
                'id' => 1704,
                'name' => 'Alsómocsolád',
                'core_counties_id' => 2,
            ),
            204 => 
            array (
                'id' => 1705,
                'name' => 'Bikal',
                'core_counties_id' => 2,
            ),
            205 => 
            array (
                'id' => 1706,
                'name' => 'Egyházaskozár',
                'core_counties_id' => 2,
            ),
            206 => 
            array (
                'id' => 1707,
                'name' => 'Tófű',
                'core_counties_id' => 2,
            ),
            207 => 
            array (
                'id' => 1708,
                'name' => 'Hegyhátmaróc',
                'core_counties_id' => 2,
            ),
            208 => 
            array (
                'id' => 1709,
                'name' => 'Szászvár',
                'core_counties_id' => 2,
            ),
            209 => 
            array (
                'id' => 1710,
                'name' => 'Máza',
                'core_counties_id' => 2,
            ),
            210 => 
            array (
                'id' => 1711,
                'name' => 'Györe',
                'core_counties_id' => 16,
            ),
            211 => 
            array (
                'id' => 1712,
                'name' => 'Izmény',
                'core_counties_id' => 16,
            ),
            212 => 
            array (
                'id' => 1713,
                'name' => 'Váralja',
                'core_counties_id' => 16,
            ),
            213 => 
            array (
                'id' => 1714,
                'name' => 'Nagymányok',
                'core_counties_id' => 16,
            ),
            214 => 
            array (
                'id' => 1715,
                'name' => 'Kismányok',
                'core_counties_id' => 16,
            ),
            215 => 
            array (
                'id' => 1716,
                'name' => 'Jágónak',
                'core_counties_id' => 16,
            ),
            216 => 
            array (
                'id' => 1717,
                'name' => 'Kaposszekcső',
                'core_counties_id' => 16,
            ),
            217 => 
            array (
                'id' => 1718,
                'name' => 'Gerényes',
                'core_counties_id' => 2,
            ),
            218 => 
            array (
                'id' => 1719,
                'name' => 'Vásárosdombó',
                'core_counties_id' => 2,
            ),
            219 => 
            array (
                'id' => 1720,
                'name' => 'Tarrós',
                'core_counties_id' => 16,
            ),
            220 => 
            array (
                'id' => 1721,
                'name' => 'Jágónak',
                'core_counties_id' => 16,
            ),
            221 => 
            array (
                'id' => 1722,
                'name' => 'Felsőegerszeg',
                'core_counties_id' => 2,
            ),
            222 => 
            array (
                'id' => 1723,
                'name' => 'Oroszló',
                'core_counties_id' => 2,
            ),
            223 => 
            array (
                'id' => 1724,
                'name' => 'Palé',
                'core_counties_id' => 2,
            ),
            224 => 
            array (
                'id' => 1725,
                'name' => 'Sásd',
                'core_counties_id' => 2,
            ),
            225 => 
            array (
                'id' => 1726,
                'name' => 'Varga',
                'core_counties_id' => 2,
            ),
            226 => 
            array (
                'id' => 1727,
                'name' => 'Vázsnok',
                'core_counties_id' => 2,
            ),
            227 => 
            array (
                'id' => 1728,
                'name' => 'Meződ',
                'core_counties_id' => 2,
            ),
            228 => 
            array (
                'id' => 1729,
                'name' => 'Ág',
                'core_counties_id' => 2,
            ),
            229 => 
            array (
                'id' => 1730,
                'name' => 'Kisvaszar',
                'core_counties_id' => 2,
            ),
            230 => 
            array (
                'id' => 1731,
                'name' => 'Tékes',
                'core_counties_id' => 2,
            ),
            231 => 
            array (
                'id' => 1732,
                'name' => 'Baranyaszentgyörgy',
                'core_counties_id' => 2,
            ),
            232 => 
            array (
                'id' => 1733,
                'name' => 'Tormás',
                'core_counties_id' => 2,
            ),
            233 => 
            array (
                'id' => 1734,
                'name' => 'Szágy',
                'core_counties_id' => 2,
            ),
            234 => 
            array (
                'id' => 1735,
                'name' => 'Baranyajenő',
                'core_counties_id' => 2,
            ),
            235 => 
            array (
                'id' => 1736,
                'name' => 'Gödre',
                'core_counties_id' => 2,
            ),
            236 => 
            array (
                'id' => 1737,
                'name' => 'Kisbeszterce',
                'core_counties_id' => 2,
            ),
            237 => 
            array (
                'id' => 1738,
                'name' => 'Kishajmás',
                'core_counties_id' => 2,
            ),
            238 => 
            array (
                'id' => 1739,
                'name' => 'Mindszentgodisa',
                'core_counties_id' => 2,
            ),
            239 => 
            array (
                'id' => 1740,
                'name' => 'Bakóca',
                'core_counties_id' => 2,
            ),
            240 => 
            array (
                'id' => 1741,
                'name' => 'Magyarhertelend',
                'core_counties_id' => 2,
            ),
            241 => 
            array (
                'id' => 1742,
                'name' => 'Bodolyabér',
                'core_counties_id' => 2,
            ),
            242 => 
            array (
                'id' => 1743,
                'name' => 'Magyarszék',
                'core_counties_id' => 2,
            ),
            243 => 
            array (
                'id' => 1744,
                'name' => 'Kaposvár',
                'core_counties_id' => 14,
            ),
            244 => 
            array (
                'id' => 1745,
                'name' => 'Orci',
                'core_counties_id' => 14,
            ),
            245 => 
            array (
                'id' => 1746,
                'name' => 'Zselickislak',
                'core_counties_id' => 14,
            ),
            246 => 
            array (
                'id' => 1747,
                'name' => 'Juta',
                'core_counties_id' => 14,
            ),
            247 => 
            array (
                'id' => 1748,
                'name' => 'Csombárd',
                'core_counties_id' => 14,
            ),
            248 => 
            array (
                'id' => 1749,
                'name' => 'Hetes',
                'core_counties_id' => 14,
            ),
            249 => 
            array (
                'id' => 1750,
                'name' => 'Mezőcsokonya',
                'core_counties_id' => 14,
            ),
            250 => 
            array (
                'id' => 1751,
                'name' => 'Somogysárd',
                'core_counties_id' => 14,
            ),
            251 => 
            array (
                'id' => 1752,
                'name' => 'Újvárfalva',
                'core_counties_id' => 14,
            ),
            252 => 
            array (
                'id' => 1753,
                'name' => 'Bodrog',
                'core_counties_id' => 14,
            ),
            253 => 
            array (
                'id' => 1754,
                'name' => 'Magyaregres',
                'core_counties_id' => 14,
            ),
            254 => 
            array (
                'id' => 1755,
                'name' => 'Várda',
                'core_counties_id' => 14,
            ),
            255 => 
            array (
                'id' => 1756,
                'name' => 'Alsóbogát',
                'core_counties_id' => 14,
            ),
            256 => 
            array (
                'id' => 1757,
                'name' => 'Somogyjád',
                'core_counties_id' => 14,
            ),
            257 => 
            array (
                'id' => 1758,
                'name' => 'Edde',
                'core_counties_id' => 14,
            ),
            258 => 
            array (
                'id' => 1759,
                'name' => 'Osztopán',
                'core_counties_id' => 14,
            ),
            259 => 
            array (
                'id' => 1760,
                'name' => 'Somogyaszaló',
                'core_counties_id' => 14,
            ),
            260 => 
            array (
                'id' => 1761,
                'name' => 'Mernye',
                'core_counties_id' => 14,
            ),
            261 => 
            array (
                'id' => 1762,
                'name' => 'Somodor',
                'core_counties_id' => 14,
            ),
            262 => 
            array (
                'id' => 1763,
                'name' => 'Somogygeszti',
                'core_counties_id' => 14,
            ),
            263 => 
            array (
                'id' => 1764,
                'name' => 'Felsőmocsolád',
                'core_counties_id' => 14,
            ),
            264 => 
            array (
                'id' => 1765,
                'name' => 'Ecseny',
                'core_counties_id' => 14,
            ),
            265 => 
            array (
                'id' => 1766,
                'name' => 'Polány',
                'core_counties_id' => 14,
            ),
            266 => 
            array (
                'id' => 1767,
                'name' => 'Magyaratád',
                'core_counties_id' => 14,
            ),
            267 => 
            array (
                'id' => 1768,
                'name' => 'Patalom',
                'core_counties_id' => 14,
            ),
            268 => 
            array (
                'id' => 1769,
                'name' => 'Ráksi',
                'core_counties_id' => 14,
            ),
            269 => 
            array (
                'id' => 1770,
                'name' => 'Szentgáloskér',
                'core_counties_id' => 14,
            ),
            270 => 
            array (
                'id' => 1771,
                'name' => 'Zimány',
                'core_counties_id' => 14,
            ),
            271 => 
            array (
                'id' => 1772,
                'name' => 'Cserénfa',
                'core_counties_id' => 14,
            ),
            272 => 
            array (
                'id' => 1773,
                'name' => 'Szentbalázs',
                'core_counties_id' => 14,
            ),
            273 => 
            array (
                'id' => 1774,
                'name' => 'Gálosfa',
                'core_counties_id' => 14,
            ),
            274 => 
            array (
                'id' => 1775,
                'name' => 'Kaposgyarmat',
                'core_counties_id' => 14,
            ),
            275 => 
            array (
                'id' => 1776,
                'name' => 'Hajmás',
                'core_counties_id' => 14,
            ),
            276 => 
            array (
                'id' => 1777,
                'name' => 'Zselicszentpál',
                'core_counties_id' => 14,
            ),
            277 => 
            array (
                'id' => 1778,
                'name' => 'Simonfa',
                'core_counties_id' => 14,
            ),
            278 => 
            array (
                'id' => 1779,
                'name' => 'Bőszénfa',
                'core_counties_id' => 14,
            ),
            279 => 
            array (
                'id' => 1780,
                'name' => 'Kaposszerdahely',
                'core_counties_id' => 14,
            ),
            280 => 
            array (
                'id' => 1781,
                'name' => 'Patca',
                'core_counties_id' => 14,
            ),
            281 => 
            array (
                'id' => 1782,
                'name' => 'Szenna',
                'core_counties_id' => 14,
            ),
            282 => 
            array (
                'id' => 1783,
                'name' => 'Zselickisfalud',
                'core_counties_id' => 14,
            ),
            283 => 
            array (
                'id' => 1784,
                'name' => 'Szilvásszentmárton',
                'core_counties_id' => 14,
            ),
            284 => 
            array (
                'id' => 1785,
                'name' => 'Bárdudvarnok',
                'core_counties_id' => 14,
            ),
            285 => 
            array (
                'id' => 1786,
                'name' => 'Sántos',
                'core_counties_id' => 14,
            ),
            286 => 
            array (
                'id' => 1787,
                'name' => 'Nagyatád',
                'core_counties_id' => 14,
            ),
            287 => 
            array (
                'id' => 1788,
                'name' => 'Ötvöskónyi',
                'core_counties_id' => 14,
            ),
            288 => 
            array (
                'id' => 1789,
                'name' => 'Mike',
                'core_counties_id' => 14,
            ),
            289 => 
            array (
                'id' => 1790,
                'name' => 'Rinyaszentkirály',
                'core_counties_id' => 14,
            ),
            290 => 
            array (
                'id' => 1791,
                'name' => 'Tarany',
                'core_counties_id' => 14,
            ),
            291 => 
            array (
                'id' => 1792,
                'name' => 'Somogyudvarhely',
                'core_counties_id' => 14,
            ),
            292 => 
            array (
                'id' => 1793,
                'name' => 'Berzence',
                'core_counties_id' => 14,
            ),
            293 => 
            array (
                'id' => 1794,
                'name' => 'Bolhás',
                'core_counties_id' => 14,
            ),
            294 => 
            array (
                'id' => 1795,
                'name' => 'Kaposmérő',
                'core_counties_id' => 14,
            ),
            295 => 
            array (
                'id' => 1796,
                'name' => 'Kaposújlak',
                'core_counties_id' => 14,
            ),
            296 => 
            array (
                'id' => 1797,
                'name' => 'Kisasszond',
                'core_counties_id' => 14,
            ),
            297 => 
            array (
                'id' => 1798,
                'name' => 'Kaposfő',
                'core_counties_id' => 14,
            ),
            298 => 
            array (
                'id' => 1799,
                'name' => 'Kiskorpád',
                'core_counties_id' => 14,
            ),
            299 => 
            array (
                'id' => 1800,
                'name' => 'Jákó',
                'core_counties_id' => 14,
            ),
            300 => 
            array (
                'id' => 1801,
                'name' => 'Csököly',
                'core_counties_id' => 14,
            ),
            301 => 
            array (
                'id' => 1802,
                'name' => 'Rinyakovácsi',
                'core_counties_id' => 14,
            ),
            302 => 
            array (
                'id' => 1803,
                'name' => 'Gige',
                'core_counties_id' => 14,
            ),
            303 => 
            array (
                'id' => 1804,
                'name' => 'Kőkút',
                'core_counties_id' => 14,
            ),
            304 => 
            array (
                'id' => 1805,
                'name' => 'Kadarkút',
                'core_counties_id' => 14,
            ),
            305 => 
            array (
                'id' => 1806,
                'name' => 'Hencse',
                'core_counties_id' => 14,
            ),
            306 => 
            array (
                'id' => 1807,
                'name' => 'Visnye',
                'core_counties_id' => 14,
            ),
            307 => 
            array (
                'id' => 1808,
                'name' => 'Hedrehely',
                'core_counties_id' => 14,
            ),
            308 => 
            array (
                'id' => 1809,
                'name' => 'Lad',
                'core_counties_id' => 14,
            ),
            309 => 
            array (
                'id' => 1810,
                'name' => 'Patosfa',
                'core_counties_id' => 14,
            ),
            310 => 
            array (
                'id' => 1811,
                'name' => 'Homokszentgyörgy',
                'core_counties_id' => 14,
            ),
            311 => 
            array (
                'id' => 1812,
                'name' => 'Kálmáncsa',
                'core_counties_id' => 14,
            ),
            312 => 
            array (
                'id' => 1813,
                'name' => 'Szulok',
                'core_counties_id' => 14,
            ),
            313 => 
            array (
                'id' => 1814,
                'name' => 'Kutas',
                'core_counties_id' => 14,
            ),
            314 => 
            array (
                'id' => 1815,
                'name' => 'Kisbajom',
                'core_counties_id' => 14,
            ),
            315 => 
            array (
                'id' => 1816,
                'name' => 'Beleg',
                'core_counties_id' => 14,
            ),
            316 => 
            array (
                'id' => 1817,
                'name' => 'Szabás',
                'core_counties_id' => 14,
            ),
            317 => 
            array (
                'id' => 1818,
                'name' => 'Nagykorpád',
                'core_counties_id' => 14,
            ),
            318 => 
            array (
                'id' => 1819,
                'name' => 'Lábod',
                'core_counties_id' => 14,
            ),
            319 => 
            array (
                'id' => 1820,
                'name' => 'Rinyabesenyő',
                'core_counties_id' => 14,
            ),
            320 => 
            array (
                'id' => 1821,
                'name' => 'Görgeteg',
                'core_counties_id' => 14,
            ),
            321 => 
            array (
                'id' => 1822,
                'name' => 'Csokonyavisonta',
                'core_counties_id' => 14,
            ),
            322 => 
            array (
                'id' => 1823,
                'name' => 'Rinyaújlak',
                'core_counties_id' => 14,
            ),
            323 => 
            array (
                'id' => 1824,
                'name' => 'Nagybajom',
                'core_counties_id' => 14,
            ),
            324 => 
            array (
                'id' => 1825,
                'name' => 'Pálmajor',
                'core_counties_id' => 14,
            ),
            325 => 
            array (
                'id' => 1826,
                'name' => 'Segesd',
                'core_counties_id' => 14,
            ),
            326 => 
            array (
                'id' => 1827,
                'name' => 'Somogyszob',
                'core_counties_id' => 14,
            ),
            327 => 
            array (
                'id' => 1828,
                'name' => 'Kaszó',
                'core_counties_id' => 14,
            ),
            328 => 
            array (
                'id' => 1829,
                'name' => 'Barcs',
                'core_counties_id' => 14,
            ),
            329 => 
            array (
                'id' => 1830,
                'name' => 'Komlósd',
                'core_counties_id' => 14,
            ),
            330 => 
            array (
                'id' => 1831,
                'name' => 'Péterhida',
                'core_counties_id' => 14,
            ),
            331 => 
            array (
                'id' => 1832,
                'name' => 'Babócsa',
                'core_counties_id' => 14,
            ),
            332 => 
            array (
                'id' => 1833,
                'name' => 'Rinyaújnép',
                'core_counties_id' => 14,
            ),
            333 => 
            array (
                'id' => 1834,
                'name' => 'Somogyaracs',
                'core_counties_id' => 14,
            ),
            334 => 
            array (
                'id' => 1835,
                'name' => 'Háromfa',
                'core_counties_id' => 14,
            ),
            335 => 
            array (
                'id' => 1836,
                'name' => 'Bakháza',
                'core_counties_id' => 14,
            ),
            336 => 
            array (
                'id' => 1837,
                'name' => 'Bolhó',
                'core_counties_id' => 14,
            ),
            337 => 
            array (
                'id' => 1838,
                'name' => 'Heresznye',
                'core_counties_id' => 14,
            ),
            338 => 
            array (
                'id' => 1839,
                'name' => 'Vízvár',
                'core_counties_id' => 14,
            ),
            339 => 
            array (
                'id' => 1840,
                'name' => 'Bélavár',
                'core_counties_id' => 14,
            ),
            340 => 
            array (
                'id' => 1841,
                'name' => 'Pécs',
                'core_counties_id' => 2,
            ),
            341 => 
            array (
                'id' => 1842,
                'name' => 'Erzsébet',
                'core_counties_id' => 2,
            ),
            342 => 
            array (
                'id' => 1843,
                'name' => 'Kékesd',
                'core_counties_id' => 2,
            ),
            343 => 
            array (
                'id' => 1844,
                'name' => 'Kátoly',
                'core_counties_id' => 2,
            ),
            344 => 
            array (
                'id' => 1845,
                'name' => 'Szellő',
                'core_counties_id' => 2,
            ),
            345 => 
            array (
                'id' => 1846,
                'name' => 'Máriakéménd',
                'core_counties_id' => 2,
            ),
            346 => 
            array (
                'id' => 1847,
                'name' => 'Berkesd',
                'core_counties_id' => 2,
            ),
            347 => 
            array (
                'id' => 1848,
                'name' => 'Szilágy',
                'core_counties_id' => 2,
            ),
            348 => 
            array (
                'id' => 1849,
                'name' => 'Pereked',
                'core_counties_id' => 2,
            ),
            349 => 
            array (
                'id' => 1850,
                'name' => 'Pogány',
                'core_counties_id' => 2,
            ),
            350 => 
            array (
                'id' => 1851,
                'name' => 'Gyód',
                'core_counties_id' => 2,
            ),
            351 => 
            array (
                'id' => 1852,
                'name' => 'Keszü',
                'core_counties_id' => 2,
            ),
            352 => 
            array (
                'id' => 1853,
                'name' => 'Kökény',
                'core_counties_id' => 2,
            ),
            353 => 
            array (
                'id' => 1854,
                'name' => 'Bicsérd',
                'core_counties_id' => 2,
            ),
            354 => 
            array (
                'id' => 1855,
                'name' => 'Zók',
                'core_counties_id' => 2,
            ),
            355 => 
            array (
                'id' => 1856,
                'name' => 'Aranyosgadány',
                'core_counties_id' => 2,
            ),
            356 => 
            array (
                'id' => 1857,
                'name' => 'Boda',
                'core_counties_id' => 2,
            ),
            357 => 
            array (
                'id' => 1858,
                'name' => 'Kővágószőlős',
                'core_counties_id' => 2,
            ),
            358 => 
            array (
                'id' => 1859,
                'name' => 'Cserkút',
                'core_counties_id' => 2,
            ),
            359 => 
            array (
                'id' => 1860,
                'name' => 'Kővágótöttös',
                'core_counties_id' => 2,
            ),
            360 => 
            array (
                'id' => 1861,
                'name' => 'Bakonya',
                'core_counties_id' => 2,
            ),
            361 => 
            array (
                'id' => 1862,
                'name' => 'Orfű',
                'core_counties_id' => 2,
            ),
            362 => 
            array (
                'id' => 1863,
                'name' => 'Abaliget',
                'core_counties_id' => 2,
            ),
            363 => 
            array (
                'id' => 1864,
                'name' => 'Kovácsszénája',
                'core_counties_id' => 2,
            ),
            364 => 
            array (
                'id' => 1865,
                'name' => 'Husztót',
                'core_counties_id' => 2,
            ),
            365 => 
            array (
                'id' => 1866,
                'name' => 'Okorvölgy',
                'core_counties_id' => 2,
            ),
            366 => 
            array (
                'id' => 1867,
                'name' => 'Hetvehely',
                'core_counties_id' => 2,
            ),
            367 => 
            array (
                'id' => 1868,
                'name' => 'Szentkatalin',
                'core_counties_id' => 2,
            ),
            368 => 
            array (
                'id' => 1869,
                'name' => 'Bükkösd',
                'core_counties_id' => 2,
            ),
            369 => 
            array (
                'id' => 1870,
                'name' => 'Helesfa',
                'core_counties_id' => 2,
            ),
            370 => 
            array (
                'id' => 1871,
                'name' => 'Dinnyeberki',
                'core_counties_id' => 2,
            ),
            371 => 
            array (
                'id' => 1872,
                'name' => 'Cserdi',
                'core_counties_id' => 2,
            ),
            372 => 
            array (
                'id' => 1873,
                'name' => 'Hosszúhetény',
                'core_counties_id' => 2,
            ),
            373 => 
            array (
                'id' => 1874,
                'name' => 'Ófalu',
                'core_counties_id' => 2,
            ),
            374 => 
            array (
                'id' => 1875,
                'name' => 'Mecseknádasd',
                'core_counties_id' => 2,
            ),
            375 => 
            array (
                'id' => 1876,
                'name' => 'Óbánya',
                'core_counties_id' => 2,
            ),
            376 => 
            array (
                'id' => 1877,
                'name' => 'Hidas',
                'core_counties_id' => 2,
            ),
            377 => 
            array (
                'id' => 1878,
                'name' => 'Mohács',
                'core_counties_id' => 2,
            ),
            378 => 
            array (
                'id' => 1879,
                'name' => 'Bár',
                'core_counties_id' => 2,
            ),
            379 => 
            array (
                'id' => 1880,
                'name' => 'Dunaszekcső',
                'core_counties_id' => 2,
            ),
            380 => 
            array (
                'id' => 1881,
                'name' => 'Homorúd',
                'core_counties_id' => 2,
            ),
            381 => 
            array (
                'id' => 1882,
                'name' => 'Kölked',
                'core_counties_id' => 2,
            ),
            382 => 
            array (
                'id' => 1883,
                'name' => 'Udvar',
                'core_counties_id' => 2,
            ),
            383 => 
            array (
                'id' => 1884,
                'name' => 'Apátvarasd',
                'core_counties_id' => 2,
            ),
            384 => 
            array (
                'id' => 1885,
                'name' => 'Martonfa',
                'core_counties_id' => 2,
            ),
            385 => 
            array (
                'id' => 1886,
                'name' => 'Lovászhetény',
                'core_counties_id' => 2,
            ),
            386 => 
            array (
                'id' => 1887,
                'name' => 'Zengővárkony',
                'core_counties_id' => 2,
            ),
            387 => 
            array (
                'id' => 1888,
                'name' => 'Pécsvárad',
                'core_counties_id' => 2,
            ),
            388 => 
            array (
                'id' => 1889,
                'name' => 'Erdősmecske',
                'core_counties_id' => 2,
            ),
            389 => 
            array (
                'id' => 1890,
                'name' => 'Feked',
                'core_counties_id' => 2,
            ),
            390 => 
            array (
                'id' => 1891,
                'name' => 'Szebény',
                'core_counties_id' => 2,
            ),
            391 => 
            array (
                'id' => 1892,
                'name' => 'Véménd',
                'core_counties_id' => 2,
            ),
            392 => 
            array (
                'id' => 1893,
                'name' => 'Palotabozsok',
                'core_counties_id' => 2,
            ),
            393 => 
            array (
                'id' => 1894,
                'name' => 'Görcsönydoboka',
                'core_counties_id' => 2,
            ),
            394 => 
            array (
                'id' => 1895,
                'name' => 'Somberek',
                'core_counties_id' => 2,
            ),
            395 => 
            array (
                'id' => 1896,
                'name' => 'Nagypall',
                'core_counties_id' => 2,
            ),
            396 => 
            array (
                'id' => 1897,
                'name' => 'Fazekasboda',
                'core_counties_id' => 2,
            ),
            397 => 
            array (
                'id' => 1898,
                'name' => 'Maráza',
                'core_counties_id' => 2,
            ),
            398 => 
            array (
                'id' => 1899,
                'name' => 'Geresdlak',
                'core_counties_id' => 2,
            ),
            399 => 
            array (
                'id' => 1900,
                'name' => 'Szűr',
                'core_counties_id' => 2,
            ),
            400 => 
            array (
                'id' => 1901,
                'name' => 'Erdősmárok',
                'core_counties_id' => 2,
            ),
            401 => 
            array (
                'id' => 1902,
                'name' => 'Himesháza',
                'core_counties_id' => 2,
            ),
            402 => 
            array (
                'id' => 1903,
                'name' => 'Székelyszabar',
                'core_counties_id' => 2,
            ),
            403 => 
            array (
                'id' => 1904,
                'name' => 'Bogád',
                'core_counties_id' => 2,
            ),
            404 => 
            array (
                'id' => 1905,
                'name' => 'Nagykozár',
                'core_counties_id' => 2,
            ),
            405 => 
            array (
                'id' => 1906,
                'name' => 'Romonya',
                'core_counties_id' => 2,
            ),
            406 => 
            array (
                'id' => 1907,
                'name' => 'Ellend',
                'core_counties_id' => 2,
            ),
            407 => 
            array (
                'id' => 1908,
                'name' => 'Olasz',
                'core_counties_id' => 2,
            ),
            408 => 
            array (
                'id' => 1909,
                'name' => 'Hásságy',
                'core_counties_id' => 2,
            ),
            409 => 
            array (
                'id' => 1910,
                'name' => 'Belvárdgyula',
                'core_counties_id' => 2,
            ),
            410 => 
            array (
                'id' => 1911,
                'name' => 'Birján',
                'core_counties_id' => 2,
            ),
            411 => 
            array (
                'id' => 1912,
                'name' => 'Szederkény',
                'core_counties_id' => 2,
            ),
            412 => 
            array (
                'id' => 1913,
                'name' => 'Monyoród',
                'core_counties_id' => 2,
            ),
            413 => 
            array (
                'id' => 1914,
                'name' => 'Versend',
                'core_counties_id' => 2,
            ),
            414 => 
            array (
                'id' => 1915,
                'name' => 'Szajk',
                'core_counties_id' => 2,
            ),
            415 => 
            array (
                'id' => 1916,
                'name' => 'Bóly',
                'core_counties_id' => 2,
            ),
            416 => 
            array (
                'id' => 1917,
                'name' => 'Töttös',
                'core_counties_id' => 2,
            ),
            417 => 
            array (
                'id' => 1918,
                'name' => 'Borjád',
                'core_counties_id' => 2,
            ),
            418 => 
            array (
                'id' => 1919,
                'name' => 'Pócsa',
                'core_counties_id' => 2,
            ),
            419 => 
            array (
                'id' => 1920,
                'name' => 'Kisbudmér',
                'core_counties_id' => 2,
            ),
            420 => 
            array (
                'id' => 1921,
                'name' => 'Nagybudmér',
                'core_counties_id' => 2,
            ),
            421 => 
            array (
                'id' => 1922,
                'name' => 'Babarc',
                'core_counties_id' => 2,
            ),
            422 => 
            array (
                'id' => 1923,
                'name' => 'Liptód',
                'core_counties_id' => 2,
            ),
            423 => 
            array (
                'id' => 1924,
                'name' => 'Lánycsók',
                'core_counties_id' => 2,
            ),
            424 => 
            array (
                'id' => 1925,
                'name' => 'Kisnyárád',
                'core_counties_id' => 2,
            ),
            425 => 
            array (
                'id' => 1926,
                'name' => 'Lothárd',
                'core_counties_id' => 2,
            ),
            426 => 
            array (
                'id' => 1927,
                'name' => 'Kozármisleny',
                'core_counties_id' => 2,
            ),
            427 => 
            array (
                'id' => 1928,
                'name' => 'Magyarsarlós',
                'core_counties_id' => 2,
            ),
            428 => 
            array (
                'id' => 1929,
                'name' => 'Pécsudvard',
                'core_counties_id' => 2,
            ),
            429 => 
            array (
                'id' => 1930,
                'name' => 'Áta',
                'core_counties_id' => 2,
            ),
            430 => 
            array (
                'id' => 1931,
                'name' => 'Szemely',
                'core_counties_id' => 2,
            ),
            431 => 
            array (
                'id' => 1932,
                'name' => 'Egerág',
                'core_counties_id' => 2,
            ),
            432 => 
            array (
                'id' => 1933,
                'name' => 'Szőkéd',
                'core_counties_id' => 2,
            ),
            433 => 
            array (
                'id' => 1934,
                'name' => 'Kisherend',
                'core_counties_id' => 2,
            ),
            434 => 
            array (
                'id' => 1935,
                'name' => 'Pécsdevecser',
                'core_counties_id' => 2,
            ),
            435 => 
            array (
                'id' => 1936,
                'name' => 'Újpetre',
                'core_counties_id' => 2,
            ),
            436 => 
            array (
                'id' => 1937,
                'name' => 'Peterd',
                'core_counties_id' => 2,
            ),
            437 => 
            array (
                'id' => 1938,
                'name' => 'Kiskassa',
                'core_counties_id' => 2,
            ),
            438 => 
            array (
                'id' => 1939,
                'name' => 'Kistótfalu',
                'core_counties_id' => 2,
            ),
            439 => 
            array (
                'id' => 1940,
                'name' => 'Vokány',
                'core_counties_id' => 2,
            ),
            440 => 
            array (
                'id' => 1941,
                'name' => 'Palkonya',
                'core_counties_id' => 2,
            ),
            441 => 
            array (
                'id' => 1942,
                'name' => 'Ivánbattyán',
                'core_counties_id' => 2,
            ),
            442 => 
            array (
                'id' => 1943,
                'name' => 'Villánykövesd',
                'core_counties_id' => 2,
            ),
            443 => 
            array (
                'id' => 1944,
                'name' => 'Villány',
                'core_counties_id' => 2,
            ),
            444 => 
            array (
                'id' => 1945,
                'name' => 'Kisjakabfalva',
                'core_counties_id' => 2,
            ),
            445 => 
            array (
                'id' => 1946,
                'name' => 'Márok',
                'core_counties_id' => 2,
            ),
            446 => 
            array (
                'id' => 1947,
                'name' => 'Illocska',
                'core_counties_id' => 2,
            ),
            447 => 
            array (
                'id' => 1948,
                'name' => 'Magyarbóly',
                'core_counties_id' => 2,
            ),
            448 => 
            array (
                'id' => 1949,
                'name' => 'Kislippó',
                'core_counties_id' => 2,
            ),
            449 => 
            array (
                'id' => 1950,
                'name' => 'Lapáncsa',
                'core_counties_id' => 2,
            ),
            450 => 
            array (
                'id' => 1951,
                'name' => 'Ivándárda',
                'core_counties_id' => 2,
            ),
            451 => 
            array (
                'id' => 1952,
                'name' => 'Lippó',
                'core_counties_id' => 2,
            ),
            452 => 
            array (
                'id' => 1953,
                'name' => 'Sárok',
                'core_counties_id' => 2,
            ),
            453 => 
            array (
                'id' => 1954,
                'name' => 'Bezedek',
                'core_counties_id' => 2,
            ),
            454 => 
            array (
                'id' => 1955,
                'name' => 'Majs',
                'core_counties_id' => 2,
            ),
            455 => 
            array (
                'id' => 1956,
                'name' => 'Nagynyárád',
                'core_counties_id' => 2,
            ),
            456 => 
            array (
                'id' => 1957,
                'name' => 'Sátorhely',
                'core_counties_id' => 2,
            ),
            457 => 
            array (
                'id' => 1958,
                'name' => 'Kisharsány',
                'core_counties_id' => 2,
            ),
            458 => 
            array (
                'id' => 1959,
                'name' => 'Siklós',
                'core_counties_id' => 2,
            ),
            459 => 
            array (
                'id' => 1960,
                'name' => 'Nagytótfalu',
                'core_counties_id' => 2,
            ),
            460 => 
            array (
                'id' => 1961,
                'name' => 'Bisse',
                'core_counties_id' => 2,
            ),
            461 => 
            array (
                'id' => 1962,
                'name' => 'Szalánta',
                'core_counties_id' => 2,
            ),
            462 => 
            array (
                'id' => 1963,
                'name' => 'Bosta',
                'core_counties_id' => 2,
            ),
            463 => 
            array (
                'id' => 1964,
                'name' => 'Szilvás',
                'core_counties_id' => 2,
            ),
            464 => 
            array (
                'id' => 1965,
                'name' => 'Csarnóta',
                'core_counties_id' => 2,
            ),
            465 => 
            array (
                'id' => 1966,
                'name' => 'Túrony',
                'core_counties_id' => 2,
            ),
            466 => 
            array (
                'id' => 1967,
                'name' => 'Garé',
                'core_counties_id' => 2,
            ),
            467 => 
            array (
                'id' => 1968,
                'name' => 'Szava',
                'core_counties_id' => 2,
            ),
            468 => 
            array (
                'id' => 1969,
                'name' => 'Babarcszőlős',
                'core_counties_id' => 2,
            ),
            469 => 
            array (
                'id' => 1970,
                'name' => 'Ócsárd',
                'core_counties_id' => 2,
            ),
            470 => 
            array (
                'id' => 1971,
                'name' => 'Kisdér',
                'core_counties_id' => 2,
            ),
            471 => 
            array (
                'id' => 1972,
                'name' => 'Siklósbodony',
                'core_counties_id' => 2,
            ),
            472 => 
            array (
                'id' => 1973,
                'name' => 'Harkány',
                'core_counties_id' => 2,
            ),
            473 => 
            array (
                'id' => 1974,
                'name' => 'Rádfalva',
                'core_counties_id' => 2,
            ),
            474 => 
            array (
                'id' => 1975,
                'name' => 'Diósviszló',
                'core_counties_id' => 2,
            ),
            475 => 
            array (
                'id' => 1976,
                'name' => 'Márfa',
                'core_counties_id' => 2,
            ),
            476 => 
            array (
                'id' => 1977,
                'name' => 'Nagyharsány',
                'core_counties_id' => 2,
            ),
            477 => 
            array (
                'id' => 1978,
                'name' => 'Kistapolca',
                'core_counties_id' => 2,
            ),
            478 => 
            array (
                'id' => 1979,
                'name' => 'Siklósnagyfalu',
                'core_counties_id' => 2,
            ),
            479 => 
            array (
                'id' => 1980,
                'name' => 'Egyházasharaszti',
                'core_counties_id' => 2,
            ),
            480 => 
            array (
                'id' => 1981,
                'name' => 'Old',
                'core_counties_id' => 2,
            ),
            481 => 
            array (
                'id' => 1982,
                'name' => 'Alsószentmárton',
                'core_counties_id' => 2,
            ),
            482 => 
            array (
                'id' => 1983,
                'name' => 'Kásád',
                'core_counties_id' => 2,
            ),
            483 => 
            array (
                'id' => 1984,
                'name' => 'Beremend',
                'core_counties_id' => 2,
            ),
            484 => 
            array (
                'id' => 1985,
                'name' => 'Pellérd',
                'core_counties_id' => 2,
            ),
            485 => 
            array (
                'id' => 1986,
                'name' => 'Görcsöny',
                'core_counties_id' => 2,
            ),
            486 => 
            array (
                'id' => 1987,
                'name' => 'Szőke',
                'core_counties_id' => 2,
            ),
            487 => 
            array (
                'id' => 1988,
                'name' => 'Regenye',
                'core_counties_id' => 2,
            ),
            488 => 
            array (
                'id' => 1989,
                'name' => 'Baksa',
                'core_counties_id' => 2,
            ),
            489 => 
            array (
                'id' => 1990,
                'name' => 'Tengeri',
                'core_counties_id' => 2,
            ),
            490 => 
            array (
                'id' => 1991,
                'name' => 'Téseny',
                'core_counties_id' => 2,
            ),
            491 => 
            array (
                'id' => 1992,
                'name' => 'Bogádmindszent',
                'core_counties_id' => 2,
            ),
            492 => 
            array (
                'id' => 1993,
                'name' => 'Ózdfalu',
                'core_counties_id' => 2,
            ),
            493 => 
            array (
                'id' => 1994,
                'name' => 'Hegyszentmárton',
                'core_counties_id' => 2,
            ),
            494 => 
            array (
                'id' => 1995,
                'name' => 'Nagycsány',
                'core_counties_id' => 2,
            ),
            495 => 
            array (
                'id' => 1996,
                'name' => 'Hirics',
                'core_counties_id' => 2,
            ),
            496 => 
            array (
                'id' => 1997,
                'name' => 'Piskó',
                'core_counties_id' => 2,
            ),
            497 => 
            array (
                'id' => 1998,
                'name' => 'Besence',
                'core_counties_id' => 2,
            ),
            498 => 
            array (
                'id' => 1999,
                'name' => 'Vajszló',
                'core_counties_id' => 2,
            ),
            499 => 
            array (
                'id' => 2000,
                'name' => 'Lúzsok',
                'core_counties_id' => 2,
            ),
        ));
        \DB::table('core_cities')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'name' => 'Páprád',
                'core_counties_id' => 2,
            ),
            1 => 
            array (
                'id' => 2002,
                'name' => 'Vejti',
                'core_counties_id' => 2,
            ),
            2 => 
            array (
                'id' => 2003,
                'name' => 'Kemse',
                'core_counties_id' => 2,
            ),
            3 => 
            array (
                'id' => 2004,
                'name' => 'Zaláta',
                'core_counties_id' => 2,
            ),
            4 => 
            array (
                'id' => 2005,
                'name' => 'Baranyahídvég',
                'core_counties_id' => 2,
            ),
            5 => 
            array (
                'id' => 2006,
                'name' => 'Sámod',
                'core_counties_id' => 2,
            ),
            6 => 
            array (
                'id' => 2007,
                'name' => 'Adorjás',
                'core_counties_id' => 2,
            ),
            7 => 
            array (
                'id' => 2008,
                'name' => 'Kisszentmárton',
                'core_counties_id' => 2,
            ),
            8 => 
            array (
                'id' => 2009,
                'name' => 'Kórós',
                'core_counties_id' => 2,
            ),
            9 => 
            array (
                'id' => 2010,
                'name' => 'Cún',
                'core_counties_id' => 2,
            ),
            10 => 
            array (
                'id' => 2011,
                'name' => 'Kémes',
                'core_counties_id' => 2,
            ),
            11 => 
            array (
                'id' => 2012,
                'name' => 'Drávapiski',
                'core_counties_id' => 2,
            ),
            12 => 
            array (
                'id' => 2013,
                'name' => 'Tésenfa',
                'core_counties_id' => 2,
            ),
            13 => 
            array (
                'id' => 2014,
                'name' => 'Szaporca',
                'core_counties_id' => 2,
            ),
            14 => 
            array (
                'id' => 2015,
                'name' => 'Drávacsepely',
                'core_counties_id' => 2,
            ),
            15 => 
            array (
                'id' => 2016,
                'name' => 'Kovácshida',
                'core_counties_id' => 2,
            ),
            16 => 
            array (
                'id' => 2017,
                'name' => 'Drávaszerdahely',
                'core_counties_id' => 2,
            ),
            17 => 
            array (
                'id' => 2018,
                'name' => 'Ipacsfa',
                'core_counties_id' => 2,
            ),
            18 => 
            array (
                'id' => 2019,
                'name' => 'Drávacsehi',
                'core_counties_id' => 2,
            ),
            19 => 
            array (
                'id' => 2020,
                'name' => 'Drávapalkonya',
                'core_counties_id' => 2,
            ),
            20 => 
            array (
                'id' => 2021,
                'name' => 'Drávacsehi',
                'core_counties_id' => 2,
            ),
            21 => 
            array (
                'id' => 2022,
                'name' => 'Drávaszabolcs',
                'core_counties_id' => 2,
            ),
            22 => 
            array (
                'id' => 2023,
                'name' => 'Gordisa',
                'core_counties_id' => 2,
            ),
            23 => 
            array (
                'id' => 2024,
                'name' => 'Matty',
                'core_counties_id' => 2,
            ),
            24 => 
            array (
                'id' => 2025,
                'name' => 'Botykapeterd',
                'core_counties_id' => 2,
            ),
            25 => 
            array (
                'id' => 2026,
                'name' => 'Szigetvár',
                'core_counties_id' => 2,
            ),
            26 => 
            array (
                'id' => 2027,
                'name' => 'Csertő',
                'core_counties_id' => 2,
            ),
            27 => 
            array (
                'id' => 2028,
                'name' => 'Nyugotszenterzsébet',
                'core_counties_id' => 2,
            ),
            28 => 
            array (
                'id' => 2029,
                'name' => 'Nagyváty',
                'core_counties_id' => 2,
            ),
            29 => 
            array (
                'id' => 2030,
                'name' => 'Nagypeterd',
                'core_counties_id' => 2,
            ),
            30 => 
            array (
                'id' => 2031,
                'name' => 'Szentdénes',
                'core_counties_id' => 2,
            ),
            31 => 
            array (
                'id' => 2032,
                'name' => 'Katádfa',
                'core_counties_id' => 2,
            ),
            32 => 
            array (
                'id' => 2033,
                'name' => 'Rózsafa',
                'core_counties_id' => 2,
            ),
            33 => 
            array (
                'id' => 2034,
                'name' => 'Bánfa',
                'core_counties_id' => 2,
            ),
            34 => 
            array (
                'id' => 2035,
                'name' => 'Szentegát',
                'core_counties_id' => 2,
            ),
            35 => 
            array (
                'id' => 2036,
                'name' => 'Dencsháza',
                'core_counties_id' => 2,
            ),
            36 => 
            array (
                'id' => 2037,
                'name' => 'Tótújfalu',
                'core_counties_id' => 14,
            ),
            37 => 
            array (
                'id' => 2038,
                'name' => 'Szentborbás',
                'core_counties_id' => 14,
            ),
            38 => 
            array (
                'id' => 2039,
                'name' => 'Lakócsa',
                'core_counties_id' => 14,
            ),
            39 => 
            array (
                'id' => 2040,
                'name' => 'Somogyhatvan',
                'core_counties_id' => 2,
            ),
            40 => 
            array (
                'id' => 2041,
                'name' => 'Basal',
                'core_counties_id' => 2,
            ),
            41 => 
            array (
                'id' => 2042,
                'name' => 'Somogyapáti',
                'core_counties_id' => 2,
            ),
            42 => 
            array (
                'id' => 2043,
                'name' => 'Somogyviszló',
                'core_counties_id' => 2,
            ),
            43 => 
            array (
                'id' => 2044,
                'name' => 'Patapoklosi',
                'core_counties_id' => 2,
            ),
            44 => 
            array (
                'id' => 2045,
                'name' => 'Basal',
                'core_counties_id' => 2,
            ),
            45 => 
            array (
                'id' => 2046,
                'name' => 'Magyarlukafa',
                'core_counties_id' => 2,
            ),
            46 => 
            array (
                'id' => 2047,
                'name' => 'Somogyhárságy',
                'core_counties_id' => 2,
            ),
            47 => 
            array (
                'id' => 2048,
                'name' => 'Vásárosbéc',
                'core_counties_id' => 2,
            ),
            48 => 
            array (
                'id' => 2049,
                'name' => 'Almáskeresztúr',
                'core_counties_id' => 2,
            ),
            49 => 
            array (
                'id' => 2050,
                'name' => 'Szulimán',
                'core_counties_id' => 2,
            ),
            50 => 
            array (
                'id' => 2051,
                'name' => 'Mozsgó',
                'core_counties_id' => 2,
            ),
            51 => 
            array (
                'id' => 2052,
                'name' => 'Almamellék',
                'core_counties_id' => 2,
            ),
            52 => 
            array (
                'id' => 2053,
                'name' => 'Horváthertelend',
                'core_counties_id' => 2,
            ),
            53 => 
            array (
                'id' => 2054,
                'name' => 'Csebény',
                'core_counties_id' => 2,
            ),
            54 => 
            array (
                'id' => 2055,
                'name' => 'Ibafa',
                'core_counties_id' => 2,
            ),
            55 => 
            array (
                'id' => 2056,
                'name' => 'Szentlászló',
                'core_counties_id' => 2,
            ),
            56 => 
            array (
                'id' => 2057,
                'name' => 'Boldogasszonyfa',
                'core_counties_id' => 2,
            ),
            57 => 
            array (
                'id' => 2058,
                'name' => 'Szentlőrinc',
                'core_counties_id' => 2,
            ),
            58 => 
            array (
                'id' => 2059,
                'name' => 'Csonkamindszent',
                'core_counties_id' => 2,
            ),
            59 => 
            array (
                'id' => 2060,
                'name' => 'Kacsóta',
                'core_counties_id' => 2,
            ),
            60 => 
            array (
                'id' => 2061,
                'name' => 'Gerde',
                'core_counties_id' => 2,
            ),
            61 => 
            array (
                'id' => 2062,
                'name' => 'Pécsbagota',
                'core_counties_id' => 2,
            ),
            62 => 
            array (
                'id' => 2063,
                'name' => 'Szabadszentkirály',
                'core_counties_id' => 2,
            ),
            63 => 
            array (
                'id' => 2064,
                'name' => 'Velény',
                'core_counties_id' => 2,
            ),
            64 => 
            array (
                'id' => 2065,
                'name' => 'Királyegyháza',
                'core_counties_id' => 2,
            ),
            65 => 
            array (
                'id' => 2066,
                'name' => 'Gilvánfa',
                'core_counties_id' => 2,
            ),
            66 => 
            array (
                'id' => 2067,
                'name' => 'Magyartelek',
                'core_counties_id' => 2,
            ),
            67 => 
            array (
                'id' => 2068,
                'name' => 'Gyöngyfa',
                'core_counties_id' => 2,
            ),
            68 => 
            array (
                'id' => 2069,
                'name' => 'Kisasszonyfa',
                'core_counties_id' => 2,
            ),
            69 => 
            array (
                'id' => 2070,
                'name' => 'Magyarmecske',
                'core_counties_id' => 2,
            ),
            70 => 
            array (
                'id' => 2071,
                'name' => 'Okorág',
                'core_counties_id' => 2,
            ),
            71 => 
            array (
                'id' => 2072,
                'name' => 'Kákics',
                'core_counties_id' => 2,
            ),
            72 => 
            array (
                'id' => 2073,
                'name' => 'Marócsa',
                'core_counties_id' => 2,
            ),
            73 => 
            array (
                'id' => 2074,
                'name' => 'Drávaiványi',
                'core_counties_id' => 2,
            ),
            74 => 
            array (
                'id' => 2075,
                'name' => 'Sellye',
                'core_counties_id' => 2,
            ),
            75 => 
            array (
                'id' => 2076,
                'name' => 'Drávasztára',
                'core_counties_id' => 2,
            ),
            76 => 
            array (
                'id' => 2077,
                'name' => 'Sósvertike',
                'core_counties_id' => 2,
            ),
            77 => 
            array (
                'id' => 2078,
                'name' => 'Sumony',
                'core_counties_id' => 2,
            ),
            78 => 
            array (
                'id' => 2079,
                'name' => 'Csányoszró',
                'core_counties_id' => 2,
            ),
            79 => 
            array (
                'id' => 2080,
                'name' => 'Bogdása',
                'core_counties_id' => 2,
            ),
            80 => 
            array (
                'id' => 2081,
                'name' => 'Markóc',
                'core_counties_id' => 2,
            ),
            81 => 
            array (
                'id' => 2082,
                'name' => 'Drávafok',
                'core_counties_id' => 2,
            ),
            82 => 
            array (
                'id' => 2083,
                'name' => 'Drávakeresztúr',
                'core_counties_id' => 2,
            ),
            83 => 
            array (
                'id' => 2084,
                'name' => 'Felsőszentmárton',
                'core_counties_id' => 2,
            ),
            84 => 
            array (
                'id' => 2085,
                'name' => 'Hobol',
                'core_counties_id' => 2,
            ),
            85 => 
            array (
                'id' => 2086,
                'name' => 'Gyöngyösmellék',
                'core_counties_id' => 2,
            ),
            86 => 
            array (
                'id' => 2087,
                'name' => 'Pettend',
                'core_counties_id' => 2,
            ),
            87 => 
            array (
                'id' => 2088,
                'name' => 'Bürüs',
                'core_counties_id' => 2,
            ),
            88 => 
            array (
                'id' => 2089,
                'name' => 'Teklafalu',
                'core_counties_id' => 2,
            ),
            89 => 
            array (
                'id' => 2090,
                'name' => 'Endrőc',
                'core_counties_id' => 2,
            ),
            90 => 
            array (
                'id' => 2091,
                'name' => 'Várad',
                'core_counties_id' => 2,
            ),
            91 => 
            array (
                'id' => 2092,
                'name' => 'Kétújfalu',
                'core_counties_id' => 2,
            ),
            92 => 
            array (
                'id' => 2093,
                'name' => 'Zádor',
                'core_counties_id' => 2,
            ),
            93 => 
            array (
                'id' => 2094,
                'name' => 'Szörény',
                'core_counties_id' => 2,
            ),
            94 => 
            array (
                'id' => 2095,
                'name' => 'Drávagárdony',
                'core_counties_id' => 14,
            ),
            95 => 
            array (
                'id' => 2096,
                'name' => 'Potony',
                'core_counties_id' => 14,
            ),
            96 => 
            array (
                'id' => 2097,
                'name' => 'Kastélyosdombó',
                'core_counties_id' => 14,
            ),
            97 => 
            array (
                'id' => 2098,
                'name' => 'Drávatamási',
                'core_counties_id' => 14,
            ),
            98 => 
            array (
                'id' => 2099,
                'name' => 'Pettend',
                'core_counties_id' => 2,
            ),
            99 => 
            array (
                'id' => 2100,
                'name' => 'Kistamási',
                'core_counties_id' => 2,
            ),
            100 => 
            array (
                'id' => 2101,
                'name' => 'Merenye',
                'core_counties_id' => 2,
            ),
            101 => 
            array (
                'id' => 2102,
                'name' => 'Tótszentgyörgy',
                'core_counties_id' => 2,
            ),
            102 => 
            array (
                'id' => 2103,
                'name' => 'Molvány',
                'core_counties_id' => 2,
            ),
            103 => 
            array (
                'id' => 2104,
                'name' => 'Nemeske',
                'core_counties_id' => 2,
            ),
            104 => 
            array (
                'id' => 2105,
                'name' => 'Kisdobsza',
                'core_counties_id' => 2,
            ),
            105 => 
            array (
                'id' => 2106,
                'name' => 'Nagydobsza',
                'core_counties_id' => 2,
            ),
            106 => 
            array (
                'id' => 2107,
                'name' => 'Istvándi',
                'core_counties_id' => 14,
            ),
            107 => 
            array (
                'id' => 2108,
                'name' => 'Darány',
                'core_counties_id' => 14,
            ),
            108 => 
            array (
                'id' => 2109,
                'name' => 'Székesfehérvár',
                'core_counties_id' => 6,
            ),
            109 => 
            array (
                'id' => 2110,
                'name' => 'Csór',
                'core_counties_id' => 6,
            ),
            110 => 
            array (
                'id' => 2111,
                'name' => 'Moha',
                'core_counties_id' => 6,
            ),
            111 => 
            array (
                'id' => 2112,
                'name' => 'Iszkaszentgyörgy',
                'core_counties_id' => 6,
            ),
            112 => 
            array (
                'id' => 2113,
                'name' => 'Kincsesbánya',
                'core_counties_id' => 6,
            ),
            113 => 
            array (
                'id' => 2114,
                'name' => 'Isztimér',
                'core_counties_id' => 6,
            ),
            114 => 
            array (
                'id' => 2115,
                'name' => 'Bakonykúti',
                'core_counties_id' => 6,
            ),
            115 => 
            array (
                'id' => 2116,
                'name' => 'Sárkeresztes',
                'core_counties_id' => 6,
            ),
            116 => 
            array (
                'id' => 2117,
                'name' => 'Fehérvárcsurgó',
                'core_counties_id' => 6,
            ),
            117 => 
            array (
                'id' => 2118,
                'name' => 'Bodajk',
                'core_counties_id' => 6,
            ),
            118 => 
            array (
                'id' => 2119,
                'name' => 'Balinka',
                'core_counties_id' => 6,
            ),
            119 => 
            array (
                'id' => 2120,
                'name' => 'Bakonycsernye',
                'core_counties_id' => 6,
            ),
            120 => 
            array (
                'id' => 2121,
                'name' => 'Mór',
                'core_counties_id' => 6,
            ),
            121 => 
            array (
                'id' => 2122,
                'name' => 'Nagyveleg',
                'core_counties_id' => 6,
            ),
            122 => 
            array (
                'id' => 2123,
                'name' => 'Pusztavám',
                'core_counties_id' => 6,
            ),
            123 => 
            array (
                'id' => 2124,
                'name' => 'Magyaralmás',
                'core_counties_id' => 6,
            ),
            124 => 
            array (
                'id' => 2125,
                'name' => 'Söréd',
                'core_counties_id' => 6,
            ),
            125 => 
            array (
                'id' => 2126,
                'name' => 'Csákberény',
                'core_counties_id' => 6,
            ),
            126 => 
            array (
                'id' => 2127,
                'name' => 'Csókakő',
                'core_counties_id' => 6,
            ),
            127 => 
            array (
                'id' => 2128,
                'name' => 'Bodmér',
                'core_counties_id' => 6,
            ),
            128 => 
            array (
                'id' => 2129,
                'name' => 'Zámoly',
                'core_counties_id' => 6,
            ),
            129 => 
            array (
                'id' => 2130,
                'name' => 'Gánt',
                'core_counties_id' => 6,
            ),
            130 => 
            array (
                'id' => 2131,
                'name' => 'Csákvár',
                'core_counties_id' => 6,
            ),
            131 => 
            array (
                'id' => 2132,
                'name' => 'Vértesboglár',
                'core_counties_id' => 6,
            ),
            132 => 
            array (
                'id' => 2133,
                'name' => 'Felcsút',
                'core_counties_id' => 6,
            ),
            133 => 
            array (
                'id' => 2134,
                'name' => 'Alcsútdoboz',
                'core_counties_id' => 6,
            ),
            134 => 
            array (
                'id' => 2135,
                'name' => 'Tabajd',
                'core_counties_id' => 6,
            ),
            135 => 
            array (
                'id' => 2136,
                'name' => 'Vértesacsa',
                'core_counties_id' => 6,
            ),
            136 => 
            array (
                'id' => 2137,
                'name' => 'Pátka',
                'core_counties_id' => 6,
            ),
            137 => 
            array (
                'id' => 2138,
                'name' => 'Lovasberény',
                'core_counties_id' => 6,
            ),
            138 => 
            array (
                'id' => 2139,
                'name' => 'Pákozd',
                'core_counties_id' => 6,
            ),
            139 => 
            array (
                'id' => 2140,
                'name' => 'Sukoró',
                'core_counties_id' => 6,
            ),
            140 => 
            array (
                'id' => 2141,
                'name' => 'Nadap',
                'core_counties_id' => 6,
            ),
            141 => 
            array (
                'id' => 2142,
                'name' => 'Várpalota',
                'core_counties_id' => 18,
            ),
            142 => 
            array (
                'id' => 2143,
                'name' => 'Pétfürdő',
                'core_counties_id' => 18,
            ),
            143 => 
            array (
                'id' => 2144,
                'name' => 'Tés',
                'core_counties_id' => 18,
            ),
            144 => 
            array (
                'id' => 2145,
                'name' => 'Seregélyes',
                'core_counties_id' => 6,
            ),
            145 => 
            array (
                'id' => 2146,
                'name' => 'Zichyújfalu',
                'core_counties_id' => 6,
            ),
            146 => 
            array (
                'id' => 2147,
                'name' => 'Tác',
                'core_counties_id' => 6,
            ),
            147 => 
            array (
                'id' => 2148,
                'name' => 'Csősz',
                'core_counties_id' => 6,
            ),
            148 => 
            array (
                'id' => 2149,
                'name' => 'Soponya',
                'core_counties_id' => 6,
            ),
            149 => 
            array (
                'id' => 2150,
                'name' => 'Káloz',
                'core_counties_id' => 6,
            ),
            150 => 
            array (
                'id' => 2151,
                'name' => 'Sárkeresztúr',
                'core_counties_id' => 6,
            ),
            151 => 
            array (
                'id' => 2152,
                'name' => 'Sárszentágota',
                'core_counties_id' => 6,
            ),
            152 => 
            array (
                'id' => 2153,
                'name' => 'Aba',
                'core_counties_id' => 6,
            ),
            153 => 
            array (
                'id' => 2154,
                'name' => 'Enying',
                'core_counties_id' => 6,
            ),
            154 => 
            array (
                'id' => 2155,
                'name' => 'Lepsény',
                'core_counties_id' => 6,
            ),
            155 => 
            array (
                'id' => 2156,
                'name' => 'Mezőszentgyörgy',
                'core_counties_id' => 6,
            ),
            156 => 
            array (
                'id' => 2157,
                'name' => 'Mátyásdomb',
                'core_counties_id' => 6,
            ),
            157 => 
            array (
                'id' => 2158,
                'name' => 'Dég',
                'core_counties_id' => 6,
            ),
            158 => 
            array (
                'id' => 2159,
                'name' => 'Lajoskomárom',
                'core_counties_id' => 6,
            ),
            159 => 
            array (
                'id' => 2160,
                'name' => 'Mezőkomárom',
                'core_counties_id' => 6,
            ),
            160 => 
            array (
                'id' => 2161,
                'name' => 'Szabadhídvég',
                'core_counties_id' => 6,
            ),
            161 => 
            array (
                'id' => 2162,
                'name' => 'Úrhida',
                'core_counties_id' => 6,
            ),
            162 => 
            array (
                'id' => 2163,
                'name' => 'Sárszentmihály',
                'core_counties_id' => 6,
            ),
            163 => 
            array (
                'id' => 2164,
                'name' => 'Sárkeszi',
                'core_counties_id' => 6,
            ),
            164 => 
            array (
                'id' => 2165,
                'name' => 'Nádasdladány',
                'core_counties_id' => 6,
            ),
            165 => 
            array (
                'id' => 2166,
                'name' => 'Jenő',
                'core_counties_id' => 6,
            ),
            166 => 
            array (
                'id' => 2167,
                'name' => 'Szabadbattyán',
                'core_counties_id' => 6,
            ),
            167 => 
            array (
                'id' => 2168,
                'name' => 'Kőszárhegy',
                'core_counties_id' => 6,
            ),
            168 => 
            array (
                'id' => 2169,
                'name' => 'Polgárdi',
                'core_counties_id' => 6,
            ),
            169 => 
            array (
                'id' => 2170,
                'name' => 'Kisláng',
                'core_counties_id' => 6,
            ),
            170 => 
            array (
                'id' => 2171,
                'name' => 'Füle',
                'core_counties_id' => 6,
            ),
            171 => 
            array (
                'id' => 2172,
                'name' => 'Ősi',
                'core_counties_id' => 18,
            ),
            172 => 
            array (
                'id' => 2173,
                'name' => 'Küngös',
                'core_counties_id' => 18,
            ),
            173 => 
            array (
                'id' => 2174,
                'name' => 'Csajág',
                'core_counties_id' => 18,
            ),
            174 => 
            array (
                'id' => 2175,
                'name' => 'Balatonfőkajár',
                'core_counties_id' => 18,
            ),
            175 => 
            array (
                'id' => 2176,
                'name' => 'Balatonvilágos',
                'core_counties_id' => 18,
            ),
            176 => 
            array (
                'id' => 2177,
                'name' => 'Balatonkenese',
                'core_counties_id' => 18,
            ),
            177 => 
            array (
                'id' => 2178,
                'name' => 'Balatonfűzfő',
                'core_counties_id' => 18,
            ),
            178 => 
            array (
                'id' => 2179,
                'name' => 'Berhida',
                'core_counties_id' => 18,
            ),
            179 => 
            array (
                'id' => 2180,
                'name' => 'Papkeszi',
                'core_counties_id' => 18,
            ),
            180 => 
            array (
                'id' => 2181,
                'name' => 'Öskü',
                'core_counties_id' => 18,
            ),
            181 => 
            array (
                'id' => 2182,
                'name' => 'Hajmáskér',
                'core_counties_id' => 18,
            ),
            182 => 
            array (
                'id' => 2183,
                'name' => 'Sóly',
                'core_counties_id' => 18,
            ),
            183 => 
            array (
                'id' => 2184,
                'name' => 'Vilonya',
                'core_counties_id' => 18,
            ),
            184 => 
            array (
                'id' => 2185,
                'name' => 'Királyszentistván',
                'core_counties_id' => 18,
            ),
            185 => 
            array (
                'id' => 2186,
                'name' => 'Litér',
                'core_counties_id' => 18,
            ),
            186 => 
            array (
                'id' => 2187,
                'name' => 'Veszprém',
                'core_counties_id' => 18,
            ),
            187 => 
            array (
                'id' => 2188,
                'name' => 'Balatonalmádi',
                'core_counties_id' => 18,
            ),
            188 => 
            array (
                'id' => 2189,
                'name' => 'Szentkirályszabadja',
                'core_counties_id' => 18,
            ),
            189 => 
            array (
                'id' => 2190,
                'name' => 'Alsóörs',
                'core_counties_id' => 18,
            ),
            190 => 
            array (
                'id' => 2191,
                'name' => 'Felsőörs',
                'core_counties_id' => 18,
            ),
            191 => 
            array (
                'id' => 2192,
                'name' => 'Lovas',
                'core_counties_id' => 18,
            ),
            192 => 
            array (
                'id' => 2193,
                'name' => 'Csopak',
                'core_counties_id' => 18,
            ),
            193 => 
            array (
                'id' => 2194,
                'name' => 'Paloznak',
                'core_counties_id' => 18,
            ),
            194 => 
            array (
                'id' => 2195,
                'name' => 'Balatonfüred',
                'core_counties_id' => 18,
            ),
            195 => 
            array (
                'id' => 2196,
                'name' => 'Balatonszőlős',
                'core_counties_id' => 18,
            ),
            196 => 
            array (
                'id' => 2197,
                'name' => 'Tihany',
                'core_counties_id' => 18,
            ),
            197 => 
            array (
                'id' => 2198,
                'name' => 'Aszófő',
                'core_counties_id' => 18,
            ),
            198 => 
            array (
                'id' => 2199,
                'name' => 'Örvényes',
                'core_counties_id' => 18,
            ),
            199 => 
            array (
                'id' => 2200,
                'name' => 'Balatonudvari',
                'core_counties_id' => 18,
            ),
            200 => 
            array (
                'id' => 2201,
                'name' => 'Balatonakali',
                'core_counties_id' => 18,
            ),
            201 => 
            array (
                'id' => 2202,
                'name' => 'Dörgicse',
                'core_counties_id' => 18,
            ),
            202 => 
            array (
                'id' => 2203,
                'name' => 'Pécsely',
                'core_counties_id' => 18,
            ),
            203 => 
            array (
                'id' => 2204,
                'name' => 'Vászoly',
                'core_counties_id' => 18,
            ),
            204 => 
            array (
                'id' => 2205,
                'name' => 'Tótvázsony',
                'core_counties_id' => 18,
            ),
            205 => 
            array (
                'id' => 2206,
                'name' => 'Hidegkút',
                'core_counties_id' => 18,
            ),
            206 => 
            array (
                'id' => 2207,
                'name' => 'Veszprémfajsz',
                'core_counties_id' => 18,
            ),
            207 => 
            array (
                'id' => 2208,
                'name' => 'Nemesvámos',
                'core_counties_id' => 18,
            ),
            208 => 
            array (
                'id' => 2209,
                'name' => 'Zánka',
                'core_counties_id' => 18,
            ),
            209 => 
            array (
                'id' => 2210,
                'name' => 'Balatonszepezd',
                'core_counties_id' => 18,
            ),
            210 => 
            array (
                'id' => 2211,
                'name' => 'Révfülöp',
                'core_counties_id' => 18,
            ),
            211 => 
            array (
                'id' => 2212,
                'name' => 'Kővágóörs',
                'core_counties_id' => 18,
            ),
            212 => 
            array (
                'id' => 2213,
                'name' => 'Kékkút',
                'core_counties_id' => 18,
            ),
            213 => 
            array (
                'id' => 2214,
                'name' => 'Balatonrendes',
                'core_counties_id' => 18,
            ),
            214 => 
            array (
                'id' => 2215,
                'name' => 'Salföld',
                'core_counties_id' => 18,
            ),
            215 => 
            array (
                'id' => 2216,
                'name' => 'Ábrahámhegy',
                'core_counties_id' => 18,
            ),
            216 => 
            array (
                'id' => 2217,
                'name' => 'Badacsonytomaj',
                'core_counties_id' => 18,
            ),
            217 => 
            array (
                'id' => 2218,
                'name' => 'Badacsonytördemic',
                'core_counties_id' => 18,
            ),
            218 => 
            array (
                'id' => 2219,
                'name' => 'Szigliget',
                'core_counties_id' => 18,
            ),
            219 => 
            array (
                'id' => 2220,
                'name' => 'Hegymagas',
                'core_counties_id' => 18,
            ),
            220 => 
            array (
                'id' => 2221,
                'name' => 'Mencshely',
                'core_counties_id' => 18,
            ),
            221 => 
            array (
                'id' => 2222,
                'name' => 'Balatoncsicsó',
                'core_counties_id' => 18,
            ),
            222 => 
            array (
                'id' => 2223,
                'name' => 'Szentjakabfa',
                'core_counties_id' => 18,
            ),
            223 => 
            array (
                'id' => 2224,
                'name' => 'Szentantalfa',
                'core_counties_id' => 18,
            ),
            224 => 
            array (
                'id' => 2225,
                'name' => 'Óbudavár',
                'core_counties_id' => 18,
            ),
            225 => 
            array (
                'id' => 2226,
                'name' => 'Tagyon',
                'core_counties_id' => 18,
            ),
            226 => 
            array (
                'id' => 2227,
                'name' => 'Monoszló',
                'core_counties_id' => 18,
            ),
            227 => 
            array (
                'id' => 2228,
                'name' => 'Köveskál',
                'core_counties_id' => 18,
            ),
            228 => 
            array (
                'id' => 2229,
                'name' => 'Balatonhenye',
                'core_counties_id' => 18,
            ),
            229 => 
            array (
                'id' => 2230,
                'name' => 'Szentbékkálla',
                'core_counties_id' => 18,
            ),
            230 => 
            array (
                'id' => 2231,
                'name' => 'Mindszentkálla',
                'core_counties_id' => 18,
            ),
            231 => 
            array (
                'id' => 2232,
                'name' => 'Káptalantóti',
                'core_counties_id' => 18,
            ),
            232 => 
            array (
                'id' => 2233,
                'name' => 'Kisapáti',
                'core_counties_id' => 18,
            ),
            233 => 
            array (
                'id' => 2234,
                'name' => 'Nemesgulács',
                'core_counties_id' => 18,
            ),
            234 => 
            array (
                'id' => 2235,
                'name' => 'Gyulakeszi',
                'core_counties_id' => 18,
            ),
            235 => 
            array (
                'id' => 2236,
                'name' => 'Vöröstó',
                'core_counties_id' => 18,
            ),
            236 => 
            array (
                'id' => 2237,
                'name' => 'Barnag',
                'core_counties_id' => 18,
            ),
            237 => 
            array (
                'id' => 2238,
                'name' => 'Nagyvázsony',
                'core_counties_id' => 18,
            ),
            238 => 
            array (
                'id' => 2239,
                'name' => 'Pula',
                'core_counties_id' => 18,
            ),
            239 => 
            array (
                'id' => 2240,
                'name' => 'Öcs',
                'core_counties_id' => 18,
            ),
            240 => 
            array (
                'id' => 2241,
                'name' => 'Kapolcs',
                'core_counties_id' => 18,
            ),
            241 => 
            array (
                'id' => 2242,
                'name' => 'Vigántpetend',
                'core_counties_id' => 18,
            ),
            242 => 
            array (
                'id' => 2243,
                'name' => 'Taliándörögd',
                'core_counties_id' => 18,
            ),
            243 => 
            array (
                'id' => 2244,
                'name' => 'Hegyesd',
                'core_counties_id' => 18,
            ),
            244 => 
            array (
                'id' => 2245,
                'name' => 'Monostorapáti',
                'core_counties_id' => 18,
            ),
            245 => 
            array (
                'id' => 2246,
                'name' => 'Hegyesd',
                'core_counties_id' => 18,
            ),
            246 => 
            array (
                'id' => 2247,
                'name' => 'Raposka',
                'core_counties_id' => 18,
            ),
            247 => 
            array (
                'id' => 2248,
                'name' => 'Tapolca',
                'core_counties_id' => 18,
            ),
            248 => 
            array (
                'id' => 2249,
                'name' => 'Raposka',
                'core_counties_id' => 18,
            ),
            249 => 
            array (
                'id' => 2250,
                'name' => 'Zalahaláp',
                'core_counties_id' => 18,
            ),
            250 => 
            array (
                'id' => 2251,
                'name' => 'Sáska',
                'core_counties_id' => 18,
            ),
            251 => 
            array (
                'id' => 2252,
                'name' => 'Nemesvita',
                'core_counties_id' => 18,
            ),
            252 => 
            array (
                'id' => 2253,
                'name' => 'Balatonederics',
                'core_counties_id' => 18,
            ),
            253 => 
            array (
                'id' => 2254,
                'name' => 'Balatongyörök',
                'core_counties_id' => 19,
            ),
            254 => 
            array (
                'id' => 2255,
                'name' => 'Vonyarcvashegy',
                'core_counties_id' => 19,
            ),
            255 => 
            array (
                'id' => 2256,
                'name' => 'Gyenesdiás',
                'core_counties_id' => 19,
            ),
            256 => 
            array (
                'id' => 2257,
                'name' => 'Vállus',
                'core_counties_id' => 19,
            ),
            257 => 
            array (
                'id' => 2258,
                'name' => 'Várvölgy',
                'core_counties_id' => 19,
            ),
            258 => 
            array (
                'id' => 2259,
                'name' => 'Lesencefalu',
                'core_counties_id' => 18,
            ),
            259 => 
            array (
                'id' => 2260,
                'name' => 'Lesencetomaj',
                'core_counties_id' => 18,
            ),
            260 => 
            array (
                'id' => 2261,
                'name' => 'Lesenceistvánd',
                'core_counties_id' => 18,
            ),
            261 => 
            array (
                'id' => 2262,
                'name' => 'Uzsa',
                'core_counties_id' => 18,
            ),
            262 => 
            array (
                'id' => 2263,
                'name' => 'Sümeg',
                'core_counties_id' => 18,
            ),
            263 => 
            array (
                'id' => 2264,
                'name' => 'Szalapa',
                'core_counties_id' => 19,
            ),
            264 => 
            array (
                'id' => 2265,
                'name' => 'Kisvásárhely',
                'core_counties_id' => 19,
            ),
            265 => 
            array (
                'id' => 2266,
                'name' => 'Mihályfa',
                'core_counties_id' => 19,
            ),
            266 => 
            array (
                'id' => 2267,
                'name' => 'Óhíd',
                'core_counties_id' => 19,
            ),
            267 => 
            array (
                'id' => 2268,
                'name' => 'Hetyefő',
                'core_counties_id' => 18,
            ),
            268 => 
            array (
                'id' => 2269,
                'name' => 'Zalaerdőd',
                'core_counties_id' => 18,
            ),
            269 => 
            array (
                'id' => 2270,
                'name' => 'Dabronc',
                'core_counties_id' => 18,
            ),
            270 => 
            array (
                'id' => 2271,
                'name' => 'Gógánfa',
                'core_counties_id' => 18,
            ),
            271 => 
            array (
                'id' => 2272,
                'name' => 'Ukk',
                'core_counties_id' => 18,
            ),
            272 => 
            array (
                'id' => 2273,
                'name' => 'Megyer',
                'core_counties_id' => 18,
            ),
            273 => 
            array (
                'id' => 2274,
                'name' => 'Zalameggyes',
                'core_counties_id' => 18,
            ),
            274 => 
            array (
                'id' => 2275,
                'name' => 'Rigács',
                'core_counties_id' => 18,
            ),
            275 => 
            array (
                'id' => 2276,
                'name' => 'Zalagyömörő',
                'core_counties_id' => 18,
            ),
            276 => 
            array (
                'id' => 2277,
                'name' => 'Sümegprága',
                'core_counties_id' => 18,
            ),
            277 => 
            array (
                'id' => 2278,
                'name' => 'Bazsi',
                'core_counties_id' => 18,
            ),
            278 => 
            array (
                'id' => 2279,
                'name' => 'Vindornyalak',
                'core_counties_id' => 19,
            ),
            279 => 
            array (
                'id' => 2280,
                'name' => 'Zalaszántó',
                'core_counties_id' => 19,
            ),
            280 => 
            array (
                'id' => 2281,
                'name' => 'Karmacs',
                'core_counties_id' => 19,
            ),
            281 => 
            array (
                'id' => 2282,
                'name' => 'Zalaköveskút',
                'core_counties_id' => 19,
            ),
            282 => 
            array (
                'id' => 2283,
                'name' => 'Vindornyafok',
                'core_counties_id' => 19,
            ),
            283 => 
            array (
                'id' => 2284,
                'name' => 'Vindornyaszőlős',
                'core_counties_id' => 19,
            ),
            284 => 
            array (
                'id' => 2285,
                'name' => 'Nagygörbő',
                'core_counties_id' => 19,
            ),
            285 => 
            array (
                'id' => 2286,
                'name' => 'Kisgörbő',
                'core_counties_id' => 19,
            ),
            286 => 
            array (
                'id' => 2287,
                'name' => 'Döbröce',
                'core_counties_id' => 19,
            ),
            287 => 
            array (
                'id' => 2288,
                'name' => 'Sümegcsehi',
                'core_counties_id' => 19,
            ),
            288 => 
            array (
                'id' => 2289,
                'name' => 'Keszthely',
                'core_counties_id' => 19,
            ),
            289 => 
            array (
                'id' => 2290,
                'name' => 'Nemesbük',
                'core_counties_id' => 19,
            ),
            290 => 
            array (
                'id' => 2291,
                'name' => 'Cserszegtomaj',
                'core_counties_id' => 19,
            ),
            291 => 
            array (
                'id' => 2292,
                'name' => 'Rezi',
                'core_counties_id' => 19,
            ),
            292 => 
            array (
                'id' => 2293,
                'name' => 'Felsőpáhok',
                'core_counties_id' => 19,
            ),
            293 => 
            array (
                'id' => 2294,
                'name' => 'Hévíz',
                'core_counties_id' => 19,
            ),
            294 => 
            array (
                'id' => 2295,
                'name' => 'Sármellék',
                'core_counties_id' => 19,
            ),
            295 => 
            array (
                'id' => 2296,
                'name' => 'Zalavár',
                'core_counties_id' => 19,
            ),
            296 => 
            array (
                'id' => 2297,
                'name' => 'Szentgyörgyvár',
                'core_counties_id' => 19,
            ),
            297 => 
            array (
                'id' => 2298,
                'name' => 'Alsópáhok',
                'core_counties_id' => 19,
            ),
            298 => 
            array (
                'id' => 2299,
                'name' => 'Ajka',
                'core_counties_id' => 18,
            ),
            299 => 
            array (
                'id' => 2300,
                'name' => 'Úrkút',
                'core_counties_id' => 18,
            ),
            300 => 
            array (
                'id' => 2301,
                'name' => 'Eplény',
                'core_counties_id' => 18,
            ),
            301 => 
            array (
                'id' => 2302,
                'name' => 'Olaszfalu',
                'core_counties_id' => 18,
            ),
            302 => 
            array (
                'id' => 2303,
                'name' => 'Nagyesztergár',
                'core_counties_id' => 18,
            ),
            303 => 
            array (
                'id' => 2304,
                'name' => 'Dudar',
                'core_counties_id' => 18,
            ),
            304 => 
            array (
                'id' => 2305,
                'name' => 'Csetény',
                'core_counties_id' => 18,
            ),
            305 => 
            array (
                'id' => 2306,
                'name' => 'Bakonyoszlop',
                'core_counties_id' => 18,
            ),
            306 => 
            array (
                'id' => 2307,
                'name' => 'Csesznek',
                'core_counties_id' => 18,
            ),
            307 => 
            array (
                'id' => 2308,
                'name' => 'Zirc',
                'core_counties_id' => 18,
            ),
            308 => 
            array (
                'id' => 2309,
                'name' => 'Bakonynána',
                'core_counties_id' => 18,
            ),
            309 => 
            array (
                'id' => 2310,
                'name' => 'Szápár',
                'core_counties_id' => 18,
            ),
            310 => 
            array (
                'id' => 2311,
                'name' => 'Jásd',
                'core_counties_id' => 18,
            ),
            311 => 
            array (
                'id' => 2312,
                'name' => 'Lókút',
                'core_counties_id' => 18,
            ),
            312 => 
            array (
                'id' => 2313,
                'name' => 'Pénzesgyőr',
                'core_counties_id' => 18,
            ),
            313 => 
            array (
                'id' => 2314,
                'name' => 'Bakonybél',
                'core_counties_id' => 18,
            ),
            314 => 
            array (
                'id' => 2315,
                'name' => 'Borzavár',
                'core_counties_id' => 18,
            ),
            315 => 
            array (
                'id' => 2316,
                'name' => 'Porva',
                'core_counties_id' => 18,
            ),
            316 => 
            array (
                'id' => 2317,
                'name' => 'Bakonyszentkirály',
                'core_counties_id' => 18,
            ),
            317 => 
            array (
                'id' => 2318,
                'name' => 'Bakonyszentlászló',
                'core_counties_id' => 18,
            ),
            318 => 
            array (
                'id' => 2319,
                'name' => 'Fenyőfő',
                'core_counties_id' => 18,
            ),
            319 => 
            array (
                'id' => 2320,
                'name' => 'Bakonygyirót',
                'core_counties_id' => 18,
            ),
            320 => 
            array (
                'id' => 2321,
                'name' => 'Románd',
                'core_counties_id' => 18,
            ),
            321 => 
            array (
                'id' => 2322,
                'name' => 'Gic',
                'core_counties_id' => 18,
            ),
            322 => 
            array (
                'id' => 2323,
                'name' => 'Bakonypéterd',
                'core_counties_id' => 18,
            ),
            323 => 
            array (
                'id' => 2324,
                'name' => 'Lázi',
                'core_counties_id' => 18,
            ),
            324 => 
            array (
                'id' => 2325,
                'name' => 'Veszprémvarsány',
                'core_counties_id' => 18,
            ),
            325 => 
            array (
                'id' => 2326,
                'name' => 'Sikátor',
                'core_counties_id' => 18,
            ),
            326 => 
            array (
                'id' => 2327,
                'name' => 'Herend',
                'core_counties_id' => 18,
            ),
            327 => 
            array (
                'id' => 2328,
                'name' => 'Márkó',
                'core_counties_id' => 18,
            ),
            328 => 
            array (
                'id' => 2329,
                'name' => 'Hárskút',
                'core_counties_id' => 18,
            ),
            329 => 
            array (
                'id' => 2330,
                'name' => 'Bánd',
                'core_counties_id' => 18,
            ),
            330 => 
            array (
                'id' => 2331,
                'name' => 'Szentgál',
                'core_counties_id' => 18,
            ),
            331 => 
            array (
                'id' => 2332,
                'name' => 'Csehbánya',
                'core_counties_id' => 18,
            ),
            332 => 
            array (
                'id' => 2333,
                'name' => 'Városlőd',
                'core_counties_id' => 18,
            ),
            333 => 
            array (
                'id' => 2334,
                'name' => 'Kislőd',
                'core_counties_id' => 18,
            ),
            334 => 
            array (
                'id' => 2335,
                'name' => 'Magyarpolány',
                'core_counties_id' => 18,
            ),
            335 => 
            array (
                'id' => 2336,
                'name' => 'Halimba',
                'core_counties_id' => 18,
            ),
            336 => 
            array (
                'id' => 2337,
                'name' => 'Szőc',
                'core_counties_id' => 18,
            ),
            337 => 
            array (
                'id' => 2338,
                'name' => 'Nyirád',
                'core_counties_id' => 18,
            ),
            338 => 
            array (
                'id' => 2339,
                'name' => 'Pusztamiske',
                'core_counties_id' => 18,
            ),
            339 => 
            array (
                'id' => 2340,
                'name' => 'Noszlop',
                'core_counties_id' => 18,
            ),
            340 => 
            array (
                'id' => 2341,
                'name' => 'Bakonypölöske',
                'core_counties_id' => 18,
            ),
            341 => 
            array (
                'id' => 2342,
                'name' => 'Oroszi',
                'core_counties_id' => 18,
            ),
            342 => 
            array (
                'id' => 2343,
                'name' => 'Devecser',
                'core_counties_id' => 18,
            ),
            343 => 
            array (
                'id' => 2344,
                'name' => 'Kolontár',
                'core_counties_id' => 18,
            ),
            344 => 
            array (
                'id' => 2345,
                'name' => 'Kamond',
                'core_counties_id' => 18,
            ),
            345 => 
            array (
                'id' => 2346,
                'name' => 'Nemeshany',
                'core_counties_id' => 18,
            ),
            346 => 
            array (
                'id' => 2347,
                'name' => 'Káptalanfa',
                'core_counties_id' => 18,
            ),
            347 => 
            array (
                'id' => 2348,
                'name' => 'Bodorfa',
                'core_counties_id' => 18,
            ),
            348 => 
            array (
                'id' => 2349,
                'name' => 'Gyepükaján',
                'core_counties_id' => 18,
            ),
            349 => 
            array (
                'id' => 2350,
                'name' => 'Csabrendek',
                'core_counties_id' => 18,
            ),
            350 => 
            array (
                'id' => 2351,
                'name' => 'Hosztót',
                'core_counties_id' => 18,
            ),
            351 => 
            array (
                'id' => 2352,
                'name' => 'Veszprémgalsa',
                'core_counties_id' => 18,
            ),
            352 => 
            array (
                'id' => 2353,
                'name' => 'Szentimrefalva',
                'core_counties_id' => 18,
            ),
            353 => 
            array (
                'id' => 2354,
                'name' => 'Zalaszegvár',
                'core_counties_id' => 18,
            ),
            354 => 
            array (
                'id' => 2355,
                'name' => 'Apácatorna',
                'core_counties_id' => 18,
            ),
            355 => 
            array (
                'id' => 2356,
                'name' => 'Tüskevár',
                'core_counties_id' => 18,
            ),
            356 => 
            array (
                'id' => 2357,
                'name' => 'Kisberzseny',
                'core_counties_id' => 18,
            ),
            357 => 
            array (
                'id' => 2358,
                'name' => 'Somlójenő',
                'core_counties_id' => 18,
            ),
            358 => 
            array (
                'id' => 2359,
                'name' => 'Borszörcsök',
                'core_counties_id' => 18,
            ),
            359 => 
            array (
                'id' => 2360,
                'name' => 'Somlóvásárhely',
                'core_counties_id' => 18,
            ),
            360 => 
            array (
                'id' => 2361,
                'name' => 'Doba',
                'core_counties_id' => 18,
            ),
            361 => 
            array (
                'id' => 2362,
                'name' => 'Kisszőlős',
                'core_counties_id' => 18,
            ),
            362 => 
            array (
                'id' => 2363,
                'name' => 'Somlószőlős',
                'core_counties_id' => 18,
            ),
            363 => 
            array (
                'id' => 2364,
                'name' => 'Vid',
                'core_counties_id' => 18,
            ),
            364 => 
            array (
                'id' => 2365,
                'name' => 'Somlóvecse',
                'core_counties_id' => 18,
            ),
            365 => 
            array (
                'id' => 2366,
                'name' => 'Nagyalásony',
                'core_counties_id' => 18,
            ),
            366 => 
            array (
                'id' => 2367,
                'name' => 'Dabrony',
                'core_counties_id' => 18,
            ),
            367 => 
            array (
                'id' => 2368,
                'name' => 'Karakószörcsök',
                'core_counties_id' => 18,
            ),
            368 => 
            array (
                'id' => 2369,
                'name' => 'Kerta',
                'core_counties_id' => 18,
            ),
            369 => 
            array (
                'id' => 2370,
                'name' => 'Iszkáz',
                'core_counties_id' => 18,
            ),
            370 => 
            array (
                'id' => 2371,
                'name' => 'Kiscsősz',
                'core_counties_id' => 18,
            ),
            371 => 
            array (
                'id' => 2372,
                'name' => 'Csögle',
                'core_counties_id' => 18,
            ),
            372 => 
            array (
                'id' => 2373,
                'name' => 'Kispirit',
                'core_counties_id' => 18,
            ),
            373 => 
            array (
                'id' => 2374,
                'name' => 'Nagypirit',
                'core_counties_id' => 18,
            ),
            374 => 
            array (
                'id' => 2375,
                'name' => 'Adorjánháza',
                'core_counties_id' => 18,
            ),
            375 => 
            array (
                'id' => 2376,
                'name' => 'Egeralja',
                'core_counties_id' => 18,
            ),
            376 => 
            array (
                'id' => 2377,
                'name' => 'Pápa',
                'core_counties_id' => 18,
            ),
            377 => 
            array (
                'id' => 2378,
                'name' => 'Nyárád',
                'core_counties_id' => 18,
            ),
            378 => 
            array (
                'id' => 2379,
                'name' => 'Mihályháza',
                'core_counties_id' => 18,
            ),
            379 => 
            array (
                'id' => 2380,
                'name' => 'Mezőlak',
                'core_counties_id' => 18,
            ),
            380 => 
            array (
                'id' => 2381,
                'name' => 'Békás',
                'core_counties_id' => 18,
            ),
            381 => 
            array (
                'id' => 2382,
                'name' => 'Kemeneshőgyész',
                'core_counties_id' => 18,
            ),
            382 => 
            array (
                'id' => 2383,
                'name' => 'Magyargencs',
                'core_counties_id' => 18,
            ),
            383 => 
            array (
                'id' => 2384,
                'name' => 'Kemenesszentpéter',
                'core_counties_id' => 18,
            ),
            384 => 
            array (
                'id' => 2385,
                'name' => 'Nagyacsád',
                'core_counties_id' => 18,
            ),
            385 => 
            array (
                'id' => 2386,
                'name' => 'Nemesgörzsöny',
                'core_counties_id' => 18,
            ),
            386 => 
            array (
                'id' => 2387,
                'name' => 'Egyházaskesző',
                'core_counties_id' => 18,
            ),
            387 => 
            array (
                'id' => 2388,
                'name' => 'Várkesző',
                'core_counties_id' => 18,
            ),
            388 => 
            array (
                'id' => 2389,
                'name' => 'Marcaltő',
                'core_counties_id' => 18,
            ),
            389 => 
            array (
                'id' => 2390,
                'name' => 'Malomsok',
                'core_counties_id' => 18,
            ),
            390 => 
            array (
                'id' => 2391,
                'name' => 'Csikvánd',
                'core_counties_id' => 7,
            ),
            391 => 
            array (
                'id' => 2392,
                'name' => 'Takácsi',
                'core_counties_id' => 18,
            ),
            392 => 
            array (
                'id' => 2393,
                'name' => 'Vaszar',
                'core_counties_id' => 18,
            ),
            393 => 
            array (
                'id' => 2394,
                'name' => 'Gecse',
                'core_counties_id' => 18,
            ),
            394 => 
            array (
                'id' => 2395,
                'name' => 'Szerecseny',
                'core_counties_id' => 7,
            ),
            395 => 
            array (
                'id' => 2396,
                'name' => 'Gyarmat',
                'core_counties_id' => 7,
            ),
            396 => 
            array (
                'id' => 2397,
                'name' => 'Nagygyimót',
                'core_counties_id' => 18,
            ),
            397 => 
            array (
                'id' => 2398,
                'name' => 'Vanyola',
                'core_counties_id' => 18,
            ),
            398 => 
            array (
                'id' => 2399,
                'name' => 'Lovászpatona',
                'core_counties_id' => 18,
            ),
            399 => 
            array (
                'id' => 2400,
                'name' => 'Nagydém',
                'core_counties_id' => 18,
            ),
            400 => 
            array (
                'id' => 2401,
                'name' => 'Bakonytamási',
                'core_counties_id' => 18,
            ),
            401 => 
            array (
                'id' => 2402,
                'name' => 'Pápateszér',
                'core_counties_id' => 18,
            ),
            402 => 
            array (
                'id' => 2403,
                'name' => 'Bakonyság',
                'core_counties_id' => 18,
            ),
            403 => 
            array (
                'id' => 2404,
                'name' => 'Bakonyszentiván',
                'core_counties_id' => 18,
            ),
            404 => 
            array (
                'id' => 2405,
                'name' => 'Csót',
                'core_counties_id' => 18,
            ),
            405 => 
            array (
                'id' => 2406,
                'name' => 'Adásztevel',
                'core_counties_id' => 18,
            ),
            406 => 
            array (
                'id' => 2407,
                'name' => 'Nagytevel',
                'core_counties_id' => 18,
            ),
            407 => 
            array (
                'id' => 2408,
                'name' => 'Homokbödöge',
                'core_counties_id' => 18,
            ),
            408 => 
            array (
                'id' => 2409,
                'name' => 'Ugod',
                'core_counties_id' => 18,
            ),
            409 => 
            array (
                'id' => 2410,
                'name' => 'Béb',
                'core_counties_id' => 18,
            ),
            410 => 
            array (
                'id' => 2411,
                'name' => 'Bakonykoppány',
                'core_counties_id' => 18,
            ),
            411 => 
            array (
                'id' => 2412,
                'name' => 'Bakonyszücs',
                'core_counties_id' => 18,
            ),
            412 => 
            array (
                'id' => 2413,
                'name' => 'Németbánya',
                'core_counties_id' => 18,
            ),
            413 => 
            array (
                'id' => 2414,
                'name' => 'Bakonyjákó',
                'core_counties_id' => 18,
            ),
            414 => 
            array (
                'id' => 2415,
                'name' => 'Farkasgyepű',
                'core_counties_id' => 18,
            ),
            415 => 
            array (
                'id' => 2416,
                'name' => 'Nóráp',
                'core_counties_id' => 18,
            ),
            416 => 
            array (
                'id' => 2417,
                'name' => 'Dáka',
                'core_counties_id' => 18,
            ),
            417 => 
            array (
                'id' => 2418,
                'name' => 'Pápadereske',
                'core_counties_id' => 18,
            ),
            418 => 
            array (
                'id' => 2419,
                'name' => 'Pápasalamon',
                'core_counties_id' => 18,
            ),
            419 => 
            array (
                'id' => 2420,
                'name' => 'Kup',
                'core_counties_id' => 18,
            ),
            420 => 
            array (
                'id' => 2421,
                'name' => 'Pápakovácsi',
                'core_counties_id' => 18,
            ),
            421 => 
            array (
                'id' => 2422,
                'name' => 'Ganna',
                'core_counties_id' => 18,
            ),
            422 => 
            array (
                'id' => 2423,
                'name' => 'Döbrönte',
                'core_counties_id' => 18,
            ),
            423 => 
            array (
                'id' => 2424,
                'name' => 'Siófok',
                'core_counties_id' => 14,
            ),
            424 => 
            array (
                'id' => 2425,
                'name' => 'Nyim',
                'core_counties_id' => 14,
            ),
            425 => 
            array (
                'id' => 2426,
                'name' => 'Balatonendréd',
                'core_counties_id' => 14,
            ),
            426 => 
            array (
                'id' => 2427,
                'name' => 'Bálványos',
                'core_counties_id' => 14,
            ),
            427 => 
            array (
                'id' => 2428,
                'name' => 'Kőröshegy',
                'core_counties_id' => 14,
            ),
            428 => 
            array (
                'id' => 2429,
                'name' => 'Kereki',
                'core_counties_id' => 14,
            ),
            429 => 
            array (
                'id' => 2430,
                'name' => 'Pusztaszemes',
                'core_counties_id' => 14,
            ),
            430 => 
            array (
                'id' => 2431,
                'name' => 'Zamárdi',
                'core_counties_id' => 14,
            ),
            431 => 
            array (
                'id' => 2432,
                'name' => 'Szántód',
                'core_counties_id' => 14,
            ),
            432 => 
            array (
                'id' => 2433,
                'name' => 'Balatonföldvár',
                'core_counties_id' => 14,
            ),
            433 => 
            array (
                'id' => 2434,
                'name' => 'Balatonszárszó',
                'core_counties_id' => 14,
            ),
            434 => 
            array (
                'id' => 2435,
                'name' => 'Szólád',
                'core_counties_id' => 14,
            ),
            435 => 
            array (
                'id' => 2436,
                'name' => 'Teleki',
                'core_counties_id' => 14,
            ),
            436 => 
            array (
                'id' => 2437,
                'name' => 'Kötcse',
                'core_counties_id' => 14,
            ),
            437 => 
            array (
                'id' => 2438,
                'name' => 'Nagycsepely',
                'core_counties_id' => 14,
            ),
            438 => 
            array (
                'id' => 2439,
                'name' => 'Balatonboglár',
                'core_counties_id' => 14,
            ),
            439 => 
            array (
                'id' => 2440,
                'name' => 'Ordacsehi',
                'core_counties_id' => 14,
            ),
            440 => 
            array (
                'id' => 2441,
                'name' => 'Balatonszemes',
                'core_counties_id' => 14,
            ),
            441 => 
            array (
                'id' => 2442,
                'name' => 'Balatonőszöd',
                'core_counties_id' => 14,
            ),
            442 => 
            array (
                'id' => 2443,
                'name' => 'Balatonlelle',
                'core_counties_id' => 14,
            ),
            443 => 
            array (
                'id' => 2444,
                'name' => 'Fonyód',
                'core_counties_id' => 14,
            ),
            444 => 
            array (
                'id' => 2445,
                'name' => 'Birján',
                'core_counties_id' => 14,
            ),
            445 => 
            array (
                'id' => 2446,
                'name' => 'Balatonfenyves',
                'core_counties_id' => 14,
            ),
            446 => 
            array (
                'id' => 2447,
                'name' => 'Balatonmáriafürdő',
                'core_counties_id' => 14,
            ),
            447 => 
            array (
                'id' => 2448,
                'name' => 'Balatonkeresztúr',
                'core_counties_id' => 14,
            ),
            448 => 
            array (
                'id' => 2449,
                'name' => 'Balatonberény',
                'core_counties_id' => 14,
            ),
            449 => 
            array (
                'id' => 2450,
                'name' => 'Balatonszabadi',
                'core_counties_id' => 14,
            ),
            450 => 
            array (
                'id' => 2451,
                'name' => 'Siójut',
                'core_counties_id' => 14,
            ),
            451 => 
            array (
                'id' => 2452,
                'name' => 'Ádánd',
                'core_counties_id' => 14,
            ),
            452 => 
            array (
                'id' => 2453,
                'name' => 'Ságvár',
                'core_counties_id' => 14,
            ),
            453 => 
            array (
                'id' => 2454,
                'name' => 'Som',
                'core_counties_id' => 14,
            ),
            454 => 
            array (
                'id' => 2455,
                'name' => 'Nagyberény',
                'core_counties_id' => 14,
            ),
            455 => 
            array (
                'id' => 2456,
                'name' => 'Bábonymegyer',
                'core_counties_id' => 14,
            ),
            456 => 
            array (
                'id' => 2457,
                'name' => 'Tab',
                'core_counties_id' => 14,
            ),
            457 => 
            array (
                'id' => 2458,
                'name' => 'Zala',
                'core_counties_id' => 14,
            ),
            458 => 
            array (
                'id' => 2459,
                'name' => 'Torvaj',
                'core_counties_id' => 14,
            ),
            459 => 
            array (
                'id' => 2460,
                'name' => 'Sérsekszőlős',
                'core_counties_id' => 14,
            ),
            460 => 
            array (
                'id' => 2461,
                'name' => 'Lulla',
                'core_counties_id' => 14,
            ),
            461 => 
            array (
                'id' => 2462,
                'name' => 'Bedegkér',
                'core_counties_id' => 14,
            ),
            462 => 
            array (
                'id' => 2463,
                'name' => 'Somogyegres',
                'core_counties_id' => 14,
            ),
            463 => 
            array (
                'id' => 2464,
                'name' => 'Kánya',
                'core_counties_id' => 14,
            ),
            464 => 
            array (
                'id' => 2465,
                'name' => 'Tengőd',
                'core_counties_id' => 14,
            ),
            465 => 
            array (
                'id' => 2466,
                'name' => 'Miklósi',
                'core_counties_id' => 14,
            ),
            466 => 
            array (
                'id' => 2467,
                'name' => 'Kapoly',
                'core_counties_id' => 14,
            ),
            467 => 
            array (
                'id' => 2468,
                'name' => 'Zics',
                'core_counties_id' => 14,
            ),
            468 => 
            array (
                'id' => 2469,
                'name' => 'Somogymeggyes',
                'core_counties_id' => 14,
            ),
            469 => 
            array (
                'id' => 2470,
                'name' => 'Nágocs',
                'core_counties_id' => 14,
            ),
            470 => 
            array (
                'id' => 2471,
                'name' => 'Andocs',
                'core_counties_id' => 14,
            ),
            471 => 
            array (
                'id' => 2472,
                'name' => 'Karád',
                'core_counties_id' => 14,
            ),
            472 => 
            array (
                'id' => 2473,
                'name' => 'Visz',
                'core_counties_id' => 14,
            ),
            473 => 
            array (
                'id' => 2474,
                'name' => 'Látrány',
                'core_counties_id' => 14,
            ),
            474 => 
            array (
                'id' => 2475,
                'name' => 'Somogytúr',
                'core_counties_id' => 14,
            ),
            475 => 
            array (
                'id' => 2476,
                'name' => 'Somogybabod',
                'core_counties_id' => 14,
            ),
            476 => 
            array (
                'id' => 2477,
                'name' => 'Gamás',
                'core_counties_id' => 14,
            ),
            477 => 
            array (
                'id' => 2478,
                'name' => 'Gyugy',
                'core_counties_id' => 14,
            ),
            478 => 
            array (
                'id' => 2479,
                'name' => 'Szőlősgyörök',
                'core_counties_id' => 14,
            ),
            479 => 
            array (
                'id' => 2480,
                'name' => 'Kisberény',
                'core_counties_id' => 14,
            ),
            480 => 
            array (
                'id' => 2481,
                'name' => 'Lengyeltóti',
                'core_counties_id' => 14,
            ),
            481 => 
            array (
                'id' => 2482,
                'name' => 'Hács',
                'core_counties_id' => 14,
            ),
            482 => 
            array (
                'id' => 2483,
                'name' => 'Buzsák',
                'core_counties_id' => 14,
            ),
            483 => 
            array (
                'id' => 2484,
                'name' => 'Táska',
                'core_counties_id' => 14,
            ),
            484 => 
            array (
                'id' => 2485,
                'name' => 'Öreglak',
                'core_counties_id' => 14,
            ),
            485 => 
            array (
                'id' => 2486,
                'name' => 'Pamuk',
                'core_counties_id' => 14,
            ),
            486 => 
            array (
                'id' => 2487,
                'name' => 'Somogyvár',
                'core_counties_id' => 14,
            ),
            487 => 
            array (
                'id' => 2488,
                'name' => 'Somogyvámos',
                'core_counties_id' => 14,
            ),
            488 => 
            array (
                'id' => 2489,
                'name' => 'Csömend',
                'core_counties_id' => 14,
            ),
            489 => 
            array (
                'id' => 2490,
                'name' => 'Marcali',
                'core_counties_id' => 14,
            ),
            490 => 
            array (
                'id' => 2491,
                'name' => 'Somogyszentpál',
                'core_counties_id' => 14,
            ),
            491 => 
            array (
                'id' => 2492,
                'name' => 'Nikla',
                'core_counties_id' => 14,
            ),
            492 => 
            array (
                'id' => 2493,
                'name' => 'Pusztakovácsi',
                'core_counties_id' => 14,
            ),
            493 => 
            array (
                'id' => 2494,
                'name' => 'Libickozma',
                'core_counties_id' => 14,
            ),
            494 => 
            array (
                'id' => 2495,
                'name' => 'Somogyfajsz',
                'core_counties_id' => 14,
            ),
            495 => 
            array (
                'id' => 2496,
                'name' => 'Balatonszentgyörgy',
                'core_counties_id' => 14,
            ),
            496 => 
            array (
                'id' => 2497,
                'name' => 'Vörs',
                'core_counties_id' => 14,
            ),
            497 => 
            array (
                'id' => 2498,
                'name' => 'Balatonújlak',
                'core_counties_id' => 14,
            ),
            498 => 
            array (
                'id' => 2499,
                'name' => 'Kéthely',
                'core_counties_id' => 14,
            ),
            499 => 
            array (
                'id' => 2500,
                'name' => 'Kelevíz',
                'core_counties_id' => 14,
            ),
        ));
        \DB::table('core_cities')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'name' => 'Gadány',
                'core_counties_id' => 14,
            ),
            1 => 
            array (
                'id' => 2502,
                'name' => 'Mesztegnyő',
                'core_counties_id' => 14,
            ),
            2 => 
            array (
                'id' => 2503,
                'name' => 'Hosszúvíz',
                'core_counties_id' => 14,
            ),
            3 => 
            array (
                'id' => 2504,
                'name' => 'Szenyér',
                'core_counties_id' => 14,
            ),
            4 => 
            array (
                'id' => 2505,
                'name' => 'Nemeskisfalud',
                'core_counties_id' => 14,
            ),
            5 => 
            array (
                'id' => 2506,
                'name' => 'Tapsony',
                'core_counties_id' => 14,
            ),
            6 => 
            array (
                'id' => 2507,
                'name' => 'Böhönye',
                'core_counties_id' => 14,
            ),
            7 => 
            array (
                'id' => 2508,
                'name' => 'Vése',
                'core_counties_id' => 14,
            ),
            8 => 
            array (
                'id' => 2509,
                'name' => 'Nemesdéd',
                'core_counties_id' => 14,
            ),
            9 => 
            array (
                'id' => 2510,
                'name' => 'Varászló',
                'core_counties_id' => 14,
            ),
            10 => 
            array (
                'id' => 2511,
                'name' => 'Inke',
                'core_counties_id' => 14,
            ),
            11 => 
            array (
                'id' => 2512,
                'name' => 'Iharosberény',
                'core_counties_id' => 14,
            ),
            12 => 
            array (
                'id' => 2513,
                'name' => 'Somogycsicsó',
                'core_counties_id' => 14,
            ),
            13 => 
            array (
                'id' => 2514,
                'name' => 'Iharos',
                'core_counties_id' => 14,
            ),
            14 => 
            array (
                'id' => 2515,
                'name' => 'Pogányszentpéter',
                'core_counties_id' => 14,
            ),
            15 => 
            array (
                'id' => 2516,
                'name' => 'Hollád',
                'core_counties_id' => 14,
            ),
            16 => 
            array (
                'id' => 2517,
                'name' => 'Tikos',
                'core_counties_id' => 14,
            ),
            17 => 
            array (
                'id' => 2518,
                'name' => 'Főnyed',
                'core_counties_id' => 14,
            ),
            18 => 
            array (
                'id' => 2519,
                'name' => 'Sávoly',
                'core_counties_id' => 14,
            ),
            19 => 
            array (
                'id' => 2520,
                'name' => 'Szegerdő',
                'core_counties_id' => 14,
            ),
            20 => 
            array (
                'id' => 2521,
                'name' => 'Somogysámson',
                'core_counties_id' => 14,
            ),
            21 => 
            array (
                'id' => 2522,
                'name' => 'Somogyzsitfa',
                'core_counties_id' => 14,
            ),
            22 => 
            array (
                'id' => 2523,
                'name' => 'Csákány',
                'core_counties_id' => 14,
            ),
            23 => 
            array (
                'id' => 2524,
                'name' => 'Szőkedencs',
                'core_counties_id' => 14,
            ),
            24 => 
            array (
                'id' => 2525,
                'name' => 'Somogysimonyi',
                'core_counties_id' => 14,
            ),
            25 => 
            array (
                'id' => 2526,
                'name' => 'Nemesvid',
                'core_counties_id' => 14,
            ),
            26 => 
            array (
                'id' => 2527,
                'name' => 'Nagyszakácsi',
                'core_counties_id' => 14,
            ),
            27 => 
            array (
                'id' => 2528,
                'name' => 'Zalaapáti',
                'core_counties_id' => 19,
            ),
            28 => 
            array (
                'id' => 2529,
                'name' => 'Bókaháza',
                'core_counties_id' => 19,
            ),
            29 => 
            array (
                'id' => 2530,
                'name' => 'Esztergályhorváti',
                'core_counties_id' => 19,
            ),
            30 => 
            array (
                'id' => 2531,
                'name' => 'Zalaszabar',
                'core_counties_id' => 19,
            ),
            31 => 
            array (
                'id' => 2532,
                'name' => 'Orosztony',
                'core_counties_id' => 19,
            ),
            32 => 
            array (
                'id' => 2533,
                'name' => 'Kerecseny',
                'core_counties_id' => 19,
            ),
            33 => 
            array (
                'id' => 2534,
                'name' => 'Nagyrada',
                'core_counties_id' => 19,
            ),
            34 => 
            array (
                'id' => 2535,
                'name' => 'Garabonc',
                'core_counties_id' => 19,
            ),
            35 => 
            array (
                'id' => 2536,
                'name' => 'Zalamerenye',
                'core_counties_id' => 19,
            ),
            36 => 
            array (
                'id' => 2537,
                'name' => 'Zalakaros',
                'core_counties_id' => 19,
            ),
            37 => 
            array (
                'id' => 2538,
                'name' => 'Zalakomár',
                'core_counties_id' => 19,
            ),
            38 => 
            array (
                'id' => 2539,
                'name' => 'Zalakomár',
                'core_counties_id' => 19,
            ),
            39 => 
            array (
                'id' => 2540,
                'name' => 'Balatonmagyaród',
                'core_counties_id' => 19,
            ),
            40 => 
            array (
                'id' => 2541,
                'name' => 'Galambok',
                'core_counties_id' => 19,
            ),
            41 => 
            array (
                'id' => 2542,
                'name' => 'Kisrécse',
                'core_counties_id' => 19,
            ),
            42 => 
            array (
                'id' => 2543,
                'name' => 'Csapi',
                'core_counties_id' => 19,
            ),
            43 => 
            array (
                'id' => 2544,
                'name' => 'Zalasárszeg',
                'core_counties_id' => 19,
            ),
            44 => 
            array (
                'id' => 2545,
                'name' => 'Nagyrécse',
                'core_counties_id' => 19,
            ),
            45 => 
            array (
                'id' => 2546,
                'name' => 'Zalaigrice',
                'core_counties_id' => 19,
            ),
            46 => 
            array (
                'id' => 2547,
                'name' => 'Pacsa',
                'core_counties_id' => 19,
            ),
            47 => 
            array (
                'id' => 2548,
                'name' => 'Gétye',
                'core_counties_id' => 19,
            ),
            48 => 
            array (
                'id' => 2549,
                'name' => 'Szentpéterúr',
                'core_counties_id' => 19,
            ),
            49 => 
            array (
                'id' => 2550,
                'name' => 'Dióskál',
                'core_counties_id' => 19,
            ),
            50 => 
            array (
                'id' => 2551,
                'name' => 'Zalaszentmárton',
                'core_counties_id' => 19,
            ),
            51 => 
            array (
                'id' => 2552,
                'name' => 'Egeraracsa',
                'core_counties_id' => 19,
            ),
            52 => 
            array (
                'id' => 2553,
                'name' => 'Pötréte',
                'core_counties_id' => 19,
            ),
            53 => 
            array (
                'id' => 2554,
                'name' => 'Felsőrajk',
                'core_counties_id' => 19,
            ),
            54 => 
            array (
                'id' => 2555,
                'name' => 'Alsórajk',
                'core_counties_id' => 19,
            ),
            55 => 
            array (
                'id' => 2556,
                'name' => 'Hahót',
                'core_counties_id' => 19,
            ),
            56 => 
            array (
                'id' => 2557,
                'name' => 'Zalaszentbalázs',
                'core_counties_id' => 19,
            ),
            57 => 
            array (
                'id' => 2558,
                'name' => 'Börzönce',
                'core_counties_id' => 19,
            ),
            58 => 
            array (
                'id' => 2559,
                'name' => 'Pölöskefő',
                'core_counties_id' => 19,
            ),
            59 => 
            array (
                'id' => 2560,
                'name' => 'Kacorlak',
                'core_counties_id' => 19,
            ),
            60 => 
            array (
                'id' => 2561,
                'name' => 'Kilimán',
                'core_counties_id' => 19,
            ),
            61 => 
            array (
                'id' => 2562,
                'name' => 'Gelse',
                'core_counties_id' => 19,
            ),
            62 => 
            array (
                'id' => 2563,
                'name' => 'Gelsesziget',
                'core_counties_id' => 19,
            ),
            63 => 
            array (
                'id' => 2564,
                'name' => 'Magyarszerdahely',
                'core_counties_id' => 19,
            ),
            64 => 
            array (
                'id' => 2565,
                'name' => 'Bocska',
                'core_counties_id' => 19,
            ),
            65 => 
            array (
                'id' => 2566,
                'name' => 'Magyarszentmiklós',
                'core_counties_id' => 19,
            ),
            66 => 
            array (
                'id' => 2567,
                'name' => 'Fűzvölgy',
                'core_counties_id' => 19,
            ),
            67 => 
            array (
                'id' => 2568,
                'name' => 'Homokkomárom',
                'core_counties_id' => 19,
            ),
            68 => 
            array (
                'id' => 2569,
                'name' => 'Hosszúvölgy',
                'core_counties_id' => 19,
            ),
            69 => 
            array (
                'id' => 2570,
                'name' => 'Újudvar',
                'core_counties_id' => 19,
            ),
            70 => 
            array (
                'id' => 2571,
                'name' => 'Ligetfalva',
                'core_counties_id' => 19,
            ),
            71 => 
            array (
                'id' => 2572,
                'name' => 'Zalacsány',
                'core_counties_id' => 19,
            ),
            72 => 
            array (
                'id' => 2573,
                'name' => 'Tilaj',
                'core_counties_id' => 19,
            ),
            73 => 
            array (
                'id' => 2574,
                'name' => 'Kehidakustány',
                'core_counties_id' => 19,
            ),
            74 => 
            array (
                'id' => 2575,
                'name' => 'Kallósd',
                'core_counties_id' => 19,
            ),
            75 => 
            array (
                'id' => 2576,
                'name' => 'Zalaszentlászló',
                'core_counties_id' => 19,
            ),
            76 => 
            array (
                'id' => 2577,
                'name' => 'Sénye',
                'core_counties_id' => 19,
            ),
            77 => 
            array (
                'id' => 2578,
                'name' => 'Zalaszentgrót',
                'core_counties_id' => 19,
            ),
            78 => 
            array (
                'id' => 2579,
                'name' => 'Zalavég',
                'core_counties_id' => 19,
            ),
            79 => 
            array (
                'id' => 2580,
                'name' => 'Türje',
                'core_counties_id' => 19,
            ),
            80 => 
            array (
                'id' => 2581,
                'name' => 'Batyk',
                'core_counties_id' => 19,
            ),
            81 => 
            array (
                'id' => 2582,
                'name' => 'Zalabér',
                'core_counties_id' => 19,
            ),
            82 => 
            array (
                'id' => 2583,
                'name' => 'Dötk',
                'core_counties_id' => 19,
            ),
            83 => 
            array (
                'id' => 2584,
                'name' => 'Pakod',
                'core_counties_id' => 19,
            ),
            84 => 
            array (
                'id' => 2585,
                'name' => 'Nagykanizsa',
                'core_counties_id' => 19,
            ),
            85 => 
            array (
                'id' => 2586,
                'name' => 'Nagybakónak',
                'core_counties_id' => 19,
            ),
            86 => 
            array (
                'id' => 2587,
                'name' => 'Zalaújlak',
                'core_counties_id' => 19,
            ),
            87 => 
            array (
                'id' => 2588,
                'name' => 'Sand',
                'core_counties_id' => 19,
            ),
            88 => 
            array (
                'id' => 2589,
                'name' => 'Miháld',
                'core_counties_id' => 19,
            ),
            89 => 
            array (
                'id' => 2590,
                'name' => 'Pat',
                'core_counties_id' => 19,
            ),
            90 => 
            array (
                'id' => 2591,
                'name' => 'Zalaszentjakab',
                'core_counties_id' => 19,
            ),
            91 => 
            array (
                'id' => 2592,
                'name' => 'Liszó',
                'core_counties_id' => 19,
            ),
            92 => 
            array (
                'id' => 2593,
                'name' => 'Murakeresztúr',
                'core_counties_id' => 19,
            ),
            93 => 
            array (
                'id' => 2594,
                'name' => 'Fityeház',
                'core_counties_id' => 19,
            ),
            94 => 
            array (
                'id' => 2595,
                'name' => 'Csurgónagymarton',
                'core_counties_id' => 14,
            ),
            95 => 
            array (
                'id' => 2596,
                'name' => 'Csurgó',
                'core_counties_id' => 14,
            ),
            96 => 
            array (
                'id' => 2597,
                'name' => 'Szenta',
                'core_counties_id' => 14,
            ),
            97 => 
            array (
                'id' => 2598,
                'name' => 'Gyékényes',
                'core_counties_id' => 14,
            ),
            98 => 
            array (
                'id' => 2599,
                'name' => 'Zákány',
                'core_counties_id' => 14,
            ),
            99 => 
            array (
                'id' => 2600,
                'name' => 'Zákányfalu',
                'core_counties_id' => 14,
            ),
            100 => 
            array (
                'id' => 2601,
                'name' => 'Őrtilos',
                'core_counties_id' => 14,
            ),
            101 => 
            array (
                'id' => 2602,
                'name' => 'Belezna',
                'core_counties_id' => 19,
            ),
            102 => 
            array (
                'id' => 2603,
                'name' => 'Nemespátró',
                'core_counties_id' => 19,
            ),
            103 => 
            array (
                'id' => 2604,
                'name' => 'Surd',
                'core_counties_id' => 19,
            ),
            104 => 
            array (
                'id' => 2605,
                'name' => 'Somogybükkösd',
                'core_counties_id' => 14,
            ),
            105 => 
            array (
                'id' => 2606,
                'name' => 'Porrogszentkirály',
                'core_counties_id' => 14,
            ),
            106 => 
            array (
                'id' => 2607,
                'name' => 'Porrogszentpál',
                'core_counties_id' => 14,
            ),
            107 => 
            array (
                'id' => 2608,
                'name' => 'Porrog',
                'core_counties_id' => 14,
            ),
            108 => 
            array (
                'id' => 2609,
                'name' => 'Szepetnek',
                'core_counties_id' => 19,
            ),
            109 => 
            array (
                'id' => 2610,
                'name' => 'Semjénháza',
                'core_counties_id' => 19,
            ),
            110 => 
            array (
                'id' => 2611,
                'name' => 'Molnári',
                'core_counties_id' => 19,
            ),
            111 => 
            array (
                'id' => 2612,
                'name' => 'Tótszerdahely',
                'core_counties_id' => 19,
            ),
            112 => 
            array (
                'id' => 2613,
                'name' => 'Tótszentmárton',
                'core_counties_id' => 19,
            ),
            113 => 
            array (
                'id' => 2614,
                'name' => 'Becsehely',
                'core_counties_id' => 19,
            ),
            114 => 
            array (
                'id' => 2615,
                'name' => 'Petrivente',
                'core_counties_id' => 19,
            ),
            115 => 
            array (
                'id' => 2616,
                'name' => 'Kistolmács',
                'core_counties_id' => 19,
            ),
            116 => 
            array (
                'id' => 2617,
                'name' => 'Letenye',
                'core_counties_id' => 19,
            ),
            117 => 
            array (
                'id' => 2618,
                'name' => 'Zajk',
                'core_counties_id' => 19,
            ),
            118 => 
            array (
                'id' => 2619,
                'name' => 'Murarátka',
                'core_counties_id' => 19,
            ),
            119 => 
            array (
                'id' => 2620,
                'name' => 'Szentmargitfalva',
                'core_counties_id' => 19,
            ),
            120 => 
            array (
                'id' => 2621,
                'name' => 'Muraszemenye',
                'core_counties_id' => 19,
            ),
            121 => 
            array (
                'id' => 2622,
                'name' => 'Csörnyeföld',
                'core_counties_id' => 19,
            ),
            122 => 
            array (
                'id' => 2623,
                'name' => 'Kerkaszentkirály',
                'core_counties_id' => 19,
            ),
            123 => 
            array (
                'id' => 2624,
                'name' => 'Dobri',
                'core_counties_id' => 19,
            ),
            124 => 
            array (
                'id' => 2625,
                'name' => 'Tormafölde',
                'core_counties_id' => 19,
            ),
            125 => 
            array (
                'id' => 2626,
                'name' => 'Tornyiszentmiklós',
                'core_counties_id' => 19,
            ),
            126 => 
            array (
                'id' => 2627,
                'name' => 'Lovászi',
                'core_counties_id' => 19,
            ),
            127 => 
            array (
                'id' => 2628,
                'name' => 'Kerkateskánd',
                'core_counties_id' => 19,
            ),
            128 => 
            array (
                'id' => 2629,
                'name' => 'Szécsisziget',
                'core_counties_id' => 19,
            ),
            129 => 
            array (
                'id' => 2630,
                'name' => 'Sormás',
                'core_counties_id' => 19,
            ),
            130 => 
            array (
                'id' => 2631,
                'name' => 'Eszteregnye',
                'core_counties_id' => 19,
            ),
            131 => 
            array (
                'id' => 2632,
                'name' => 'Rigyác',
                'core_counties_id' => 19,
            ),
            132 => 
            array (
                'id' => 2633,
                'name' => 'Borsfa',
                'core_counties_id' => 19,
            ),
            133 => 
            array (
                'id' => 2634,
                'name' => 'Valkonya',
                'core_counties_id' => 19,
            ),
            134 => 
            array (
                'id' => 2635,
                'name' => 'Oltárc',
                'core_counties_id' => 19,
            ),
            135 => 
            array (
                'id' => 2636,
                'name' => 'Bázakerettye',
                'core_counties_id' => 19,
            ),
            136 => 
            array (
                'id' => 2637,
                'name' => 'Lasztonya',
                'core_counties_id' => 19,
            ),
            137 => 
            array (
                'id' => 2638,
                'name' => 'Lispeszentadorján',
                'core_counties_id' => 19,
            ),
            138 => 
            array (
                'id' => 2639,
                'name' => 'Kiscsehi',
                'core_counties_id' => 19,
            ),
            139 => 
            array (
                'id' => 2640,
                'name' => 'Maróc',
                'core_counties_id' => 19,
            ),
            140 => 
            array (
                'id' => 2641,
                'name' => 'Bánokszentgyörgy',
                'core_counties_id' => 19,
            ),
            141 => 
            array (
                'id' => 2642,
                'name' => 'Várfölde',
                'core_counties_id' => 19,
            ),
            142 => 
            array (
                'id' => 2643,
                'name' => 'Bucsuta',
                'core_counties_id' => 19,
            ),
            143 => 
            array (
                'id' => 2644,
                'name' => 'Szentliszló',
                'core_counties_id' => 19,
            ),
            144 => 
            array (
                'id' => 2645,
                'name' => 'Pusztamagyaród',
                'core_counties_id' => 19,
            ),
            145 => 
            array (
                'id' => 2646,
                'name' => 'Pusztaszentlászló',
                'core_counties_id' => 19,
            ),
            146 => 
            array (
                'id' => 2647,
                'name' => 'Söjtör',
                'core_counties_id' => 19,
            ),
            147 => 
            array (
                'id' => 2648,
                'name' => 'Zalaegerszeg',
                'core_counties_id' => 19,
            ),
            148 => 
            array (
                'id' => 2649,
                'name' => 'Kiskutas',
                'core_counties_id' => 19,
            ),
            149 => 
            array (
                'id' => 2650,
                'name' => 'Nagykutas',
                'core_counties_id' => 19,
            ),
            150 => 
            array (
                'id' => 2651,
                'name' => 'Kispáli',
                'core_counties_id' => 19,
            ),
            151 => 
            array (
                'id' => 2652,
                'name' => 'Nagypáli',
                'core_counties_id' => 19,
            ),
            152 => 
            array (
                'id' => 2653,
                'name' => 'Egervár',
                'core_counties_id' => 19,
            ),
            153 => 
            array (
                'id' => 2654,
                'name' => 'Lakhegy',
                'core_counties_id' => 19,
            ),
            154 => 
            array (
                'id' => 2655,
                'name' => 'Gősfa',
                'core_counties_id' => 19,
            ),
            155 => 
            array (
                'id' => 2656,
                'name' => 'Vasboldogasszony',
                'core_counties_id' => 19,
            ),
            156 => 
            array (
                'id' => 2657,
                'name' => 'Nemesrádó',
                'core_counties_id' => 19,
            ),
            157 => 
            array (
                'id' => 2658,
                'name' => 'Dobronhegy',
                'core_counties_id' => 19,
            ),
            158 => 
            array (
                'id' => 2659,
                'name' => 'Pálfiszeg',
                'core_counties_id' => 19,
            ),
            159 => 
            array (
                'id' => 2660,
                'name' => 'Milejszeg',
                'core_counties_id' => 19,
            ),
            160 => 
            array (
                'id' => 2661,
                'name' => 'Csonkahegyhát',
                'core_counties_id' => 19,
            ),
            161 => 
            array (
                'id' => 2662,
                'name' => 'Németfalu',
                'core_counties_id' => 19,
            ),
            162 => 
            array (
                'id' => 2663,
                'name' => 'Kustánszeg',
                'core_counties_id' => 19,
            ),
            163 => 
            array (
                'id' => 2664,
                'name' => 'Zalaszentiván',
                'core_counties_id' => 19,
            ),
            164 => 
            array (
                'id' => 2665,
                'name' => 'Zalaszentlőrinc',
                'core_counties_id' => 19,
            ),
            165 => 
            array (
                'id' => 2666,
                'name' => 'Alibánfa',
                'core_counties_id' => 19,
            ),
            166 => 
            array (
                'id' => 2667,
                'name' => 'Pethőhenye',
                'core_counties_id' => 19,
            ),
            167 => 
            array (
                'id' => 2668,
                'name' => 'Nemesapáti',
                'core_counties_id' => 19,
            ),
            168 => 
            array (
                'id' => 2669,
                'name' => 'Alsónemesapáti',
                'core_counties_id' => 19,
            ),
            169 => 
            array (
                'id' => 2670,
                'name' => 'Nemessándorháza',
                'core_counties_id' => 19,
            ),
            170 => 
            array (
                'id' => 2671,
                'name' => 'Búcsúszentlászló',
                'core_counties_id' => 19,
            ),
            171 => 
            array (
                'id' => 2672,
                'name' => 'Nemesszentandrás',
                'core_counties_id' => 19,
            ),
            172 => 
            array (
                'id' => 2673,
                'name' => 'Kisbucsa',
                'core_counties_id' => 19,
            ),
            173 => 
            array (
                'id' => 2674,
                'name' => 'Nemeshetés',
                'core_counties_id' => 19,
            ),
            174 => 
            array (
                'id' => 2675,
                'name' => 'Pölöske',
                'core_counties_id' => 19,
            ),
            175 => 
            array (
                'id' => 2676,
                'name' => 'Vöckönd',
                'core_counties_id' => 19,
            ),
            176 => 
            array (
                'id' => 2677,
                'name' => 'Kemendollár',
                'core_counties_id' => 19,
            ),
            177 => 
            array (
                'id' => 2678,
                'name' => 'Gyűrűs',
                'core_counties_id' => 19,
            ),
            178 => 
            array (
                'id' => 2679,
                'name' => 'Pókaszepetk',
                'core_counties_id' => 19,
            ),
            179 => 
            array (
                'id' => 2680,
                'name' => 'Zalaistvánd',
                'core_counties_id' => 19,
            ),
            180 => 
            array (
                'id' => 2681,
                'name' => 'Bezeréd',
                'core_counties_id' => 19,
            ),
            181 => 
            array (
                'id' => 2682,
                'name' => 'Orbányosfa',
                'core_counties_id' => 19,
            ),
            182 => 
            array (
                'id' => 2683,
                'name' => 'Almásháza',
                'core_counties_id' => 19,
            ),
            183 => 
            array (
                'id' => 2684,
                'name' => 'Nagykapornak',
                'core_counties_id' => 19,
            ),
            184 => 
            array (
                'id' => 2685,
                'name' => 'Misefa',
                'core_counties_id' => 19,
            ),
            185 => 
            array (
                'id' => 2686,
                'name' => 'Padár',
                'core_counties_id' => 19,
            ),
            186 => 
            array (
                'id' => 2687,
                'name' => 'Zalaszentmihály',
                'core_counties_id' => 19,
            ),
            187 => 
            array (
                'id' => 2688,
                'name' => 'Bocfölde',
                'core_counties_id' => 19,
            ),
            188 => 
            array (
                'id' => 2689,
                'name' => 'Csatár',
                'core_counties_id' => 19,
            ),
            189 => 
            array (
                'id' => 2690,
                'name' => 'Sárhida',
                'core_counties_id' => 19,
            ),
            190 => 
            array (
                'id' => 2691,
                'name' => 'Bak',
                'core_counties_id' => 19,
            ),
            191 => 
            array (
                'id' => 2692,
                'name' => 'Tófej',
                'core_counties_id' => 19,
            ),
            192 => 
            array (
                'id' => 2693,
                'name' => 'Baktüttös',
                'core_counties_id' => 19,
            ),
            193 => 
            array (
                'id' => 2694,
                'name' => 'Pusztaederics',
                'core_counties_id' => 19,
            ),
            194 => 
            array (
                'id' => 2695,
                'name' => 'Szentkozmadombja',
                'core_counties_id' => 19,
            ),
            195 => 
            array (
                'id' => 2696,
                'name' => 'Zalatárnok',
                'core_counties_id' => 19,
            ),
            196 => 
            array (
                'id' => 2697,
                'name' => 'Barlahida',
                'core_counties_id' => 19,
            ),
            197 => 
            array (
                'id' => 2698,
                'name' => 'Nova',
                'core_counties_id' => 19,
            ),
            198 => 
            array (
                'id' => 2699,
                'name' => 'Mikekarácsonyfa',
                'core_counties_id' => 19,
            ),
            199 => 
            array (
                'id' => 2700,
                'name' => 'Gutorfölde',
                'core_counties_id' => 19,
            ),
            200 => 
            array (
                'id' => 2701,
                'name' => 'Csertalakos',
                'core_counties_id' => 19,
            ),
            201 => 
            array (
                'id' => 2702,
                'name' => 'Szentpéterfölde',
                'core_counties_id' => 19,
            ),
            202 => 
            array (
                'id' => 2703,
                'name' => 'Ortaháza',
                'core_counties_id' => 19,
            ),
            203 => 
            array (
                'id' => 2704,
                'name' => 'Kányavár',
                'core_counties_id' => 19,
            ),
            204 => 
            array (
                'id' => 2705,
                'name' => 'Pördefölde',
                'core_counties_id' => 19,
            ),
            205 => 
            array (
                'id' => 2706,
                'name' => 'Páka',
                'core_counties_id' => 19,
            ),
            206 => 
            array (
                'id' => 2707,
                'name' => 'Csömödér',
                'core_counties_id' => 19,
            ),
            207 => 
            array (
                'id' => 2708,
                'name' => 'Kissziget',
                'core_counties_id' => 19,
            ),
            208 => 
            array (
                'id' => 2709,
                'name' => 'Hernyék',
                'core_counties_id' => 19,
            ),
            209 => 
            array (
                'id' => 2710,
                'name' => 'Zebecke',
                'core_counties_id' => 19,
            ),
            210 => 
            array (
                'id' => 2711,
                'name' => 'Iklódbördőce',
                'core_counties_id' => 19,
            ),
            211 => 
            array (
                'id' => 2712,
                'name' => 'Lenti',
                'core_counties_id' => 19,
            ),
            212 => 
            array (
                'id' => 2713,
                'name' => 'Bödeháza',
                'core_counties_id' => 19,
            ),
            213 => 
            array (
                'id' => 2714,
                'name' => 'Zalaszombatfa',
                'core_counties_id' => 19,
            ),
            214 => 
            array (
                'id' => 2715,
                'name' => 'Gáborjánháza',
                'core_counties_id' => 19,
            ),
            215 => 
            array (
                'id' => 2716,
                'name' => 'Szijártóháza',
                'core_counties_id' => 19,
            ),
            216 => 
            array (
                'id' => 2717,
                'name' => 'Zalabaksa',
                'core_counties_id' => 19,
            ),
            217 => 
            array (
                'id' => 2718,
                'name' => 'Kerkabarabás',
                'core_counties_id' => 19,
            ),
            218 => 
            array (
                'id' => 2719,
                'name' => 'Felsőszenterzsébet',
                'core_counties_id' => 19,
            ),
            219 => 
            array (
                'id' => 2720,
                'name' => 'Magyarföld',
                'core_counties_id' => 19,
            ),
            220 => 
            array (
                'id' => 2721,
                'name' => 'Alsószenterzsébet',
                'core_counties_id' => 19,
            ),
            221 => 
            array (
                'id' => 2722,
                'name' => 'Ramocsa',
                'core_counties_id' => 19,
            ),
            222 => 
            array (
                'id' => 2723,
                'name' => 'Csesztreg',
                'core_counties_id' => 19,
            ),
            223 => 
            array (
                'id' => 2724,
                'name' => 'Kerkafalva',
                'core_counties_id' => 19,
            ),
            224 => 
            array (
                'id' => 2725,
                'name' => 'Kerkakutas',
                'core_counties_id' => 19,
            ),
            225 => 
            array (
                'id' => 2726,
                'name' => 'Szentgyörgyvölgy',
                'core_counties_id' => 19,
            ),
            226 => 
            array (
                'id' => 2727,
                'name' => 'Nemesnép',
                'core_counties_id' => 19,
            ),
            227 => 
            array (
                'id' => 2728,
                'name' => 'Márokföld',
                'core_counties_id' => 19,
            ),
            228 => 
            array (
                'id' => 2729,
                'name' => 'Baglad',
                'core_counties_id' => 19,
            ),
            229 => 
            array (
                'id' => 2730,
                'name' => 'Lendvajakabfa',
                'core_counties_id' => 19,
            ),
            230 => 
            array (
                'id' => 2731,
                'name' => 'Resznek',
                'core_counties_id' => 19,
            ),
            231 => 
            array (
                'id' => 2732,
                'name' => 'Belsősárd',
                'core_counties_id' => 19,
            ),
            232 => 
            array (
                'id' => 2733,
                'name' => 'Lendvadedes',
                'core_counties_id' => 19,
            ),
            233 => 
            array (
                'id' => 2734,
                'name' => 'Gosztola',
                'core_counties_id' => 19,
            ),
            234 => 
            array (
                'id' => 2735,
                'name' => 'Rédics',
                'core_counties_id' => 19,
            ),
            235 => 
            array (
                'id' => 2736,
                'name' => 'Külsősárd',
                'core_counties_id' => 19,
            ),
            236 => 
            array (
                'id' => 2737,
                'name' => 'Gellénháza',
                'core_counties_id' => 19,
            ),
            237 => 
            array (
                'id' => 2738,
                'name' => 'Lickóvadamos',
                'core_counties_id' => 19,
            ),
            238 => 
            array (
                'id' => 2739,
                'name' => 'Babosdöbréte',
                'core_counties_id' => 19,
            ),
            239 => 
            array (
                'id' => 2740,
                'name' => 'Nagylengyel',
                'core_counties_id' => 19,
            ),
            240 => 
            array (
                'id' => 2741,
                'name' => 'Ormándlak',
                'core_counties_id' => 19,
            ),
            241 => 
            array (
                'id' => 2742,
                'name' => 'Iborfia',
                'core_counties_id' => 19,
            ),
            242 => 
            array (
                'id' => 2743,
                'name' => 'Petrikeresztúr',
                'core_counties_id' => 19,
            ),
            243 => 
            array (
                'id' => 2744,
                'name' => 'Gombosszeg',
                'core_counties_id' => 19,
            ),
            244 => 
            array (
                'id' => 2745,
                'name' => 'Becsvölgye',
                'core_counties_id' => 19,
            ),
            245 => 
            array (
                'id' => 2746,
                'name' => 'Pusztaapáti',
                'core_counties_id' => 19,
            ),
            246 => 
            array (
                'id' => 2747,
                'name' => 'Szilvágy',
                'core_counties_id' => 19,
            ),
            247 => 
            array (
                'id' => 2748,
                'name' => 'Pórszombat',
                'core_counties_id' => 19,
            ),
            248 => 
            array (
                'id' => 2749,
                'name' => 'Kálócfa',
                'core_counties_id' => 19,
            ),
            249 => 
            array (
                'id' => 2750,
                'name' => 'Kozmadombja',
                'core_counties_id' => 19,
            ),
            250 => 
            array (
                'id' => 2751,
                'name' => 'Dobronhegy',
                'core_counties_id' => 19,
            ),
            251 => 
            array (
                'id' => 2752,
                'name' => 'Pálfiszeg',
                'core_counties_id' => 19,
            ),
            252 => 
            array (
                'id' => 2753,
                'name' => 'Hottó',
                'core_counties_id' => 19,
            ),
            253 => 
            array (
                'id' => 2754,
                'name' => 'Teskánd',
                'core_counties_id' => 19,
            ),
            254 => 
            array (
                'id' => 2755,
                'name' => 'Böde',
                'core_counties_id' => 19,
            ),
            255 => 
            array (
                'id' => 2756,
                'name' => 'Zalaboldogfa',
                'core_counties_id' => 19,
            ),
            256 => 
            array (
                'id' => 2757,
                'name' => 'Boncodfölde',
                'core_counties_id' => 19,
            ),
            257 => 
            array (
                'id' => 2758,
                'name' => 'Bagod',
                'core_counties_id' => 19,
            ),
            258 => 
            array (
                'id' => 2759,
                'name' => 'Hagyárosbörönd',
                'core_counties_id' => 19,
            ),
            259 => 
            array (
                'id' => 2760,
                'name' => 'Zalaszentgyörgy',
                'core_counties_id' => 19,
            ),
            260 => 
            array (
                'id' => 2761,
                'name' => 'Kávás',
                'core_counties_id' => 19,
            ),
            261 => 
            array (
                'id' => 2762,
                'name' => 'Keménfa',
                'core_counties_id' => 19,
            ),
            262 => 
            array (
                'id' => 2763,
                'name' => 'Salomvár',
                'core_counties_id' => 19,
            ),
            263 => 
            array (
                'id' => 2764,
                'name' => 'Zalacséb',
                'core_counties_id' => 19,
            ),
            264 => 
            array (
                'id' => 2765,
                'name' => 'Zalaháshágy',
                'core_counties_id' => 19,
            ),
            265 => 
            array (
                'id' => 2766,
                'name' => 'Vaspör',
                'core_counties_id' => 19,
            ),
            266 => 
            array (
                'id' => 2767,
                'name' => 'Ozmánbük',
                'core_counties_id' => 19,
            ),
            267 => 
            array (
                'id' => 2768,
                'name' => 'Csöde',
                'core_counties_id' => 19,
            ),
            268 => 
            array (
                'id' => 2769,
                'name' => 'Zalalövő',
                'core_counties_id' => 19,
            ),
            269 => 
            array (
                'id' => 2770,
                'name' => 'Győr',
                'core_counties_id' => 7,
            ),
            270 => 
            array (
                'id' => 2771,
                'name' => 'Vámosszabadi',
                'core_counties_id' => 7,
            ),
            271 => 
            array (
                'id' => 2772,
                'name' => 'Vének',
                'core_counties_id' => 7,
            ),
            272 => 
            array (
                'id' => 2773,
                'name' => 'Kisbajcs',
                'core_counties_id' => 7,
            ),
            273 => 
            array (
                'id' => 2774,
                'name' => 'Nagybajcs',
                'core_counties_id' => 7,
            ),
            274 => 
            array (
                'id' => 2775,
                'name' => 'Gönyű',
                'core_counties_id' => 7,
            ),
            275 => 
            array (
                'id' => 2776,
                'name' => 'Nagyszentjános',
                'core_counties_id' => 7,
            ),
            276 => 
            array (
                'id' => 2777,
                'name' => 'Bőny',
                'core_counties_id' => 7,
            ),
            277 => 
            array (
                'id' => 2778,
                'name' => 'Rétalap',
                'core_counties_id' => 7,
            ),
            278 => 
            array (
                'id' => 2779,
                'name' => 'Győrújbarát',
                'core_counties_id' => 7,
            ),
            279 => 
            array (
                'id' => 2780,
                'name' => 'Nyúl',
                'core_counties_id' => 7,
            ),
            280 => 
            array (
                'id' => 2781,
                'name' => 'Écs',
                'core_counties_id' => 7,
            ),
            281 => 
            array (
                'id' => 2782,
                'name' => 'Győrság',
                'core_counties_id' => 7,
            ),
            282 => 
            array (
                'id' => 2783,
                'name' => 'Pázmándfalu',
                'core_counties_id' => 7,
            ),
            283 => 
            array (
                'id' => 2784,
                'name' => 'Töltéstava',
                'core_counties_id' => 7,
            ),
            284 => 
            array (
                'id' => 2785,
                'name' => 'Bakonypéterd',
                'core_counties_id' => 18,
            ),
            285 => 
            array (
                'id' => 2786,
                'name' => 'Lázi',
                'core_counties_id' => 18,
            ),
            286 => 
            array (
                'id' => 2787,
                'name' => 'Pannonhalma',
                'core_counties_id' => 7,
            ),
            287 => 
            array (
                'id' => 2788,
                'name' => 'Ravazd',
                'core_counties_id' => 7,
            ),
            288 => 
            array (
                'id' => 2789,
                'name' => 'Tarjánpuszta',
                'core_counties_id' => 7,
            ),
            289 => 
            array (
                'id' => 2790,
                'name' => 'Győrasszonyfa',
                'core_counties_id' => 7,
            ),
            290 => 
            array (
                'id' => 2791,
                'name' => 'Tápszentmiklós',
                'core_counties_id' => 7,
            ),
            291 => 
            array (
                'id' => 2792,
                'name' => 'Táp',
                'core_counties_id' => 7,
            ),
            292 => 
            array (
                'id' => 2793,
                'name' => 'Nyalka',
                'core_counties_id' => 7,
            ),
            293 => 
            array (
                'id' => 2794,
                'name' => 'Mezőörs',
                'core_counties_id' => 7,
            ),
            294 => 
            array (
                'id' => 2795,
                'name' => 'Pér',
                'core_counties_id' => 7,
            ),
            295 => 
            array (
                'id' => 2796,
                'name' => 'Tét',
                'core_counties_id' => 7,
            ),
            296 => 
            array (
                'id' => 2797,
                'name' => 'Tényő',
                'core_counties_id' => 7,
            ),
            297 => 
            array (
                'id' => 2798,
                'name' => 'Sokorópátka',
                'core_counties_id' => 7,
            ),
            298 => 
            array (
                'id' => 2799,
                'name' => 'Koroncó',
                'core_counties_id' => 7,
            ),
            299 => 
            array (
                'id' => 2800,
                'name' => 'Győrszemere',
                'core_counties_id' => 7,
            ),
            300 => 
            array (
                'id' => 2801,
                'name' => 'Felpéc',
                'core_counties_id' => 7,
            ),
            301 => 
            array (
                'id' => 2802,
                'name' => 'Kajárpéc',
                'core_counties_id' => 7,
            ),
            302 => 
            array (
                'id' => 2803,
                'name' => 'Gyömöre',
                'core_counties_id' => 7,
            ),
            303 => 
            array (
                'id' => 2804,
                'name' => 'Szerecseny',
                'core_counties_id' => 7,
            ),
            304 => 
            array (
                'id' => 2805,
                'name' => 'Gyarmat',
                'core_counties_id' => 7,
            ),
            305 => 
            array (
                'id' => 2806,
                'name' => 'Csikvánd',
                'core_counties_id' => 7,
            ),
            306 => 
            array (
                'id' => 2807,
                'name' => 'Mórichida',
                'core_counties_id' => 7,
            ),
            307 => 
            array (
                'id' => 2808,
                'name' => 'Árpás',
                'core_counties_id' => 7,
            ),
            308 => 
            array (
                'id' => 2809,
                'name' => 'Rábaszentmiklós',
                'core_counties_id' => 7,
            ),
            309 => 
            array (
                'id' => 2810,
                'name' => 'Kisbabot',
                'core_counties_id' => 7,
            ),
            310 => 
            array (
                'id' => 2811,
                'name' => 'Bodonhely',
                'core_counties_id' => 7,
            ),
            311 => 
            array (
                'id' => 2812,
                'name' => 'Rábaszentmihály',
                'core_counties_id' => 7,
            ),
            312 => 
            array (
                'id' => 2813,
                'name' => 'Rábacsécsény',
                'core_counties_id' => 7,
            ),
            313 => 
            array (
                'id' => 2814,
                'name' => 'Mérges',
                'core_counties_id' => 7,
            ),
            314 => 
            array (
                'id' => 2815,
                'name' => 'Ikrény',
                'core_counties_id' => 7,
            ),
            315 => 
            array (
                'id' => 2816,
                'name' => 'Rábapatona',
                'core_counties_id' => 7,
            ),
            316 => 
            array (
                'id' => 2817,
                'name' => 'Enese',
                'core_counties_id' => 7,
            ),
            317 => 
            array (
                'id' => 2818,
                'name' => 'Kóny',
                'core_counties_id' => 7,
            ),
            318 => 
            array (
                'id' => 2819,
                'name' => 'Bágyogszovát',
                'core_counties_id' => 7,
            ),
            319 => 
            array (
                'id' => 2820,
                'name' => 'Rábapordány',
                'core_counties_id' => 7,
            ),
            320 => 
            array (
                'id' => 2821,
                'name' => 'Dör',
                'core_counties_id' => 7,
            ),
            321 => 
            array (
                'id' => 2822,
                'name' => 'Abda',
                'core_counties_id' => 7,
            ),
            322 => 
            array (
                'id' => 2823,
                'name' => 'Börcs',
                'core_counties_id' => 7,
            ),
            323 => 
            array (
                'id' => 2824,
                'name' => 'Öttevény',
                'core_counties_id' => 7,
            ),
            324 => 
            array (
                'id' => 2825,
                'name' => 'Mosonszentmiklós',
                'core_counties_id' => 7,
            ),
            325 => 
            array (
                'id' => 2826,
                'name' => 'Lébény',
                'core_counties_id' => 7,
            ),
            326 => 
            array (
                'id' => 2827,
                'name' => 'Győrsövényház',
                'core_counties_id' => 7,
            ),
            327 => 
            array (
                'id' => 2828,
                'name' => 'Bezi',
                'core_counties_id' => 7,
            ),
            328 => 
            array (
                'id' => 2829,
                'name' => 'Fehértó',
                'core_counties_id' => 7,
            ),
            329 => 
            array (
                'id' => 2830,
                'name' => 'Markotabödöge',
                'core_counties_id' => 7,
            ),
            330 => 
            array (
                'id' => 2831,
                'name' => 'Cakóháza',
                'core_counties_id' => 7,
            ),
            331 => 
            array (
                'id' => 2832,
                'name' => 'Rábcakapi',
                'core_counties_id' => 7,
            ),
            332 => 
            array (
                'id' => 2833,
                'name' => 'Tárnokréti',
                'core_counties_id' => 7,
            ),
            333 => 
            array (
                'id' => 2834,
                'name' => 'Bősárkány',
                'core_counties_id' => 7,
            ),
            334 => 
            array (
                'id' => 2835,
                'name' => 'Acsalag',
                'core_counties_id' => 7,
            ),
            335 => 
            array (
                'id' => 2836,
                'name' => 'Maglóca',
                'core_counties_id' => 7,
            ),
            336 => 
            array (
                'id' => 2837,
                'name' => 'Barbacs',
                'core_counties_id' => 7,
            ),
            337 => 
            array (
                'id' => 2838,
                'name' => 'Győrújfalu',
                'core_counties_id' => 7,
            ),
            338 => 
            array (
                'id' => 2839,
                'name' => 'Győrzámoly',
                'core_counties_id' => 7,
            ),
            339 => 
            array (
                'id' => 2840,
                'name' => 'Győrladamér',
                'core_counties_id' => 7,
            ),
            340 => 
            array (
                'id' => 2841,
                'name' => 'Dunaszeg',
                'core_counties_id' => 7,
            ),
            341 => 
            array (
                'id' => 2842,
                'name' => 'Dunaszentpál',
                'core_counties_id' => 7,
            ),
            342 => 
            array (
                'id' => 2843,
                'name' => 'Mecsér',
                'core_counties_id' => 7,
            ),
            343 => 
            array (
                'id' => 2844,
                'name' => 'Ásványráró',
                'core_counties_id' => 7,
            ),
            344 => 
            array (
                'id' => 2845,
                'name' => 'Hédervár',
                'core_counties_id' => 7,
            ),
            345 => 
            array (
                'id' => 2846,
                'name' => 'Kimle',
                'core_counties_id' => 7,
            ),
            346 => 
            array (
                'id' => 2847,
                'name' => 'Károlyháza',
                'core_counties_id' => 7,
            ),
            347 => 
            array (
                'id' => 2848,
                'name' => 'Károlyháza',
                'core_counties_id' => 7,
            ),
            348 => 
            array (
                'id' => 2849,
                'name' => 'Kunsziget',
                'core_counties_id' => 7,
            ),
            349 => 
            array (
                'id' => 2850,
                'name' => 'Mosonmagyaróvár',
                'core_counties_id' => 7,
            ),
            350 => 
            array (
                'id' => 2851,
                'name' => 'Feketeerdő',
                'core_counties_id' => 7,
            ),
            351 => 
            array (
                'id' => 2852,
                'name' => 'Levél',
                'core_counties_id' => 7,
            ),
            352 => 
            array (
                'id' => 2853,
                'name' => 'Hegyeshalom',
                'core_counties_id' => 7,
            ),
            353 => 
            array (
                'id' => 2854,
                'name' => 'Bezenye',
                'core_counties_id' => 7,
            ),
            354 => 
            array (
                'id' => 2855,
                'name' => 'Rajka',
                'core_counties_id' => 7,
            ),
            355 => 
            array (
                'id' => 2856,
                'name' => 'Dunakiliti',
                'core_counties_id' => 7,
            ),
            356 => 
            array (
                'id' => 2857,
                'name' => 'Dunasziget',
                'core_counties_id' => 7,
            ),
            357 => 
            array (
                'id' => 2858,
                'name' => 'Halászi',
                'core_counties_id' => 7,
            ),
            358 => 
            array (
                'id' => 2859,
                'name' => 'Máriakálnok',
                'core_counties_id' => 7,
            ),
            359 => 
            array (
                'id' => 2860,
                'name' => 'Darnózseli',
                'core_counties_id' => 7,
            ),
            360 => 
            array (
                'id' => 2861,
                'name' => 'Lipót',
                'core_counties_id' => 7,
            ),
            361 => 
            array (
                'id' => 2862,
                'name' => 'Kisbodak',
                'core_counties_id' => 7,
            ),
            362 => 
            array (
                'id' => 2863,
                'name' => 'Dunaremete',
                'core_counties_id' => 7,
            ),
            363 => 
            array (
                'id' => 2864,
                'name' => 'Püski',
                'core_counties_id' => 7,
            ),
            364 => 
            array (
                'id' => 2865,
                'name' => 'Jánossomorja',
                'core_counties_id' => 7,
            ),
            365 => 
            array (
                'id' => 2866,
                'name' => 'Várbalog',
                'core_counties_id' => 7,
            ),
            366 => 
            array (
                'id' => 2867,
                'name' => 'Újrónafő',
                'core_counties_id' => 7,
            ),
            367 => 
            array (
                'id' => 2868,
                'name' => 'Mosonszolnok',
                'core_counties_id' => 7,
            ),
            368 => 
            array (
                'id' => 2869,
                'name' => 'Csorna',
                'core_counties_id' => 7,
            ),
            369 => 
            array (
                'id' => 2870,
                'name' => 'Pásztori',
                'core_counties_id' => 7,
            ),
            370 => 
            array (
                'id' => 2871,
                'name' => 'Szilsárkány',
                'core_counties_id' => 7,
            ),
            371 => 
            array (
                'id' => 2872,
                'name' => 'Rábacsanak',
                'core_counties_id' => 7,
            ),
            372 => 
            array (
                'id' => 2873,
                'name' => 'Egyed',
                'core_counties_id' => 7,
            ),
            373 => 
            array (
                'id' => 2874,
                'name' => 'Sobor',
                'core_counties_id' => 7,
            ),
            374 => 
            array (
                'id' => 2875,
                'name' => 'Rábaszentandrás',
                'core_counties_id' => 7,
            ),
            375 => 
            array (
                'id' => 2876,
                'name' => 'Szany',
                'core_counties_id' => 7,
            ),
            376 => 
            array (
                'id' => 2877,
                'name' => 'Farád',
                'core_counties_id' => 7,
            ),
            377 => 
            array (
                'id' => 2878,
                'name' => 'Rábatamási',
                'core_counties_id' => 7,
            ),
            378 => 
            array (
                'id' => 2879,
                'name' => 'Jobaháza',
                'core_counties_id' => 7,
            ),
            379 => 
            array (
                'id' => 2880,
                'name' => 'Potyond',
                'core_counties_id' => 7,
            ),
            380 => 
            array (
                'id' => 2881,
                'name' => 'Bogyoszló',
                'core_counties_id' => 7,
            ),
            381 => 
            array (
                'id' => 2882,
                'name' => 'Sopronnémeti',
                'core_counties_id' => 7,
            ),
            382 => 
            array (
                'id' => 2883,
                'name' => 'Szil',
                'core_counties_id' => 7,
            ),
            383 => 
            array (
                'id' => 2884,
                'name' => 'Rábasebes',
                'core_counties_id' => 7,
            ),
            384 => 
            array (
                'id' => 2885,
                'name' => 'Vág',
                'core_counties_id' => 7,
            ),
            385 => 
            array (
                'id' => 2886,
                'name' => 'Kapuvár',
                'core_counties_id' => 7,
            ),
            386 => 
            array (
                'id' => 2887,
                'name' => 'Kisfalud',
                'core_counties_id' => 7,
            ),
            387 => 
            array (
                'id' => 2888,
                'name' => 'Mihályi',
                'core_counties_id' => 7,
            ),
            388 => 
            array (
                'id' => 2889,
                'name' => 'Beled',
                'core_counties_id' => 7,
            ),
            389 => 
            array (
                'id' => 2890,
                'name' => 'Vásárosfalu',
                'core_counties_id' => 7,
            ),
            390 => 
            array (
                'id' => 2891,
                'name' => 'Edve',
                'core_counties_id' => 7,
            ),
            391 => 
            array (
                'id' => 2892,
                'name' => 'Rábakecöl',
                'core_counties_id' => 7,
            ),
            392 => 
            array (
                'id' => 2893,
                'name' => 'Páli',
                'core_counties_id' => 7,
            ),
            393 => 
            array (
                'id' => 2894,
                'name' => 'Magyarkeresztúr',
                'core_counties_id' => 7,
            ),
            394 => 
            array (
                'id' => 2895,
                'name' => 'Vadosfa',
                'core_counties_id' => 7,
            ),
            395 => 
            array (
                'id' => 2896,
                'name' => 'Zsebeháza',
                'core_counties_id' => 7,
            ),
            396 => 
            array (
                'id' => 2897,
                'name' => 'Babót',
                'core_counties_id' => 7,
            ),
            397 => 
            array (
                'id' => 2898,
                'name' => 'Veszkény',
                'core_counties_id' => 7,
            ),
            398 => 
            array (
                'id' => 2899,
                'name' => 'Szárföld',
                'core_counties_id' => 7,
            ),
            399 => 
            array (
                'id' => 2900,
                'name' => 'Osli',
                'core_counties_id' => 7,
            ),
            400 => 
            array (
                'id' => 2901,
                'name' => 'Hövej',
                'core_counties_id' => 7,
            ),
            401 => 
            array (
                'id' => 2902,
                'name' => 'Himod',
                'core_counties_id' => 7,
            ),
            402 => 
            array (
                'id' => 2903,
                'name' => 'Gyóró',
                'core_counties_id' => 7,
            ),
            403 => 
            array (
                'id' => 2904,
                'name' => 'Cirák',
                'core_counties_id' => 7,
            ),
            404 => 
            array (
                'id' => 2905,
                'name' => 'Dénesfa',
                'core_counties_id' => 7,
            ),
            405 => 
            array (
                'id' => 2906,
                'name' => 'Vitnyéd',
                'core_counties_id' => 7,
            ),
            406 => 
            array (
                'id' => 2907,
                'name' => 'Csapod',
                'core_counties_id' => 7,
            ),
            407 => 
            array (
                'id' => 2908,
                'name' => 'Pusztacsalád',
                'core_counties_id' => 7,
            ),
            408 => 
            array (
                'id' => 2909,
                'name' => 'Iván',
                'core_counties_id' => 7,
            ),
            409 => 
            array (
                'id' => 2910,
                'name' => 'Répceszemere',
                'core_counties_id' => 7,
            ),
            410 => 
            array (
                'id' => 2911,
                'name' => 'Csáfordjánosfa',
                'core_counties_id' => 7,
            ),
            411 => 
            array (
                'id' => 2912,
                'name' => 'Csér',
                'core_counties_id' => 7,
            ),
            412 => 
            array (
                'id' => 2913,
                'name' => 'Sopron',
                'core_counties_id' => 7,
            ),
            413 => 
            array (
                'id' => 2914,
                'name' => 'Fertőrákos',
                'core_counties_id' => 7,
            ),
            414 => 
            array (
                'id' => 2915,
                'name' => 'Harka',
                'core_counties_id' => 7,
            ),
            415 => 
            array (
                'id' => 2916,
                'name' => 'Ágfalva',
                'core_counties_id' => 7,
            ),
            416 => 
            array (
                'id' => 2917,
                'name' => 'Fertőd',
                'core_counties_id' => 7,
            ),
            417 => 
            array (
                'id' => 2918,
                'name' => 'Sarród',
                'core_counties_id' => 7,
            ),
            418 => 
            array (
                'id' => 2919,
                'name' => 'Fertőszéplak',
                'core_counties_id' => 7,
            ),
            419 => 
            array (
                'id' => 2920,
                'name' => 'Hegykő',
                'core_counties_id' => 7,
            ),
            420 => 
            array (
                'id' => 2921,
                'name' => 'Agyagosszergény',
                'core_counties_id' => 7,
            ),
            421 => 
            array (
                'id' => 2922,
                'name' => 'Fertőendréd',
                'core_counties_id' => 7,
            ),
            422 => 
            array (
                'id' => 2923,
                'name' => 'Petőháza',
                'core_counties_id' => 7,
            ),
            423 => 
            array (
                'id' => 2924,
                'name' => 'Fertőszentmiklós',
                'core_counties_id' => 7,
            ),
            424 => 
            array (
                'id' => 2925,
                'name' => 'Röjtökmuzsaj',
                'core_counties_id' => 7,
            ),
            425 => 
            array (
                'id' => 2926,
                'name' => 'Ebergőc',
                'core_counties_id' => 7,
            ),
            426 => 
            array (
                'id' => 2927,
                'name' => 'Lövő',
                'core_counties_id' => 7,
            ),
            427 => 
            array (
                'id' => 2928,
                'name' => 'Völcsej',
                'core_counties_id' => 7,
            ),
            428 => 
            array (
                'id' => 2929,
                'name' => 'Sopronhorpács',
                'core_counties_id' => 7,
            ),
            429 => 
            array (
                'id' => 2930,
                'name' => 'Und',
                'core_counties_id' => 7,
            ),
            430 => 
            array (
                'id' => 2931,
                'name' => 'Nemeskér',
                'core_counties_id' => 7,
            ),
            431 => 
            array (
                'id' => 2932,
                'name' => 'Újkér',
                'core_counties_id' => 7,
            ),
            432 => 
            array (
                'id' => 2933,
                'name' => 'Egyházasfalu',
                'core_counties_id' => 7,
            ),
            433 => 
            array (
                'id' => 2934,
                'name' => 'Szakony',
                'core_counties_id' => 7,
            ),
            434 => 
            array (
                'id' => 2935,
                'name' => 'Gyalóka',
                'core_counties_id' => 7,
            ),
            435 => 
            array (
                'id' => 2936,
                'name' => 'Répcevis',
                'core_counties_id' => 7,
            ),
            436 => 
            array (
                'id' => 2937,
                'name' => 'Zsira',
                'core_counties_id' => 7,
            ),
            437 => 
            array (
                'id' => 2938,
                'name' => 'Pinnye',
                'core_counties_id' => 7,
            ),
            438 => 
            array (
                'id' => 2939,
                'name' => 'Nagylózs',
                'core_counties_id' => 7,
            ),
            439 => 
            array (
                'id' => 2940,
                'name' => 'Sopronkövesd',
                'core_counties_id' => 7,
            ),
            440 => 
            array (
                'id' => 2941,
                'name' => 'Pereszteg',
                'core_counties_id' => 7,
            ),
            441 => 
            array (
                'id' => 2942,
                'name' => 'Nagycenk',
                'core_counties_id' => 7,
            ),
            442 => 
            array (
                'id' => 2943,
                'name' => 'Hidegség',
                'core_counties_id' => 7,
            ),
            443 => 
            array (
                'id' => 2944,
                'name' => 'Fertőhomok',
                'core_counties_id' => 7,
            ),
            444 => 
            array (
                'id' => 2945,
                'name' => 'Fertőboz',
                'core_counties_id' => 7,
            ),
            445 => 
            array (
                'id' => 2946,
                'name' => 'Kópháza',
                'core_counties_id' => 7,
            ),
            446 => 
            array (
                'id' => 2947,
                'name' => 'Celldömölk',
                'core_counties_id' => 17,
            ),
            447 => 
            array (
                'id' => 2948,
                'name' => 'Kemenesmihályfa',
                'core_counties_id' => 17,
            ),
            448 => 
            array (
                'id' => 2949,
                'name' => 'Ostffyasszonyfa',
                'core_counties_id' => 17,
            ),
            449 => 
            array (
                'id' => 2950,
                'name' => 'Csönge',
                'core_counties_id' => 17,
            ),
            450 => 
            array (
                'id' => 2951,
                'name' => 'Kenyeri',
                'core_counties_id' => 17,
            ),
            451 => 
            array (
                'id' => 2952,
                'name' => 'Pápoc',
                'core_counties_id' => 17,
            ),
            452 => 
            array (
                'id' => 2953,
                'name' => 'Vönöck',
                'core_counties_id' => 17,
            ),
            453 => 
            array (
                'id' => 2954,
                'name' => 'Kemenessömjén',
                'core_counties_id' => 17,
            ),
            454 => 
            array (
                'id' => 2955,
                'name' => 'Kemenesszentmárton',
                'core_counties_id' => 17,
            ),
            455 => 
            array (
                'id' => 2956,
                'name' => 'Kemenesmagasi',
                'core_counties_id' => 17,
            ),
            456 => 
            array (
                'id' => 2957,
                'name' => 'Szergény',
                'core_counties_id' => 17,
            ),
            457 => 
            array (
                'id' => 2958,
                'name' => 'Mersevát',
                'core_counties_id' => 17,
            ),
            458 => 
            array (
                'id' => 2959,
                'name' => 'Külsővat',
                'core_counties_id' => 18,
            ),
            459 => 
            array (
                'id' => 2960,
                'name' => 'Nemesszalók',
                'core_counties_id' => 18,
            ),
            460 => 
            array (
                'id' => 2961,
                'name' => 'Vinár',
                'core_counties_id' => 18,
            ),
            461 => 
            array (
                'id' => 2962,
                'name' => 'Marcalgergelyi',
                'core_counties_id' => 18,
            ),
            462 => 
            array (
                'id' => 2963,
                'name' => 'Vinár',
                'core_counties_id' => 17,
            ),
            463 => 
            array (
                'id' => 2964,
                'name' => 'Nemeskocs',
                'core_counties_id' => 17,
            ),
            464 => 
            array (
                'id' => 2965,
                'name' => 'Boba',
                'core_counties_id' => 17,
            ),
            465 => 
            array (
                'id' => 2966,
                'name' => 'Kemenespálfa',
                'core_counties_id' => 17,
            ),
            466 => 
            array (
                'id' => 2967,
                'name' => 'Jánosháza',
                'core_counties_id' => 17,
            ),
            467 => 
            array (
                'id' => 2968,
                'name' => 'Karakó',
                'core_counties_id' => 17,
            ),
            468 => 
            array (
                'id' => 2969,
                'name' => 'Nemeskeresztúr',
                'core_counties_id' => 17,
            ),
            469 => 
            array (
                'id' => 2970,
                'name' => 'Keléd',
                'core_counties_id' => 17,
            ),
            470 => 
            array (
                'id' => 2971,
                'name' => 'Mesteri',
                'core_counties_id' => 17,
            ),
            471 => 
            array (
                'id' => 2972,
                'name' => 'Vásárosmiske',
                'core_counties_id' => 17,
            ),
            472 => 
            array (
                'id' => 2973,
                'name' => 'Köcsk',
                'core_counties_id' => 17,
            ),
            473 => 
            array (
                'id' => 2974,
                'name' => 'Kemeneskápolna',
                'core_counties_id' => 17,
            ),
            474 => 
            array (
                'id' => 2975,
                'name' => 'Borgáta',
                'core_counties_id' => 17,
            ),
            475 => 
            array (
                'id' => 2976,
                'name' => 'Egyházashetye',
                'core_counties_id' => 17,
            ),
            476 => 
            array (
                'id' => 2977,
                'name' => 'Kissomlyó',
                'core_counties_id' => 17,
            ),
            477 => 
            array (
                'id' => 2978,
                'name' => 'Duka',
                'core_counties_id' => 17,
            ),
            478 => 
            array (
                'id' => 2979,
                'name' => 'Nagysimonyi',
                'core_counties_id' => 17,
            ),
            479 => 
            array (
                'id' => 2980,
                'name' => 'Tokorcs',
                'core_counties_id' => 17,
            ),
            480 => 
            array (
                'id' => 2981,
                'name' => 'Sárvár',
                'core_counties_id' => 17,
            ),
            481 => 
            array (
                'id' => 2982,
                'name' => 'Csénye',
                'core_counties_id' => 17,
            ),
            482 => 
            array (
                'id' => 2983,
                'name' => 'Porpác',
                'core_counties_id' => 17,
            ),
            483 => 
            array (
                'id' => 2984,
                'name' => 'Bögöt',
                'core_counties_id' => 17,
            ),
            484 => 
            array (
                'id' => 2985,
                'name' => 'Ölbő',
                'core_counties_id' => 17,
            ),
            485 => 
            array (
                'id' => 2986,
                'name' => 'Szeleste',
                'core_counties_id' => 17,
            ),
            486 => 
            array (
                'id' => 2987,
                'name' => 'Répceszentgyörgy',
                'core_counties_id' => 17,
            ),
            487 => 
            array (
                'id' => 2988,
                'name' => 'Chernelházadamonya',
                'core_counties_id' => 17,
            ),
            488 => 
            array (
                'id' => 2989,
                'name' => 'Bő',
                'core_counties_id' => 17,
            ),
            489 => 
            array (
                'id' => 2990,
                'name' => 'Gór',
                'core_counties_id' => 17,
            ),
            490 => 
            array (
                'id' => 2991,
                'name' => 'Hegyfalu',
                'core_counties_id' => 17,
            ),
            491 => 
            array (
                'id' => 2992,
                'name' => 'Sajtoskál',
                'core_counties_id' => 17,
            ),
            492 => 
            array (
                'id' => 2993,
                'name' => 'Simaság',
                'core_counties_id' => 17,
            ),
            493 => 
            array (
                'id' => 2994,
                'name' => 'Iklanberény',
                'core_counties_id' => 17,
            ),
            494 => 
            array (
                'id' => 2995,
                'name' => 'Lócs',
                'core_counties_id' => 17,
            ),
            495 => 
            array (
                'id' => 2996,
                'name' => 'Zsédeny',
                'core_counties_id' => 17,
            ),
            496 => 
            array (
                'id' => 2997,
                'name' => 'Pósfa',
                'core_counties_id' => 17,
            ),
            497 => 
            array (
                'id' => 2998,
                'name' => 'Rábapaty',
                'core_counties_id' => 17,
            ),
            498 => 
            array (
                'id' => 2999,
                'name' => 'Jákfa',
                'core_counties_id' => 17,
            ),
            499 => 
            array (
                'id' => 3000,
                'name' => 'Uraiújfalu',
                'core_counties_id' => 17,
            ),
        ));
        \DB::table('core_cities')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'name' => 'Nick',
                'core_counties_id' => 17,
            ),
            1 => 
            array (
                'id' => 3002,
                'name' => 'Répcelak',
                'core_counties_id' => 17,
            ),
            2 => 
            array (
                'id' => 3003,
                'name' => 'Csánig',
                'core_counties_id' => 17,
            ),
            3 => 
            array (
                'id' => 3004,
                'name' => 'Vasegerszeg',
                'core_counties_id' => 17,
            ),
            4 => 
            array (
                'id' => 3005,
                'name' => 'Tompaládony',
                'core_counties_id' => 17,
            ),
            5 => 
            array (
                'id' => 3006,
                'name' => 'Mesterháza',
                'core_counties_id' => 17,
            ),
            6 => 
            array (
                'id' => 3007,
                'name' => 'Nemesládony',
                'core_counties_id' => 17,
            ),
            7 => 
            array (
                'id' => 3008,
                'name' => 'Nagygeresd',
                'core_counties_id' => 17,
            ),
            8 => 
            array (
                'id' => 3009,
                'name' => 'Vámoscsalád',
                'core_counties_id' => 17,
            ),
            9 => 
            array (
                'id' => 3010,
                'name' => 'Sitke',
                'core_counties_id' => 17,
            ),
            10 => 
            array (
                'id' => 3011,
                'name' => 'Gérce',
                'core_counties_id' => 17,
            ),
            11 => 
            array (
                'id' => 3012,
                'name' => 'Káld',
                'core_counties_id' => 17,
            ),
            12 => 
            array (
                'id' => 3013,
                'name' => 'Vashosszúfalu',
                'core_counties_id' => 17,
            ),
            13 => 
            array (
                'id' => 3014,
                'name' => 'Bögöte',
                'core_counties_id' => 17,
            ),
            14 => 
            array (
                'id' => 3015,
                'name' => 'Hosszúpereszteg',
                'core_counties_id' => 17,
            ),
            15 => 
            array (
                'id' => 3016,
                'name' => 'Sótony',
                'core_counties_id' => 17,
            ),
            16 => 
            array (
                'id' => 3017,
                'name' => 'Nyőgér',
                'core_counties_id' => 17,
            ),
            17 => 
            array (
                'id' => 3018,
                'name' => 'Bejcgyertyános',
                'core_counties_id' => 17,
            ),
            18 => 
            array (
                'id' => 3019,
                'name' => 'Egervölgy',
                'core_counties_id' => 17,
            ),
            19 => 
            array (
                'id' => 3020,
                'name' => 'Szemenye',
                'core_counties_id' => 17,
            ),
            20 => 
            array (
                'id' => 3021,
                'name' => 'Szombathely',
                'core_counties_id' => 17,
            ),
            21 => 
            array (
                'id' => 3022,
                'name' => 'Gencsapáti',
                'core_counties_id' => 17,
            ),
            22 => 
            array (
                'id' => 3023,
                'name' => 'Perenye',
                'core_counties_id' => 17,
            ),
            23 => 
            array (
                'id' => 3024,
                'name' => 'Lukácsháza',
                'core_counties_id' => 17,
            ),
            24 => 
            array (
                'id' => 3025,
                'name' => 'Gyöngyösfalu',
                'core_counties_id' => 17,
            ),
            25 => 
            array (
                'id' => 3026,
                'name' => 'Kőszegszerdahely',
                'core_counties_id' => 17,
            ),
            26 => 
            array (
                'id' => 3027,
                'name' => 'Cák',
                'core_counties_id' => 17,
            ),
            27 => 
            array (
                'id' => 3028,
                'name' => 'Kőszegdoroszló',
                'core_counties_id' => 17,
            ),
            28 => 
            array (
                'id' => 3029,
                'name' => 'Velem',
                'core_counties_id' => 17,
            ),
            29 => 
            array (
                'id' => 3030,
                'name' => 'Bozsok',
                'core_counties_id' => 17,
            ),
            30 => 
            array (
                'id' => 3031,
                'name' => 'Kőszeg',
                'core_counties_id' => 17,
            ),
            31 => 
            array (
                'id' => 3032,
                'name' => 'Horvátzsidány',
                'core_counties_id' => 17,
            ),
            32 => 
            array (
                'id' => 3033,
                'name' => 'Kiszsidány',
                'core_counties_id' => 17,
            ),
            33 => 
            array (
                'id' => 3034,
                'name' => 'Ólmod',
                'core_counties_id' => 17,
            ),
            34 => 
            array (
                'id' => 3035,
                'name' => 'Peresznye',
                'core_counties_id' => 17,
            ),
            35 => 
            array (
                'id' => 3036,
                'name' => 'Csepreg',
                'core_counties_id' => 17,
            ),
            36 => 
            array (
                'id' => 3037,
                'name' => 'Tormásliget',
                'core_counties_id' => 17,
            ),
            37 => 
            array (
                'id' => 3038,
                'name' => 'Bük',
                'core_counties_id' => 17,
            ),
            38 => 
            array (
                'id' => 3039,
                'name' => 'Tömörd',
                'core_counties_id' => 17,
            ),
            39 => 
            array (
                'id' => 3040,
                'name' => 'Pusztacsó',
                'core_counties_id' => 17,
            ),
            40 => 
            array (
                'id' => 3041,
                'name' => 'Kőszegpaty',
                'core_counties_id' => 17,
            ),
            41 => 
            array (
                'id' => 3042,
                'name' => 'Nemescsó',
                'core_counties_id' => 17,
            ),
            42 => 
            array (
                'id' => 3043,
                'name' => 'Pusztacsó',
                'core_counties_id' => 17,
            ),
            43 => 
            array (
                'id' => 3044,
                'name' => 'Vassurány',
                'core_counties_id' => 17,
            ),
            44 => 
            array (
                'id' => 3045,
                'name' => 'Salköveskút',
                'core_counties_id' => 17,
            ),
            45 => 
            array (
                'id' => 3046,
                'name' => 'Söpte',
                'core_counties_id' => 17,
            ),
            46 => 
            array (
                'id' => 3047,
                'name' => 'Vasasszonyfa',
                'core_counties_id' => 17,
            ),
            47 => 
            array (
                'id' => 3048,
                'name' => 'Meszlen',
                'core_counties_id' => 17,
            ),
            48 => 
            array (
                'id' => 3049,
                'name' => 'Acsád',
                'core_counties_id' => 17,
            ),
            49 => 
            array (
                'id' => 3050,
                'name' => 'Vasszilvágy',
                'core_counties_id' => 17,
            ),
            50 => 
            array (
                'id' => 3051,
                'name' => 'Vát',
                'core_counties_id' => 17,
            ),
            51 => 
            array (
                'id' => 3052,
                'name' => 'Nemesbőd',
                'core_counties_id' => 17,
            ),
            52 => 
            array (
                'id' => 3053,
                'name' => 'Vép',
                'core_counties_id' => 17,
            ),
            53 => 
            array (
                'id' => 3054,
                'name' => 'Bozzai',
                'core_counties_id' => 17,
            ),
            54 => 
            array (
                'id' => 3055,
                'name' => 'Kenéz',
                'core_counties_id' => 17,
            ),
            55 => 
            array (
                'id' => 3056,
                'name' => 'Pecöl',
                'core_counties_id' => 17,
            ),
            56 => 
            array (
                'id' => 3057,
                'name' => 'Megyehíd',
                'core_counties_id' => 17,
            ),
            57 => 
            array (
                'id' => 3058,
                'name' => 'Ikervár',
                'core_counties_id' => 17,
            ),
            58 => 
            array (
                'id' => 3059,
                'name' => 'Meggyeskovácsi',
                'core_counties_id' => 17,
            ),
            59 => 
            array (
                'id' => 3060,
                'name' => 'Táplánszentkereszt',
                'core_counties_id' => 17,
            ),
            60 => 
            array (
                'id' => 3061,
                'name' => 'Tanakajd',
                'core_counties_id' => 17,
            ),
            61 => 
            array (
                'id' => 3062,
                'name' => 'Vasszécseny',
                'core_counties_id' => 17,
            ),
            62 => 
            array (
                'id' => 3063,
                'name' => 'Csempeszkopács',
                'core_counties_id' => 17,
            ),
            63 => 
            array (
                'id' => 3064,
                'name' => 'Rábatöttös',
                'core_counties_id' => 17,
            ),
            64 => 
            array (
                'id' => 3065,
                'name' => 'Zsennye',
                'core_counties_id' => 17,
            ),
            65 => 
            array (
                'id' => 3066,
                'name' => 'Rum',
                'core_counties_id' => 17,
            ),
            66 => 
            array (
                'id' => 3067,
                'name' => 'Balogunyom',
                'core_counties_id' => 17,
            ),
            67 => 
            array (
                'id' => 3068,
                'name' => 'Kisunyom',
                'core_counties_id' => 17,
            ),
            68 => 
            array (
                'id' => 3069,
                'name' => 'Sorokpolány',
                'core_counties_id' => 17,
            ),
            69 => 
            array (
                'id' => 3070,
                'name' => 'Gyanógeregye',
                'core_counties_id' => 17,
            ),
            70 => 
            array (
                'id' => 3071,
                'name' => 'Sorkikápolna',
                'core_counties_id' => 17,
            ),
            71 => 
            array (
                'id' => 3072,
                'name' => 'Sorkifalud',
                'core_counties_id' => 17,
            ),
            72 => 
            array (
                'id' => 3073,
                'name' => 'Nemeskolta',
                'core_counties_id' => 17,
            ),
            73 => 
            array (
                'id' => 3074,
                'name' => 'Püspökmolnári',
                'core_counties_id' => 17,
            ),
            74 => 
            array (
                'id' => 3075,
                'name' => 'Rábahídvég',
                'core_counties_id' => 17,
            ),
            75 => 
            array (
                'id' => 3076,
                'name' => 'Egyházashollós',
                'core_counties_id' => 17,
            ),
            76 => 
            array (
                'id' => 3077,
                'name' => 'Nemesrempehollós',
                'core_counties_id' => 17,
            ),
            77 => 
            array (
                'id' => 3078,
                'name' => 'Egyházasrádóc',
                'core_counties_id' => 17,
            ),
            78 => 
            array (
                'id' => 3079,
                'name' => 'Rádóckölked',
                'core_counties_id' => 17,
            ),
            79 => 
            array (
                'id' => 3080,
                'name' => 'Harasztifalu',
                'core_counties_id' => 17,
            ),
            80 => 
            array (
                'id' => 3081,
                'name' => 'Nagykölked',
                'core_counties_id' => 17,
            ),
            81 => 
            array (
                'id' => 3082,
                'name' => 'Sé',
                'core_counties_id' => 17,
            ),
            82 => 
            array (
                'id' => 3083,
                'name' => 'Dozmat',
                'core_counties_id' => 17,
            ),
            83 => 
            array (
                'id' => 3084,
                'name' => 'Torony',
                'core_counties_id' => 17,
            ),
            84 => 
            array (
                'id' => 3085,
                'name' => 'Bucsu',
                'core_counties_id' => 17,
            ),
            85 => 
            array (
                'id' => 3086,
                'name' => 'Narda',
                'core_counties_id' => 17,
            ),
            86 => 
            array (
                'id' => 3087,
                'name' => 'Felsőcsatár',
                'core_counties_id' => 17,
            ),
            87 => 
            array (
                'id' => 3088,
                'name' => 'Vaskeresztes',
                'core_counties_id' => 17,
            ),
            88 => 
            array (
                'id' => 3089,
                'name' => 'Horvátlövő',
                'core_counties_id' => 17,
            ),
            89 => 
            array (
                'id' => 3090,
                'name' => 'Pornóapáti',
                'core_counties_id' => 17,
            ),
            90 => 
            array (
                'id' => 3091,
                'name' => 'Nárai',
                'core_counties_id' => 17,
            ),
            91 => 
            array (
                'id' => 3092,
                'name' => 'Ják',
                'core_counties_id' => 17,
            ),
            92 => 
            array (
                'id' => 3093,
                'name' => 'Szentpéterfa',
                'core_counties_id' => 17,
            ),
            93 => 
            array (
                'id' => 3094,
                'name' => 'Vasvár',
                'core_counties_id' => 17,
            ),
            94 => 
            array (
                'id' => 3095,
                'name' => 'Andrásfa',
                'core_counties_id' => 17,
            ),
            95 => 
            array (
                'id' => 3096,
                'name' => 'Telekes',
                'core_counties_id' => 17,
            ),
            96 => 
            array (
                'id' => 3097,
                'name' => 'Gersekarát',
                'core_counties_id' => 17,
            ),
            97 => 
            array (
                'id' => 3098,
                'name' => 'Sárfimizdó',
                'core_counties_id' => 17,
            ),
            98 => 
            array (
                'id' => 3099,
                'name' => 'Halastó',
                'core_counties_id' => 17,
            ),
            99 => 
            array (
                'id' => 3100,
                'name' => 'Hegyhátszentpéter',
                'core_counties_id' => 17,
            ),
            100 => 
            array (
                'id' => 3101,
                'name' => 'Győrvár',
                'core_counties_id' => 17,
            ),
            101 => 
            array (
                'id' => 3102,
                'name' => 'Pácsony',
                'core_counties_id' => 17,
            ),
            102 => 
            array (
                'id' => 3103,
                'name' => 'Olaszfa',
                'core_counties_id' => 17,
            ),
            103 => 
            array (
                'id' => 3104,
                'name' => 'Oszkó',
                'core_counties_id' => 17,
            ),
            104 => 
            array (
                'id' => 3105,
                'name' => 'Petőmihályfa',
                'core_counties_id' => 17,
            ),
            105 => 
            array (
                'id' => 3106,
                'name' => 'Bérbaltavár',
                'core_counties_id' => 17,
            ),
            106 => 
            array (
                'id' => 3107,
                'name' => 'Nagytilaj',
                'core_counties_id' => 17,
            ),
            107 => 
            array (
                'id' => 3108,
                'name' => 'Csehi',
                'core_counties_id' => 17,
            ),
            108 => 
            array (
                'id' => 3109,
                'name' => 'Csehimindszent',
                'core_counties_id' => 17,
            ),
            109 => 
            array (
                'id' => 3110,
                'name' => 'Mikosszéplak',
                'core_counties_id' => 17,
            ),
            110 => 
            array (
                'id' => 3111,
                'name' => 'Csipkerek',
                'core_counties_id' => 17,
            ),
            111 => 
            array (
                'id' => 3112,
                'name' => 'Kám',
                'core_counties_id' => 17,
            ),
            112 => 
            array (
                'id' => 3113,
                'name' => 'Alsóújlak',
                'core_counties_id' => 17,
            ),
            113 => 
            array (
                'id' => 3114,
                'name' => 'Körmend',
                'core_counties_id' => 17,
            ),
            114 => 
            array (
                'id' => 3115,
                'name' => 'Magyarnádalja',
                'core_counties_id' => 17,
            ),
            115 => 
            array (
                'id' => 3116,
                'name' => 'Magyarszecsőd',
                'core_counties_id' => 17,
            ),
            116 => 
            array (
                'id' => 3117,
                'name' => 'Molnaszecsőd',
                'core_counties_id' => 17,
            ),
            117 => 
            array (
                'id' => 3118,
                'name' => 'Döröske',
                'core_counties_id' => 17,
            ),
            118 => 
            array (
                'id' => 3119,
                'name' => 'Szarvaskend',
                'core_counties_id' => 17,
            ),
            119 => 
            array (
                'id' => 3120,
                'name' => 'Nagymizdó',
                'core_counties_id' => 17,
            ),
            120 => 
            array (
                'id' => 3121,
                'name' => 'Döbörhegy',
                'core_counties_id' => 17,
            ),
            121 => 
            array (
                'id' => 3122,
                'name' => 'Nádasd',
                'core_counties_id' => 17,
            ),
            122 => 
            array (
                'id' => 3123,
                'name' => 'Katafa',
                'core_counties_id' => 17,
            ),
            123 => 
            array (
                'id' => 3124,
                'name' => 'Hegyháthodász',
                'core_counties_id' => 17,
            ),
            124 => 
            array (
                'id' => 3125,
                'name' => 'Hegyhátsál',
                'core_counties_id' => 17,
            ),
            125 => 
            array (
                'id' => 3126,
                'name' => 'Halogy',
                'core_counties_id' => 17,
            ),
            126 => 
            array (
                'id' => 3127,
                'name' => 'Daraboshegy',
                'core_counties_id' => 17,
            ),
            127 => 
            array (
                'id' => 3128,
                'name' => 'Felsőmarác',
                'core_counties_id' => 17,
            ),
            128 => 
            array (
                'id' => 3129,
                'name' => 'Csákánydoroszló',
                'core_counties_id' => 17,
            ),
            129 => 
            array (
                'id' => 3130,
                'name' => 'Vasalja',
                'core_counties_id' => 17,
            ),
            130 => 
            array (
                'id' => 3131,
                'name' => 'Pinkamindszent',
                'core_counties_id' => 17,
            ),
            131 => 
            array (
                'id' => 3132,
                'name' => 'Kemestaródfa',
                'core_counties_id' => 17,
            ),
            132 => 
            array (
                'id' => 3133,
                'name' => 'Ivánc',
                'core_counties_id' => 17,
            ),
            133 => 
            array (
                'id' => 3134,
                'name' => 'Hegyhátszentmárton',
                'core_counties_id' => 17,
            ),
            134 => 
            array (
                'id' => 3135,
                'name' => 'Viszák',
                'core_counties_id' => 17,
            ),
            135 => 
            array (
                'id' => 3136,
                'name' => 'Őrimagyarósd',
                'core_counties_id' => 17,
            ),
            136 => 
            array (
                'id' => 3137,
                'name' => 'Felsőjánosfa',
                'core_counties_id' => 17,
            ),
            137 => 
            array (
                'id' => 3138,
                'name' => 'Szaknyér',
                'core_counties_id' => 17,
            ),
            138 => 
            array (
                'id' => 3139,
                'name' => 'Hegyhátszentjakab',
                'core_counties_id' => 17,
            ),
            139 => 
            array (
                'id' => 3140,
                'name' => 'Szőce',
                'core_counties_id' => 17,
            ),
            140 => 
            array (
                'id' => 3141,
                'name' => 'Kisrákos',
                'core_counties_id' => 17,
            ),
            141 => 
            array (
                'id' => 3142,
                'name' => 'Pankasz',
                'core_counties_id' => 17,
            ),
            142 => 
            array (
                'id' => 3143,
                'name' => 'Szatta',
                'core_counties_id' => 17,
            ),
            143 => 
            array (
                'id' => 3144,
                'name' => 'Nagyrákos',
                'core_counties_id' => 17,
            ),
            144 => 
            array (
                'id' => 3145,
                'name' => 'Ispánk',
                'core_counties_id' => 17,
            ),
            145 => 
            array (
                'id' => 3146,
                'name' => 'Őriszentpéter',
                'core_counties_id' => 17,
            ),
            146 => 
            array (
                'id' => 3147,
                'name' => 'Szalafő',
                'core_counties_id' => 17,
            ),
            147 => 
            array (
                'id' => 3148,
                'name' => 'Kondorfa',
                'core_counties_id' => 17,
            ),
            148 => 
            array (
                'id' => 3149,
                'name' => 'Bajánsenye',
                'core_counties_id' => 17,
            ),
            149 => 
            array (
                'id' => 3150,
                'name' => 'Kerkáskápolna',
                'core_counties_id' => 17,
            ),
            150 => 
            array (
                'id' => 3151,
                'name' => 'Kercaszomor',
                'core_counties_id' => 17,
            ),
            151 => 
            array (
                'id' => 3152,
                'name' => 'Magyarszombatfa',
                'core_counties_id' => 17,
            ),
            152 => 
            array (
                'id' => 3153,
                'name' => 'Velemér',
                'core_counties_id' => 17,
            ),
            153 => 
            array (
                'id' => 3154,
                'name' => 'Rátót',
                'core_counties_id' => 17,
            ),
            154 => 
            array (
                'id' => 3155,
                'name' => 'Gasztony',
                'core_counties_id' => 17,
            ),
            155 => 
            array (
                'id' => 3156,
                'name' => 'Nemesmedves',
                'core_counties_id' => 17,
            ),
            156 => 
            array (
                'id' => 3157,
                'name' => 'Vasszentmihály',
                'core_counties_id' => 17,
            ),
            157 => 
            array (
                'id' => 3158,
                'name' => 'Rönök',
                'core_counties_id' => 17,
            ),
            158 => 
            array (
                'id' => 3159,
                'name' => 'Rábagyarmat',
                'core_counties_id' => 17,
            ),
            159 => 
            array (
                'id' => 3160,
                'name' => 'Csörötnek',
                'core_counties_id' => 17,
            ),
            160 => 
            array (
                'id' => 3161,
                'name' => 'Magyarlak',
                'core_counties_id' => 17,
            ),
            161 => 
            array (
                'id' => 3162,
                'name' => 'Szentgotthárd',
                'core_counties_id' => 17,
            ),
            162 => 
            array (
                'id' => 3163,
                'name' => 'Apátistvánfalva',
                'core_counties_id' => 17,
            ),
            163 => 
            array (
                'id' => 3164,
                'name' => 'Kétvölgy',
                'core_counties_id' => 17,
            ),
            164 => 
            array (
                'id' => 3165,
                'name' => 'Orfalu',
                'core_counties_id' => 17,
            ),
            165 => 
            array (
                'id' => 3166,
                'name' => 'Alsószölnök',
                'core_counties_id' => 17,
            ),
            166 => 
            array (
                'id' => 3167,
                'name' => 'Szakonyfalu',
                'core_counties_id' => 17,
            ),
            167 => 
            array (
                'id' => 3168,
                'name' => 'Felsőszölnök',
                'core_counties_id' => 17,
            ),
            168 => 
            array (
                'id' => 3169,
                'name' => 'Piliscsaba',
                'core_counties_id' => 13,
            ),
            169 => 
            array (
                'id' => 3170,
                'name' => 'Pilisszentkereszt',
                'core_counties_id' => 13,
            ),
            170 => 
            array (
                'id' => 3171,
                'name' => 'Cegléd',
                'core_counties_id' => 13,
            ),
            171 => 
            array (
                'id' => 3172,
                'name' => 'Tata',
                'core_counties_id' => 11,
            ),
            172 => 
            array (
                'id' => 3173,
                'name' => 'Komárom',
                'core_counties_id' => 11,
            ),
            173 => 
            array (
                'id' => 3174,
                'name' => 'Lőrinci',
                'core_counties_id' => 9,
            ),
            174 => 
            array (
                'id' => 3175,
                'name' => 'Pásztó',
                'core_counties_id' => 12,
            ),
            175 => 
            array (
                'id' => 3176,
                'name' => 'Bátonyterenye',
                'core_counties_id' => 12,
            ),
            176 => 
            array (
                'id' => 3177,
                'name' => 'Pásztó',
                'core_counties_id' => 12,
            ),
            177 => 
            array (
                'id' => 3178,
                'name' => 'Salgótarján',
                'core_counties_id' => 12,
            ),
            178 => 
            array (
                'id' => 3179,
                'name' => 'Kazár',
                'core_counties_id' => 12,
            ),
            179 => 
            array (
                'id' => 3180,
                'name' => 'Gyöngyös',
                'core_counties_id' => 9,
            ),
            180 => 
            array (
                'id' => 3181,
                'name' => 'Mátraszentimre',
                'core_counties_id' => 9,
            ),
            181 => 
            array (
                'id' => 3182,
                'name' => 'Parád',
                'core_counties_id' => 9,
            ),
            182 => 
            array (
                'id' => 3183,
                'name' => 'Ózd',
                'core_counties_id' => 4,
            ),
            183 => 
            array (
                'id' => 3184,
                'name' => 'Edelény',
                'core_counties_id' => 4,
            ),
            184 => 
            array (
                'id' => 3185,
                'name' => 'Gesztely',
                'core_counties_id' => 4,
            ),
            185 => 
            array (
                'id' => 3186,
                'name' => 'Sátoraljaújhely',
                'core_counties_id' => 4,
            ),
            186 => 
            array (
                'id' => 3187,
                'name' => 'Egyek',
                'core_counties_id' => 8,
            ),
            187 => 
            array (
                'id' => 3188,
                'name' => 'Hajdúböszörmény',
                'core_counties_id' => 8,
            ),
            188 => 
            array (
                'id' => 3189,
                'name' => 'Debrecen',
                'core_counties_id' => 8,
            ),
            189 => 
            array (
                'id' => 3190,
                'name' => 'Szerep',
                'core_counties_id' => 8,
            ),
            190 => 
            array (
                'id' => 3191,
                'name' => 'Nyíregyháza',
                'core_counties_id' => 15,
            ),
            191 => 
            array (
                'id' => 3192,
                'name' => 'Nyíradony',
                'core_counties_id' => 8,
            ),
            192 => 
            array (
                'id' => 3193,
                'name' => 'Tiszalök',
                'core_counties_id' => 15,
            ),
            193 => 
            array (
                'id' => 3194,
                'name' => 'Tiszatelek',
                'core_counties_id' => 15,
            ),
            194 => 
            array (
                'id' => 3195,
                'name' => 'Tiszavárkony',
                'core_counties_id' => 10,
            ),
            195 => 
            array (
                'id' => 3196,
                'name' => 'Törökszentmiklós',
                'core_counties_id' => 10,
            ),
            196 => 
            array (
                'id' => 3197,
                'name' => 'Fegyvernek',
                'core_counties_id' => 10,
            ),
            197 => 
            array (
                'id' => 3198,
                'name' => 'Kenderes',
                'core_counties_id' => 10,
            ),
            198 => 
            array (
                'id' => 3199,
                'name' => 'Tiszaföldvár',
                'core_counties_id' => 10,
            ),
            199 => 
            array (
                'id' => 3200,
                'name' => 'Békéscsaba',
                'core_counties_id' => 3,
            ),
            200 => 
            array (
                'id' => 3201,
                'name' => 'Medgyesegyháza',
                'core_counties_id' => 3,
            ),
            201 => 
            array (
                'id' => 3202,
                'name' => 'Kecskemét',
                'core_counties_id' => 1,
            ),
            202 => 
            array (
                'id' => 3203,
                'name' => 'Csongrád',
                'core_counties_id' => 5,
            ),
            203 => 
            array (
                'id' => 3204,
                'name' => 'Sárbogárd',
                'core_counties_id' => 6,
            ),
            204 => 
            array (
                'id' => 3205,
                'name' => 'Paks',
                'core_counties_id' => 16,
            ),
            205 => 
            array (
                'id' => 3206,
                'name' => 'Bonyhád',
                'core_counties_id' => 16,
            ),
            206 => 
            array (
                'id' => 3207,
                'name' => 'Kaposvár',
                'core_counties_id' => 14,
            ),
            207 => 
            array (
                'id' => 3208,
                'name' => 'Barcs',
                'core_counties_id' => 14,
            ),
            208 => 
            array (
                'id' => 3209,
                'name' => 'Mohács',
                'core_counties_id' => 2,
            ),
            209 => 
            array (
                'id' => 3210,
                'name' => 'Balinka',
                'core_counties_id' => 6,
            ),
            210 => 
            array (
                'id' => 3211,
                'name' => 'Balatonkenese',
                'core_counties_id' => 18,
            ),
            211 => 
            array (
                'id' => 3212,
                'name' => 'Balatonfűzfő',
                'core_counties_id' => 18,
            ),
            212 => 
            array (
                'id' => 3213,
                'name' => 'Balatonfüred',
                'core_counties_id' => 18,
            ),
            213 => 
            array (
                'id' => 3214,
                'name' => 'Badacsonytomaj',
                'core_counties_id' => 18,
            ),
            214 => 
            array (
                'id' => 3215,
                'name' => 'Marcaltő',
                'core_counties_id' => 18,
            ),
            215 => 
            array (
                'id' => 3216,
                'name' => 'Balatonboglár',
                'core_counties_id' => 14,
            ),
            216 => 
            array (
                'id' => 3217,
                'name' => 'Marcali',
                'core_counties_id' => 14,
            ),
            217 => 
            array (
                'id' => 3218,
                'name' => 'Zalaszentgrót',
                'core_counties_id' => 19,
            ),
            218 => 
            array (
                'id' => 3219,
                'name' => 'Mosonszentmiklós',
                'core_counties_id' => 7,
            ),
            219 => 
            array (
                'id' => 3220,
                'name' => 'Sarród',
                'core_counties_id' => 7,
            ),
            220 => 
            array (
                'id' => 3221,
                'name' => 'Celldömölk',
                'core_counties_id' => 17,
            ),
            221 => 
            array (
                'id' => 3222,
                'name' => 'Bük',
                'core_counties_id' => 17,
            ),
        ));

        
    }
}