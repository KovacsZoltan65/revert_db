<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CorePublicPlacesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_public_places')->truncate();
        
        \DB::table('core_public_places')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'út',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'utca',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'tér',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'köz',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'akna',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'akna-alsó',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'akna-felső',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'alagút',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'alsórakpart',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'arborétum',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'autóút',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'állat és növ.kert',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'állomás',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'árnyék',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'árok',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'átjáró',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'barakképület',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'barlang',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'bánya',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'bányatelep',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'bástya',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'bástyája',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'bejáró',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'bekötőút',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'csárda',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'csónakházak',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'domb',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'dűlő',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'dűlősor',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'dűlőterület',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'dűlőút',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'egyetemváros',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'egyéb',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'elágazás',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'emlékút',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'erdészház',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'erdészlak',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'erdő',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'erdősor',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'fasor',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'fasora',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'felső',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'forduló',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'föld',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'főmérnökség',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'főtér',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'főút',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'gát',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'gátőrház',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'gátsor',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'gyár',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'gyártelep',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'gyárváros',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'gyümölcsös',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'határsor',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'határút',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'ház',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'hegy',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'hegyhát',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'hegyhát dűlő',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'hegyhát köz',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'hídfő',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'hrsz.',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'iskola',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'játszótér',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'kapu',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'kastély',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'kert',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'kertsor',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'kilátó',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'kioszk',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'kocsiszín',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'kolónia',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'korzó',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'kör',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'körönd',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'körtér',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'körút',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'körvasútsor',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'körzet',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'kultúrpark',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'kunyhó',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'kút',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'kültelek',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'külterület',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'lakóház',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'lakónegyed',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'lakópark',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'lakótelep',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'lejáró',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'lejtő',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'lépcső',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'liget',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'major',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'malom',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'menedékház',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'mélyút',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'munkásszálló',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'műút',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'oldal',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'orom',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'őrház',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'őrházak',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'őrházlak',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'park',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'parkja',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'parkoló',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'part',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'pavilon',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'pálya',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'pályaudvar',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'piac',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'pihenő',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'pince',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'pincesor',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'puszta',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'rakpart',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'repülőtér',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'rész',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'rét',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'sarok',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'sánc',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'sávház',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'sétány',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'sor',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'sora',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'sportpálya',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'sporttelep',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'stadion',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'strandfürdő',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'sugárút',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'szállás',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'szállások',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'szer',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'szél',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'sziget',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'szivattyútelep',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'szőlő',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'szőlőhegy',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'szőlők',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'tag',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'tanya',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'tanyák',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'telep',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'temető',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'tere',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'tető',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'téli kikötő',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'tömb',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'turistaház',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'udvar',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'utak',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'utcája',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'útja',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'útőrház',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'üdülő',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'üdülő-part',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'üdülő-sor',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'üdülő-telep',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'vadaskert',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'vadászház',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'vasútállomás',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'vasúti megálló',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'vasúti őrház',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'vasútsor',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'vágóhíd',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'vár',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'várköz',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'város',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'vezetőút',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'villasor',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'vízmű',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'völgy',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'zsilip',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'zug',
            ),
        ));

        
    }
}