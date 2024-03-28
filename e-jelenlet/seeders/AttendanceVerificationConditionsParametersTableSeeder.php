<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceVerificationConditionsParametersTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_verification_conditions_parameters')->truncate();
        
        \DB::table('attendance_verification_conditions_parameters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_localization_id' => 1,
                'parameter' => 'type',
                'parameter_type' => 'working_hours',
                'parameter_value' => 'munkaidő',
            ),
            1 => 
            array (
                'id' => 2,
                'core_localization_id' => 2,
                'parameter' => 'type',
                'parameter_type' => 'working_hours',
                'parameter_value' => 'working hours',
            ),
            2 => 
            array (
                'id' => 3,
                'core_localization_id' => 1,
                'parameter' => 'type',
                'parameter_type' => 'workday',
                'parameter_value' => 'munkanap',
            ),
            3 => 
            array (
                'id' => 4,
                'core_localization_id' => 2,
                'parameter' => 'type',
                'parameter_type' => 'workday',
                'parameter_value' => 'workday',
            ),
            4 => 
            array (
                'id' => 5,
                'core_localization_id' => 1,
                'parameter' => 'type',
                'parameter_type' => 'rest_period',
                'parameter_value' => 'pihenőidő',
            ),
            5 => 
            array (
                'id' => 6,
                'core_localization_id' => 2,
                'parameter' => 'type',
                'parameter_type' => 'rest_period',
                'parameter_value' => 'rest period',
            ),
            6 => 
            array (
                'id' => 7,
                'core_localization_id' => 1,
                'parameter' => 'type',
                'parameter_type' => 'rest_day',
                'parameter_value' => 'pihenőnap',
            ),
            7 => 
            array (
                'id' => 8,
                'core_localization_id' => 2,
                'parameter' => 'type',
                'parameter_type' => 'rest_day',
                'parameter_value' => 'rest day',
            ),
            8 => 
            array (
                'id' => 9,
                'core_localization_id' => 1,
                'parameter' => 'type',
                'parameter_type' => 'overtime',
                'parameter_value' => 'túlóra',
            ),
            9 => 
            array (
                'id' => 10,
                'core_localization_id' => 2,
                'parameter' => 'type',
                'parameter_type' => 'overtime',
                'parameter_value' => 'overtime',
            ),
            10 => 
            array (
                'id' => 11,
                'core_localization_id' => 1,
                'parameter' => 'type',
                'parameter_type' => 'standby',
                'parameter_value' => 'készenlét',
            ),
            11 => 
            array (
                'id' => 12,
                'core_localization_id' => 2,
                'parameter' => 'type',
                'parameter_type' => 'standby',
                'parameter_value' => 'standby',
            ),
            12 => 
            array (
                'id' => 13,
                'core_localization_id' => 1,
                'parameter' => 'type',
                'parameter_type' => 'duty',
                'parameter_value' => 'ügyelet',
            ),
            13 => 
            array (
                'id' => 14,
                'core_localization_id' => 2,
                'parameter' => 'type',
                'parameter_type' => 'duty',
                'parameter_value' => 'duty',
            ),
            14 => 
            array (
                'id' => 15,
                'core_localization_id' => 1,
                'parameter' => 'type',
                'parameter_type' => 'abscence',
                'parameter_value' => 'távollét',
            ),
            15 => 
            array (
                'id' => 16,
                'core_localization_id' => 2,
                'parameter' => 'type',
                'parameter_type' => 'abscence',
                'parameter_value' => 'abscence',
            ),
            16 => 
            array (
                'id' => 17,
                'core_localization_id' => 1,
                'parameter' => 'type',
                'parameter_type' => 'balance_time',
                'parameter_value' => 'balanszidő',
            ),
            17 => 
            array (
                'id' => 18,
                'core_localization_id' => 2,
                'parameter' => 'type',
                'parameter_type' => 'balance_time',
                'parameter_value' => 'balance time',
            ),
            18 => 
            array (
                'id' => 19,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'minimum',
                'parameter_value' => 'minimum',
            ),
            19 => 
            array (
                'id' => 20,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'minimum',
                'parameter_value' => 'minimum',
            ),
            20 => 
            array (
                'id' => 21,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'maximum',
                'parameter_value' => 'maximum',
            ),
            21 => 
            array (
                'id' => 22,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'maximum',
                'parameter_value' => 'maximum',
            ),
            22 => 
            array (
                'id' => 23,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'boolean',
                'parameter_value' => 'logikai',
            ),
            23 => 
            array (
                'id' => 24,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'boolean',
                'parameter_value' => 'boolean',
            ),
            24 => 
            array (
                'id' => 25,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'greater_than',
                'parameter_value' => 'nagyobb',
            ),
            25 => 
            array (
                'id' => 26,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'greater_than',
                'parameter_value' => 'greater than',
            ),
            26 => 
            array (
                'id' => 27,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'greater_than_or_equal_to',
                'parameter_value' => 'nagyobb vagy egyenlő',
            ),
            27 => 
            array (
                'id' => 28,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'greater_than_or_equal_to',
                'parameter_value' => 'greater than or equal to',
            ),
            28 => 
            array (
                'id' => 29,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'less_than',
                'parameter_value' => 'kisebb',
            ),
            29 => 
            array (
                'id' => 30,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'less_than',
                'parameter_value' => 'less than',
            ),
            30 => 
            array (
                'id' => 31,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'less_than_or_equal_to',
                'parameter_value' => 'kisebb vagy egyenlő',
            ),
            31 => 
            array (
                'id' => 32,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'less_than_or_equal_to',
                'parameter_value' => 'less than or equal to',
            ),
            32 => 
            array (
                'id' => 33,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'equal_to',
                'parameter_value' => 'egyenlő',
            ),
            33 => 
            array (
                'id' => 34,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'equal_to',
                'parameter_value' => 'equal to',
            ),
            34 => 
            array (
                'id' => 35,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'not_equal_to',
                'parameter_value' => 'nem egyenlő',
            ),
            35 => 
            array (
                'id' => 36,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'not_equal_to',
                'parameter_value' => 'not equal to',
            ),
            36 => 
            array (
                'id' => 37,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'same_as',
                'parameter_value' => 'azonos',
            ),
            37 => 
            array (
                'id' => 38,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'same_as',
                'parameter_value' => 'same as',
            ),
            38 => 
            array (
                'id' => 39,
                'core_localization_id' => 1,
                'parameter' => 'operator',
                'parameter_type' => 'not_same_as',
                'parameter_value' => 'nem azonos',
            ),
            39 => 
            array (
                'id' => 40,
                'core_localization_id' => 2,
                'parameter' => 'operator',
                'parameter_type' => 'not_same_as',
                'parameter_value' => 'not same as',
            ),
            40 => 
            array (
                'id' => 41,
                'core_localization_id' => 1,
                'parameter' => 'unit',
                'parameter_type' => 'hour',
                'parameter_value' => 'óra',
            ),
            41 => 
            array (
                'id' => 42,
                'core_localization_id' => 2,
                'parameter' => 'unit',
                'parameter_type' => 'hour',
                'parameter_value' => 'hour',
            ),
            42 => 
            array (
                'id' => 43,
                'core_localization_id' => 1,
                'parameter' => 'unit',
                'parameter_type' => 'day',
                'parameter_value' => 'nap',
            ),
            43 => 
            array (
                'id' => 44,
                'core_localization_id' => 2,
                'parameter' => 'unit',
                'parameter_type' => 'day',
                'parameter_value' => 'day',
            ),
            44 => 
            array (
                'id' => 45,
                'core_localization_id' => 1,
                'parameter' => 'unit',
                'parameter_type' => 'week',
                'parameter_value' => 'hét',
            ),
            45 => 
            array (
                'id' => 46,
                'core_localization_id' => 2,
                'parameter' => 'unit',
                'parameter_type' => 'week',
                'parameter_value' => 'week',
            ),
            46 => 
            array (
                'id' => 47,
                'core_localization_id' => 1,
                'parameter' => 'unit',
                'parameter_type' => 'minute',
                'parameter_value' => 'perc',
            ),
            47 => 
            array (
                'id' => 48,
                'core_localization_id' => 2,
                'parameter' => 'unit',
                'parameter_type' => 'minute',
                'parameter_value' => 'minute',
            ),
            48 => 
            array (
                'id' => 49,
                'core_localization_id' => 1,
                'parameter' => 'unit',
                'parameter_type' => 'piece',
                'parameter_value' => 'darab',
            ),
            49 => 
            array (
                'id' => 50,
                'core_localization_id' => 2,
                'parameter' => 'unit',
                'parameter_type' => 'piece',
                'parameter_value' => 'piece',
            ),
            50 => 
            array (
                'id' => 51,
                'core_localization_id' => 1,
                'parameter' => 'unit',
                'parameter_type' => 'uninterrupted_hours',
                'parameter_value' => 'egybefüggő óra',
            ),
            51 => 
            array (
                'id' => 52,
                'core_localization_id' => 2,
                'parameter' => 'unit',
                'parameter_type' => 'uninterrupted_hours',
                'parameter_value' => 'uninterrupted hours',
            ),
            52 => 
            array (
                'id' => 53,
                'core_localization_id' => 1,
                'parameter' => 'unit',
                'parameter_type' => 'full_day',
                'parameter_value' => 'teljes nap',
            ),
            53 => 
            array (
                'id' => 54,
                'core_localization_id' => 2,
                'parameter' => 'unit',
                'parameter_type' => 'full_day',
                'parameter_value' => 'full day',
            ),
            54 => 
            array (
                'id' => 55,
                'core_localization_id' => 1,
                'parameter' => 'unit',
                'parameter_type' => 'sunday',
                'parameter_value' => 'vasárnap',
            ),
            55 => 
            array (
                'id' => 56,
                'core_localization_id' => 2,
                'parameter' => 'unit',
                'parameter_type' => 'sunday',
                'parameter_value' => 'sunday',
            ),
            56 => 
            array (
                'id' => 57,
                'core_localization_id' => 1,
                'parameter' => 'unit',
                'parameter_type' => 'rest_day',
                'parameter_value' => 'pihenőnap',
            ),
            57 => 
            array (
                'id' => 58,
                'core_localization_id' => 2,
                'parameter' => 'unit',
                'parameter_type' => 'rest_day',
                'parameter_value' => 'rest day',
            ),
            58 => 
            array (
                'id' => 59,
                'core_localization_id' => 1,
                'parameter' => 'period',
                'parameter_type' => 'hour',
                'parameter_value' => 'óra',
            ),
            59 => 
            array (
                'id' => 60,
                'core_localization_id' => 2,
                'parameter' => 'period',
                'parameter_type' => 'hour',
                'parameter_value' => 'hour',
            ),
            60 => 
            array (
                'id' => 61,
                'core_localization_id' => 1,
                'parameter' => 'period',
                'parameter_type' => 'day',
                'parameter_value' => 'nap',
            ),
            61 => 
            array (
                'id' => 62,
                'core_localization_id' => 2,
                'parameter' => 'period',
                'parameter_type' => 'day',
                'parameter_value' => 'day',
            ),
            62 => 
            array (
                'id' => 63,
                'core_localization_id' => 1,
                'parameter' => 'period',
                'parameter_type' => 'week',
                'parameter_value' => 'hét',
            ),
            63 => 
            array (
                'id' => 64,
                'core_localization_id' => 2,
                'parameter' => 'period',
                'parameter_type' => 'week',
                'parameter_value' => 'week',
            ),
            64 => 
            array (
                'id' => 65,
                'core_localization_id' => 1,
                'parameter' => 'period',
                'parameter_type' => 'month',
                'parameter_value' => 'hónap',
            ),
            65 => 
            array (
                'id' => 66,
                'core_localization_id' => 2,
                'parameter' => 'period',
                'parameter_type' => 'month',
                'parameter_value' => 'month',
            ),
            66 => 
            array (
                'id' => 67,
                'core_localization_id' => 1,
                'parameter' => 'period',
                'parameter_type' => 'year',
                'parameter_value' => 'év',
            ),
            67 => 
            array (
                'id' => 68,
                'core_localization_id' => 2,
                'parameter' => 'period',
                'parameter_type' => 'year',
                'parameter_value' => 'year',
            ),
            68 => 
            array (
                'id' => 69,
                'core_localization_id' => 1,
                'parameter' => 'period',
                'parameter_type' => 'between_shifts',
                'parameter_value' => 'műszakok között',
            ),
            69 => 
            array (
                'id' => 70,
                'core_localization_id' => 2,
                'parameter' => 'period',
                'parameter_type' => 'between_shifts',
                'parameter_value' => 'between shifts',
            ),
            70 => 
            array (
                'id' => 71,
                'core_localization_id' => 1,
                'parameter' => 'period',
                'parameter_type' => 'between_split_shifts',
                'parameter_value' => 'osztott műszakok között',
            ),
            71 => 
            array (
                'id' => 72,
                'core_localization_id' => 2,
                'parameter' => 'period',
                'parameter_type' => 'between_split_shifts',
                'parameter_value' => 'between split shifts',
            ),
            72 => 
            array (
                'id' => 73,
                'core_localization_id' => 1,
                'parameter' => 'period',
                'parameter_type' => 'between_rest_days',
                'parameter_value' => 'pihenőnapok között',
            ),
            73 => 
            array (
                'id' => 74,
                'core_localization_id' => 2,
                'parameter' => 'period',
                'parameter_type' => 'between_rest_days',
                'parameter_value' => 'between rest days',
            ),
            74 => 
            array (
                'id' => 75,
                'core_localization_id' => 1,
                'parameter' => 'unit',
                'parameter_type' => 'shift',
                'parameter_value' => 'műszak',
            ),
            75 => 
            array (
                'id' => 76,
                'core_localization_id' => 2,
                'parameter' => 'unit',
                'parameter_type' => 'shift',
                'parameter_value' => 'shift',
            ),
            76 => 
            array (
                'id' => 77,
                'core_localization_id' => 1,
                'parameter' => 'type',
                'parameter_type' => 'shift',
                'parameter_value' => 'műszak',
            ),
            77 => 
            array (
                'id' => 78,
                'core_localization_id' => 2,
                'parameter' => 'type',
                'parameter_type' => 'shift',
                'parameter_value' => 'shift',
            ),
            78 => 
            array (
                'id' => 79,
                'core_localization_id' => 1,
                'parameter' => 'period',
                'parameter_type' => 'between_individual_periods',
                'parameter_value' => 'egyedi időszak között',
            ),
            79 => 
            array (
                'id' => 80,
                'core_localization_id' => 2,
                'parameter' => 'period',
                'parameter_type' => 'between_individual_periods',
                'parameter_value' => 'between individual periods',
            ),
        ));

        
    }
}