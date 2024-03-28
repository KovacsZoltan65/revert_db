<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreModulesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_modules')->truncate();
        
        \DB::table('core_modules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_components_id' => 1,
                'directory' => 'index',
            ),
            1 => 
            array (
                'id' => 2,
                'core_components_id' => 1,
                'directory' => 'persons',
            ),
            2 => 
            array (
                'id' => 3,
                'core_components_id' => 1,
                'directory' => 'log',
            ),
            3 => 
            array (
                'id' => 4,
                'core_components_id' => 1,
                'directory' => 'parameters',
            ),
            4 => 
            array (
                'id' => 5,
                'core_components_id' => 1,
                'directory' => 'permissions',
            ),
            5 => 
            array (
                'id' => 6,
                'core_components_id' => 1,
                'directory' => 'attributes',
            ),
            6 => 
            array (
                'id' => 7,
                'core_components_id' => 2,
                'directory' => 'bonuses',
            ),
            7 => 
            array (
                'id' => 8,
                'core_components_id' => 2,
                'directory' => 'shifts',
            ),
            8 => 
            array (
                'id' => 9,
                'core_components_id' => 1,
                'directory' => 'establishments',
            ),
            9 => 
            array (
                'id' => 10,
                'core_components_id' => 1,
                'directory' => 'departments',
            ),
            10 => 
            array (
                'id' => 11,
                'core_components_id' => 1,
                'directory' => 'cost_centers',
            ),
            11 => 
            array (
                'id' => 12,
                'core_components_id' => 1,
                'directory' => 'permissiongroups',
            ),
            12 => 
            array (
                'id' => 13,
                'core_components_id' => 1,
                'directory' => 'legalentities',
            ),
            13 => 
            array (
                'id' => 14,
                'core_components_id' => 1,
                'directory' => 'hierarchy',
            ),
            14 => 
            array (
                'id' => 15,
                'core_components_id' => 1,
                'directory' => 'extraemailaddresses',
            ),
            15 => 
            array (
                'id' => 16,
                'core_components_id' => 1,
                'directory' => 'holidays',
            ),
            16 => 
            array (
                'id' => 17,
                'core_components_id' => 1,
                'directory' => 'substitutions',
            ),
            17 => 
            array (
                'id' => 18,
                'core_components_id' => 1,
                'directory' => 'emailnotifications',
            ),
            18 => 
            array (
                'id' => 19,
                'core_components_id' => 2,
                'directory' => 'offdaytypes',
            ),
            19 => 
            array (
                'id' => 20,
                'core_components_id' => 2,
                'directory' => 'attendancesheets',
            ),
            20 => 
            array (
                'id' => 21,
                'core_components_id' => 2,
                'directory' => 'workplans',
            ),
            21 => 
            array (
                'id' => 22,
                'core_components_id' => 2,
                'directory' => 'roundingsettings',
            ),
            22 => 
            array (
                'id' => 23,
                'core_components_id' => 2,
                'directory' => 'placesofwork',
            ),
            23 => 
            array (
                'id' => 24,
                'core_components_id' => 2,
                'directory' => 'abscences',
            ),
            24 => 
            array (
                'id' => 25,
                'core_components_id' => 1,
                'directory' => 'import',
            ),
            25 => 
            array (
                'id' => 26,
                'core_components_id' => 2,
                'directory' => 'attendancesheetsettings',
            ),
            26 => 
            array (
                'id' => 27,
                'core_components_id' => 2,
                'directory' => 'payrollsheets',
            ),
            27 => 
            array (
                'id' => 28,
                'core_components_id' => 1,
                'directory' => 'specialpersonstatuses',
            ),
            28 => 
            array (
                'id' => 29,
                'core_components_id' => 2,
                'directory' => 'worktimelimits',
            ),
            29 => 
            array (
                'id' => 30,
                'core_components_id' => 1,
                'directory' => 'leavers',
            ),
            30 => 
            array (
                'id' => 31,
                'core_components_id' => 1,
                'directory' => 'otherincomes',
            ),
            31 => 
            array (
                'id' => 32,
                'core_components_id' => 1,
                'directory' => 'specialpermissions',
            ),
            32 => 
            array (
                'id' => 33,
                'core_components_id' => 2,
                'directory' => 'overtimeordination',
            ),
            33 => 
            array (
                'id' => 34,
                'core_components_id' => 2,
                'directory' => 'abscencetypes',
            ),
            34 => 
            array (
                'id' => 35,
                'core_components_id' => 2,
                'directory' => 'batchconfirmations',
            ),
            35 => 
            array (
                'id' => 36,
                'core_components_id' => 1,
                'directory' => 'export',
            ),
            36 => 
            array (
                'id' => 37,
                'core_components_id' => 2,
                'directory' => 'scheduleplanner',
            ),
            37 => 
            array (
                'id' => 38,
                'core_components_id' => 1,
                'directory' => 'reporter',
            ),
            38 => 
            array (
                'id' => 39,
                'core_components_id' => 2,
                'directory' => 'abscenceplanner',
            ),
            39 => 
            array (
                'id' => 40,
                'core_components_id' => 2,
                'directory' => 'offdaytypelimit',
            ),
            40 => 
            array (
                'id' => 41,
                'core_components_id' => 2,
                'directory' => 'legalstock',
            ),
            41 => 
            array (
                'id' => 42,
                'core_components_id' => 2,
                'directory' => 'fulldaybonus',
            ),
            42 => 
            array (
                'id' => 43,
                'core_components_id' => 2,
                'directory' => 'standbytypes',
            ),
            43 => 
            array (
                'id' => 44,
                'core_components_id' => 1,
                'directory' => 'profitcenters',
            ),
            44 => 
            array (
                'id' => 45,
                'core_components_id' => 2,
                'directory' => 'approvallinks',
            ),
            45 => 
            array (
                'id' => 46,
                'core_components_id' => 3,
                'directory' => 'baber',
            ),
            46 => 
            array (
                'id' => 47,
                'core_components_id' => 2,
                'directory' => 'approvalbuttons',
            ),
            47 => 
            array (
                'id' => 48,
                'core_components_id' => 2,
                'directory' => 'workdaydivision',
            ),
            48 => 
            array (
                'id' => 49,
                'core_components_id' => 2,
                'directory' => 'documenthandler',
            ),
            49 => 
            array (
                'id' => 50,
                'core_components_id' => 2,
                'directory' => 'documentuploader',
            ),
            50 => 
            array (
                'id' => 51,
                'core_components_id' => 2,
                'directory' => 'scheduler',
            ),
            51 => 
            array (
                'id' => 52,
                'core_components_id' => 1,
                'directory' => 'surfacenotification',
            ),
            52 => 
            array (
                'id' => 53,
                'core_components_id' => 2,
                'directory' => 'holidayrules',
            ),
            53 => 
            array (
                'id' => 54,
                'core_components_id' => 1,
                'directory' => 'sso',
            ),
            54 => 
            array (
                'id' => 55,
                'core_components_id' => 1,
                'directory' => 'twofactorauthentication',
            ),
            55 => 
            array (
                'id' => 56,
                'core_components_id' => 2,
                'directory' => 'attendanceentityselectorsettings',
            ),
            56 => 
            array (
                'id' => 57,
                'core_components_id' => 1,
                'directory' => 'pekseg_dolgozok',
            ),
            57 => 
            array (
                'id' => 58,
                'core_components_id' => 1,
                'directory' => 'pekseg_uzletek',
            ),
        ));

        
    }
}