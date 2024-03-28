<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttendanceVerificationConditionsDetailsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attendance_verification_conditions_details')->truncate();
        
        \DB::table('attendance_verification_conditions_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'attendance_verification_conditions_id' => 1,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            1 => 
            array (
                'id' => 2,
                'attendance_verification_conditions_id' => 1,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            2 => 
            array (
                'id' => 3,
                'attendance_verification_conditions_id' => 2,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            3 => 
            array (
                'id' => 4,
                'attendance_verification_conditions_id' => 2,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            4 => 
            array (
                'id' => 5,
                'attendance_verification_conditions_id' => 3,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            5 => 
            array (
                'id' => 6,
                'attendance_verification_conditions_id' => 3,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            6 => 
            array (
                'id' => 7,
                'attendance_verification_conditions_id' => 4,
                'core_localization_id' => 1,
                'title' => 'A pihenőnapok száma heti szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a pihenőnapok száma ezen a héten',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            7 => 
            array (
                'id' => 8,
                'attendance_verification_conditions_id' => 4,
                'core_localization_id' => 2,
                'title' => 'The number of days of rest on a weekly basis should be at least',
                'error_message' => 'Insufficient number of days of rest this week',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            8 => 
            array (
                'id' => 9,
                'attendance_verification_conditions_id' => 5,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            9 => 
            array (
                'id' => 10,
                'attendance_verification_conditions_id' => 5,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            10 => 
            array (
                'id' => 11,
                'attendance_verification_conditions_id' => 6,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            11 => 
            array (
                'id' => 12,
                'attendance_verification_conditions_id' => 6,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            12 => 
            array (
                'id' => 13,
                'attendance_verification_conditions_id' => 7,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            13 => 
            array (
                'id' => 14,
                'attendance_verification_conditions_id' => 7,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            14 => 
            array (
                'id' => 15,
                'attendance_verification_conditions_id' => 8,
                'core_localization_id' => 1,
                'title' => 'A pihenőnapok száma heti szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a pihenőnapok száma ezen a héten',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            15 => 
            array (
                'id' => 16,
                'attendance_verification_conditions_id' => 8,
                'core_localization_id' => 2,
                'title' => 'The number of days of rest on a weekly basis should be at least',
                'error_message' => 'Insufficient number of days of rest this week',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            16 => 
            array (
                'id' => 17,
                'attendance_verification_conditions_id' => 9,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            17 => 
            array (
                'id' => 18,
                'attendance_verification_conditions_id' => 9,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            18 => 
            array (
                'id' => 19,
                'attendance_verification_conditions_id' => 10,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            19 => 
            array (
                'id' => 20,
                'attendance_verification_conditions_id' => 10,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            20 => 
            array (
                'id' => 21,
                'attendance_verification_conditions_id' => 11,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            21 => 
            array (
                'id' => 22,
                'attendance_verification_conditions_id' => 11,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            22 => 
            array (
                'id' => 23,
                'attendance_verification_conditions_id' => 12,
                'core_localization_id' => 1,
                'title' => 'A pihenőnapok száma heti szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a pihenőnapok száma ezen a héten',
                'created_at' => '2024-03-18 14:42:38',
                'updated_at' => '2024-03-18 14:42:38',
            ),
            23 => 
            array (
                'id' => 24,
                'attendance_verification_conditions_id' => 12,
                'core_localization_id' => 2,
                'title' => 'The number of days of rest on a weekly basis should be at least',
                'error_message' => 'Insufficient number of days of rest this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            24 => 
            array (
                'id' => 25,
                'attendance_verification_conditions_id' => 13,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            25 => 
            array (
                'id' => 26,
                'attendance_verification_conditions_id' => 13,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            26 => 
            array (
                'id' => 27,
                'attendance_verification_conditions_id' => 14,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            27 => 
            array (
                'id' => 28,
                'attendance_verification_conditions_id' => 14,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            28 => 
            array (
                'id' => 29,
                'attendance_verification_conditions_id' => 15,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            29 => 
            array (
                'id' => 30,
                'attendance_verification_conditions_id' => 15,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            30 => 
            array (
                'id' => 31,
                'attendance_verification_conditions_id' => 16,
                'core_localization_id' => 1,
                'title' => 'A pihenőnapok száma heti szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a pihenőnapok száma ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            31 => 
            array (
                'id' => 32,
                'attendance_verification_conditions_id' => 16,
                'core_localization_id' => 2,
                'title' => 'The number of days of rest on a weekly basis should be at least',
                'error_message' => 'Insufficient number of days of rest this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            32 => 
            array (
                'id' => 33,
                'attendance_verification_conditions_id' => 17,
                'core_localization_id' => 1,
                'title' => 'Ha a heti rendes pihenőnap feltétele nem teljesül, a pihenőidő heti szinten minimum ennyi egybefüggő óra legyen',
                'error_message' => 'Nem elegendő az egybefüggő pihenőidő ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            33 => 
            array (
                'id' => 34,
                'attendance_verification_conditions_id' => 17,
                'core_localization_id' => 2,
            'title' => 'If the condition for a regular weekly day of rest is not fulfilled, the duration of rest periods on a weekly basis should be an uninterrupted period of minimum (hours)',
                'error_message' => 'Insufficient uninterrupted rest period this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            34 => 
            array (
                'id' => 35,
                'attendance_verification_conditions_id' => 18,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő osztott műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő az osztott műszakok között ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            35 => 
            array (
                'id' => 36,
                'attendance_verification_conditions_id' => 18,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between split shifts (hours)',
                'error_message' => 'Insufficient rest period between split shifts this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            36 => 
            array (
                'id' => 37,
                'attendance_verification_conditions_id' => 19,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            37 => 
            array (
                'id' => 38,
                'attendance_verification_conditions_id' => 19,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            38 => 
            array (
                'id' => 39,
                'attendance_verification_conditions_id' => 20,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            39 => 
            array (
                'id' => 40,
                'attendance_verification_conditions_id' => 20,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            40 => 
            array (
                'id' => 41,
                'attendance_verification_conditions_id' => 21,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            41 => 
            array (
                'id' => 42,
                'attendance_verification_conditions_id' => 21,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            42 => 
            array (
                'id' => 43,
                'attendance_verification_conditions_id' => 22,
                'core_localization_id' => 1,
                'title' => 'Pihenőnapot követően első beosztott munkanaptól a következő pihenőnapig közvetlen egymást követő napok össz pihenőideje minimum ennyi egybefüggő óra legyen',
                'error_message' => 'Pihenőnapot követően első beosztott munkanaptól a következő pihenőnapig közvetlen egymást követő napok össz pihenőideje legalább 22 óra',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            43 => 
            array (
                'id' => 44,
                'attendance_verification_conditions_id' => 22,
                'core_localization_id' => 2,
                'title' => 'Pihenőnapot követően első beosztott munkanaptól a következő pihenőnapig közvetlen egymást követő napok össz pihenőideje minimum ennyi egybefüggő óra legyen',
                'error_message' => 'Pihenőnapot követően első beosztott munkanaptól a következő pihenőnapig közvetlen egymást követő napok össz pihenőideje legalább 22 óra',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            44 => 
            array (
                'id' => 45,
                'attendance_verification_conditions_id' => 23,
                'core_localization_id' => 1,
                'title' => 'A pihenőnapok száma heti szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a pihenőnapok száma ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            45 => 
            array (
                'id' => 46,
                'attendance_verification_conditions_id' => 23,
                'core_localization_id' => 2,
                'title' => 'The number of days of rest on a weekly basis should be at least',
                'error_message' => 'Insufficient number of days of rest this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            46 => 
            array (
                'id' => 47,
                'attendance_verification_conditions_id' => 24,
                'core_localization_id' => 1,
                'title' => 'Ha a heti rendes pihenőnap feltétele nem teljesül, a pihenőidő heti szinten minimum ennyi egybefüggő óra legyen',
                'error_message' => 'Nem elegendő az egybefüggő pihenőidő ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            47 => 
            array (
                'id' => 48,
                'attendance_verification_conditions_id' => 24,
                'core_localization_id' => 2,
            'title' => 'If the condition for a regular weekly day of rest is not fulfilled, the duration of rest periods on a weekly basis should be an uninterrupted period of minimum (hours)',
                'error_message' => 'Insufficient uninterrupted rest period this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            48 => 
            array (
                'id' => 49,
                'attendance_verification_conditions_id' => 25,
                'core_localization_id' => 1,
                'title' => 'Ha a heti rendes pihenőnap feltétele nem teljesül, de a heti szintű pihenőidő igen, a teljes pihenőnapok száma a héten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a teljes pihenőnapok száma ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            49 => 
            array (
                'id' => 50,
                'attendance_verification_conditions_id' => 25,
                'core_localization_id' => 2,
            'title' => 'If the condition for a regular weekly day of rest is not fulfilled, but the duration of rest periods on a weekly basis is fulfilled, the number of full days of rest in a week (minimum)',
                'error_message' => 'Insufficient number of full days of rest this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            50 => 
            array (
                'id' => 51,
                'attendance_verification_conditions_id' => 26,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő osztott műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő az osztott műszakok között ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            51 => 
            array (
                'id' => 52,
                'attendance_verification_conditions_id' => 26,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between split shifts (hours)',
                'error_message' => 'Insufficient rest period between split shifts this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            52 => 
            array (
                'id' => 53,
                'attendance_verification_conditions_id' => 27,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            53 => 
            array (
                'id' => 54,
                'attendance_verification_conditions_id' => 27,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            54 => 
            array (
                'id' => 55,
                'attendance_verification_conditions_id' => 28,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            55 => 
            array (
                'id' => 56,
                'attendance_verification_conditions_id' => 28,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            56 => 
            array (
                'id' => 57,
                'attendance_verification_conditions_id' => 29,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            57 => 
            array (
                'id' => 58,
                'attendance_verification_conditions_id' => 29,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            58 => 
            array (
                'id' => 59,
                'attendance_verification_conditions_id' => 30,
                'core_localization_id' => 1,
                'title' => 'A pihenőnapok száma heti szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a pihenőnapok száma ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            59 => 
            array (
                'id' => 60,
                'attendance_verification_conditions_id' => 30,
                'core_localization_id' => 2,
                'title' => 'The number of days of rest on a weekly basis should be at least',
                'error_message' => 'Insufficient number of days of rest this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            60 => 
            array (
                'id' => 61,
                'attendance_verification_conditions_id' => 31,
                'core_localization_id' => 1,
                'title' => 'Ha a heti rendes pihenőnap feltétele nem teljesül, a pihenőidő heti szinten minimum ennyi egybefüggő óra legyen',
                'error_message' => 'Nem elegendő az egybefüggő pihenőidő ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            61 => 
            array (
                'id' => 62,
                'attendance_verification_conditions_id' => 31,
                'core_localization_id' => 2,
            'title' => 'If the condition for a regular weekly day of rest is not fulfilled, the duration of rest periods on a weekly basis should be an uninterrupted period of minimum (hours)',
                'error_message' => 'Insufficient uninterrupted rest period this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            62 => 
            array (
                'id' => 63,
                'attendance_verification_conditions_id' => 32,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            63 => 
            array (
                'id' => 64,
                'attendance_verification_conditions_id' => 32,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            64 => 
            array (
                'id' => 65,
                'attendance_verification_conditions_id' => 33,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            65 => 
            array (
                'id' => 66,
                'attendance_verification_conditions_id' => 33,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            66 => 
            array (
                'id' => 67,
                'attendance_verification_conditions_id' => 34,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            67 => 
            array (
                'id' => 68,
                'attendance_verification_conditions_id' => 34,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            68 => 
            array (
                'id' => 69,
                'attendance_verification_conditions_id' => 35,
                'core_localization_id' => 1,
                'title' => 'A munkanapok száma a pihenőnapok között maximum ennyi darab lehet',
                'error_message' => 'Több az egybefüggő munkanapok száma a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            69 => 
            array (
                'id' => 70,
                'attendance_verification_conditions_id' => 35,
                'core_localization_id' => 2,
                'title' => 'The number of working days between days of rest may be maximum',
                'error_message' => 'More uninterrupted working days than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            70 => 
            array (
                'id' => 71,
                'attendance_verification_conditions_id' => 36,
                'core_localization_id' => 1,
                'title' => 'A vasárnapra eső pihenőnapok száma havi szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a vasárnapra eső pihenőnapok száma ebben a hónapban',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            71 => 
            array (
                'id' => 72,
                'attendance_verification_conditions_id' => 36,
                'core_localization_id' => 2,
            'title' => 'The minimum number of days of rest on Sundays should be (monthly)',
                'error_message' => 'Not enough days of rest on Sundays this month',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            72 => 
            array (
                'id' => 73,
                'attendance_verification_conditions_id' => 37,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            73 => 
            array (
                'id' => 74,
                'attendance_verification_conditions_id' => 37,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            74 => 
            array (
                'id' => 75,
                'attendance_verification_conditions_id' => 38,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            75 => 
            array (
                'id' => 76,
                'attendance_verification_conditions_id' => 38,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            76 => 
            array (
                'id' => 77,
                'attendance_verification_conditions_id' => 39,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            77 => 
            array (
                'id' => 78,
                'attendance_verification_conditions_id' => 39,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            78 => 
            array (
                'id' => 79,
                'attendance_verification_conditions_id' => 40,
                'core_localization_id' => 1,
                'title' => 'A pihenőnapok száma heti szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a pihenőnapok száma ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            79 => 
            array (
                'id' => 80,
                'attendance_verification_conditions_id' => 40,
                'core_localization_id' => 2,
                'title' => 'The number of days of rest on a weekly basis should be at least',
                'error_message' => 'Insufficient number of days of rest this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            80 => 
            array (
                'id' => 81,
                'attendance_verification_conditions_id' => 41,
                'core_localization_id' => 1,
                'title' => 'Ha a heti rendes pihenőnap feltétele nem teljesül, a pihenőidő heti szinten minimum ennyi egybefüggő óra legyen',
                'error_message' => 'Nem elegendő az egybefüggő pihenőidő ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            81 => 
            array (
                'id' => 82,
                'attendance_verification_conditions_id' => 41,
                'core_localization_id' => 2,
            'title' => 'If the condition for a regular weekly day of rest is not fulfilled, the duration of rest periods on a weekly basis should be an uninterrupted period of minimum (hours)',
                'error_message' => 'Insufficient uninterrupted rest period this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            82 => 
            array (
                'id' => 83,
                'attendance_verification_conditions_id' => 42,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            83 => 
            array (
                'id' => 84,
                'attendance_verification_conditions_id' => 42,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            84 => 
            array (
                'id' => 85,
                'attendance_verification_conditions_id' => 43,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            85 => 
            array (
                'id' => 86,
                'attendance_verification_conditions_id' => 43,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            86 => 
            array (
                'id' => 87,
                'attendance_verification_conditions_id' => 44,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            87 => 
            array (
                'id' => 88,
                'attendance_verification_conditions_id' => 44,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            88 => 
            array (
                'id' => 89,
                'attendance_verification_conditions_id' => 45,
                'core_localization_id' => 1,
                'title' => 'A munkanapok száma a pihenőnapok között maximum ennyi darab lehet',
                'error_message' => 'Több az egybefüggő munkanapok száma a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            89 => 
            array (
                'id' => 90,
                'attendance_verification_conditions_id' => 45,
                'core_localization_id' => 2,
                'title' => 'The number of working days between days of rest may be maximum',
                'error_message' => 'More uninterrupted working days than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            90 => 
            array (
                'id' => 91,
                'attendance_verification_conditions_id' => 46,
                'core_localization_id' => 1,
                'title' => 'A vasárnapra eső pihenőnapok száma havi szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a vasárnapra eső pihenőnapok száma ebben a hónapban',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            91 => 
            array (
                'id' => 92,
                'attendance_verification_conditions_id' => 46,
                'core_localization_id' => 2,
            'title' => 'The minimum number of days of rest on Sundays should be (monthly)',
                'error_message' => 'Not enough days of rest on Sundays this month',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            92 => 
            array (
                'id' => 93,
                'attendance_verification_conditions_id' => 47,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            93 => 
            array (
                'id' => 94,
                'attendance_verification_conditions_id' => 47,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            94 => 
            array (
                'id' => 95,
                'attendance_verification_conditions_id' => 48,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            95 => 
            array (
                'id' => 96,
                'attendance_verification_conditions_id' => 48,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            96 => 
            array (
                'id' => 97,
                'attendance_verification_conditions_id' => 49,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            97 => 
            array (
                'id' => 98,
                'attendance_verification_conditions_id' => 49,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            98 => 
            array (
                'id' => 99,
                'attendance_verification_conditions_id' => 50,
                'core_localization_id' => 1,
                'title' => 'A pihenőnapok száma heti szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a pihenőnapok száma ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            99 => 
            array (
                'id' => 100,
                'attendance_verification_conditions_id' => 50,
                'core_localization_id' => 2,
                'title' => 'The number of days of rest on a weekly basis should be at least',
                'error_message' => 'Insufficient number of days of rest this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            100 => 
            array (
                'id' => 101,
                'attendance_verification_conditions_id' => 51,
                'core_localization_id' => 1,
                'title' => 'Ha a heti rendes pihenőnap feltétele nem teljesül, a pihenőidő heti szinten minimum ennyi egybefüggő óra legyen',
                'error_message' => 'Nem elegendő az egybefüggő pihenőidő ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            101 => 
            array (
                'id' => 102,
                'attendance_verification_conditions_id' => 51,
                'core_localization_id' => 2,
            'title' => 'If the condition for a regular weekly day of rest is not fulfilled, the duration of rest periods on a weekly basis should be an uninterrupted period of minimum (hours)',
                'error_message' => 'Insufficient uninterrupted rest period this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            102 => 
            array (
                'id' => 103,
                'attendance_verification_conditions_id' => 52,
                'core_localization_id' => 1,
                'title' => 'A munkaidő napi szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            103 => 
            array (
                'id' => 104,
                'attendance_verification_conditions_id' => 52,
                'core_localization_id' => 2,
                'title' => 'Maximum daily working hours',
                'error_message' => 'More working hours than allowable this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            104 => 
            array (
                'id' => 105,
                'attendance_verification_conditions_id' => 53,
                'core_localization_id' => 1,
                'title' => 'A munkaidő heti szinten maximum ennyi óra lehet',
                'error_message' => 'Több a munkaidő a megengedettnél ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            105 => 
            array (
                'id' => 106,
                'attendance_verification_conditions_id' => 53,
                'core_localization_id' => 2,
                'title' => 'Maximum weekly working hours',
                'error_message' => 'More working hours than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            106 => 
            array (
                'id' => 107,
                'attendance_verification_conditions_id' => 54,
                'core_localization_id' => 1,
                'title' => 'A pihenőidő műszakok között minimum ennyi óra legyen',
                'error_message' => 'Nem elegendő a pihenőidő ez előtt a munkanap előtt',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            107 => 
            array (
                'id' => 108,
                'attendance_verification_conditions_id' => 54,
                'core_localization_id' => 2,
            'title' => 'Minimum rest period between shifts (hours)',
                'error_message' => 'Insufficient rest period before this working day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            108 => 
            array (
                'id' => 109,
                'attendance_verification_conditions_id' => 55,
                'core_localization_id' => 1,
                'title' => 'A munkanapok száma a pihenőnapok között maximum ennyi darab lehet',
                'error_message' => 'Több az egybefüggő munkanapok száma a megengedettnél ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            109 => 
            array (
                'id' => 110,
                'attendance_verification_conditions_id' => 55,
                'core_localization_id' => 2,
                'title' => 'The number of working days between days of rest may be maximum',
                'error_message' => 'More uninterrupted working days than allowable this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            110 => 
            array (
                'id' => 111,
                'attendance_verification_conditions_id' => 56,
                'core_localization_id' => 1,
                'title' => 'A vasárnapra eső pihenőnapok száma havi szinten minimum ennyi darab legyen',
                'error_message' => 'Nem elegendő a vasárnapra eső pihenőnapok száma ebben a hónapban',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            111 => 
            array (
                'id' => 112,
                'attendance_verification_conditions_id' => 56,
                'core_localization_id' => 2,
            'title' => 'The minimum number of days of rest on Sundays should be (monthly)',
                'error_message' => 'Not enough days of rest on Sundays this month',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            112 => 
            array (
                'id' => 113,
                'attendance_verification_conditions_id' => 57,
                'core_localization_id' => 1,
            'title' => 'A túlórával növelt munkaidő napi szinten maximum ennyi óra lehet (egy munkarendet leszámítva, az majd külön jelölve lesz)',
                'error_message' => 'A túlórával növelt munkaidő meghaladja a megengedett mértéket ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            113 => 
            array (
                'id' => 114,
                'attendance_verification_conditions_id' => 57,
                'core_localization_id' => 2,
            'title' => 'A túlórával növelt munkaidő napi szinten maximum ennyi óra lehet (egy munkarendet leszámítva, az majd külön jelölve lesz)',
                'error_message' => 'Working time increased with overtime exceeds the allowable limit for this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            114 => 
            array (
                'id' => 115,
                'attendance_verification_conditions_id' => 58,
                'core_localization_id' => 1,
                'title' => 'A túlórával növelt munkaidő napi szinten maximum ennyi óra lehet "Készenléti - külön megállapodással" kategóriájú munkarend esetén',
                'error_message' => 'A túlórával növelt munkaidő meghaladja a megengedett mértéket ezen a napon',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            115 => 
            array (
                'id' => 116,
                'attendance_verification_conditions_id' => 58,
                'core_localization_id' => 2,
                'title' => 'A túlórával növelt munkaidő napi szinten maximum ennyi óra lehet "Készenléti - külön megállapodással" kategóriájú munkarend esetén',
                'error_message' => 'Working time increased with overtime exceeds the allowable limit for this day',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            116 => 
            array (
                'id' => 117,
                'attendance_verification_conditions_id' => 59,
                'core_localization_id' => 1,
            'title' => 'A túlórával növelt munkaidő heti szinten maximum ennyi óra lehet (egy munkarendet leszámítva, az majd külön jelölve lesz)',
                'error_message' => 'A túlórával növelt munkaidő meghaladja a megengedett mértéket ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            117 => 
            array (
                'id' => 118,
                'attendance_verification_conditions_id' => 59,
                'core_localization_id' => 2,
            'title' => 'A túlórával növelt munkaidő heti szinten maximum ennyi óra lehet (egy munkarendet leszámítva, az majd külön jelölve lesz)',
                'error_message' => 'Working time increased with overtime exceeds the allowable limit for this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            118 => 
            array (
                'id' => 119,
                'attendance_verification_conditions_id' => 60,
                'core_localization_id' => 1,
                'title' => 'A túlórával növelt munkaidő heti szinten maximum ennyi óra lehet "Készenléti - külön megállapodással" kategóriájú munkarend esetén',
                'error_message' => 'A túlórával növelt munkaidő meghaladja a megengedett mértéket ezen a héten',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            119 => 
            array (
                'id' => 120,
                'attendance_verification_conditions_id' => 60,
                'core_localization_id' => 2,
                'title' => 'A túlórával növelt munkaidő heti szinten maximum ennyi óra lehet "Készenléti - külön megállapodással" kategóriájú munkarend esetén',
                'error_message' => 'Working time increased with overtime exceeds the allowable limit for this week',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            120 => 
            array (
                'id' => 121,
                'attendance_verification_conditions_id' => 61,
                'core_localization_id' => 1,
                'title' => 'A túlórák száma éves szinten maximum ennyi óra lehet',
                'error_message' => 'A túlórák száma éves szinten meghaladja a megengedett mértéket ebben az évben',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            121 => 
            array (
                'id' => 122,
                'attendance_verification_conditions_id' => 61,
                'core_localization_id' => 2,
                'title' => 'A túlórák száma éves szinten maximum ennyi óra lehet',
                'error_message' => 'Number of overtime exceeds the allowable limit for this year',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            122 => 
            array (
                'id' => 123,
                'attendance_verification_conditions_id' => 62,
                'core_localization_id' => 1,
            'title' => 'A készenlét havi szinten maximum ennyi óra lehet (bármelyik munkarendnél)',
                'error_message' => 'A készenlét meghaladja a megengedett mértéket ebben a hónapban',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            123 => 
            array (
                'id' => 124,
                'attendance_verification_conditions_id' => 62,
                'core_localization_id' => 2,
            'title' => 'A készenlét havi szinten maximum ennyi óra lehet (bármelyik munkarendnél)',
                'error_message' => 'Standby exceeds the allowable limit for this month',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            124 => 
            array (
                'id' => 125,
                'attendance_verification_conditions_id' => 63,
                'core_localization_id' => 1,
            'title' => 'A pihenőnapra eső készenlétek száma havi szinten maximum ennyi db lehet (bármelyik munkarendnél)',
                'error_message' => 'Több a pihenőnapra eső készenlétek száma a megengedettnél ebben a hónapban',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
            125 => 
            array (
                'id' => 126,
                'attendance_verification_conditions_id' => 63,
                'core_localization_id' => 2,
            'title' => 'A pihenőnapra eső készenlétek száma havi szinten maximum ennyi db lehet (bármelyik munkarendnél)',
                'error_message' => 'The number of standby per restday exceeds the allowable limit for this month',
                'created_at' => '2024-03-18 14:42:39',
                'updated_at' => '2024-03-18 14:42:39',
            ),
        ));

        
    }
}