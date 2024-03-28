<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreEmailNotificationSubjectsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_email_notification_subjects')->truncate();
        
        \DB::table('core_email_notification_subjects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_email_notification_types_type' => 1,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'Értesítés az e-Jelenlét rendszer elérhetőségéről',
            ),
            1 => 
            array (
                'id' => 2,
                'core_email_notification_types_type' => 1,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'Notification of e-Jelenlét accessibility',
            ),
            2 => 
            array (
                'id' => 3,
                'core_email_notification_types_type' => 2,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'Értesítés jelszó módosításról ',
            ),
            3 => 
            array (
                'id' => 4,
                'core_email_notification_types_type' => 2,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'Notification of password modification ',
            ),
            4 => 
            array (
                'id' => 5,
                'core_email_notification_types_type' => 3,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés kiírt szabadságról',
            ),
            5 => 
            array (
                'id' => 6,
                'core_email_notification_types_type' => 3,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of recorded holiday',
            ),
            6 => 
            array (
                'id' => 7,
                'core_email_notification_types_type' => 4,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés szabadság igény elutasításáról',
            ),
            7 => 
            array (
                'id' => 8,
                'core_email_notification_types_type' => 4,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of rejected holiday',
            ),
            8 => 
            array (
                'id' => 9,
                'core_email_notification_types_type' => 5,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés szabadság igény elfogadásáról',
            ),
            9 => 
            array (
                'id' => 10,
                'core_email_notification_types_type' => 5,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approved holiday',
            ),
            10 => 
            array (
                'id' => 11,
                'core_email_notification_types_type' => 6,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlóra elrendelésről',
            ),
            11 => 
            array (
                'id' => 12,
                'core_email_notification_types_type' => 6,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered overtime',
            ),
            12 => 
            array (
                'id' => 13,
                'core_email_notification_types_type' => 7,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlóra rögzítés jóváhagyásáról',
            ),
            13 => 
            array (
                'id' => 14,
                'core_email_notification_types_type' => 7,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of recorded overtime approval',
            ),
            14 => 
            array (
                'id' => 15,
                'core_email_notification_types_type' => 8,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlóra elutasításáról',
            ),
            15 => 
            array (
                'id' => 16,
                'core_email_notification_types_type' => 8,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of rejected overtime',
            ),
            16 => 
            array (
                'id' => 17,
                'core_email_notification_types_type' => 9,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkaidő módosításáról',
            ),
            17 => 
            array (
                'id' => 18,
                'core_email_notification_types_type' => 9,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of change in working hours',
            ),
            18 => 
            array (
                'id' => 19,
                'core_email_notification_types_type' => 10,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkaidő módosításának elfogadásáról',
            ),
            19 => 
            array (
                'id' => 20,
                'core_email_notification_types_type' => 10,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approved change in working hours',
            ),
            20 => 
            array (
                'id' => 21,
                'core_email_notification_types_type' => 11,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkaidő módosításának elutasításáról',
            ),
            21 => 
            array (
                'id' => 22,
                'core_email_notification_types_type' => 11,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of rejected change in working hours ',
            ),
            22 => 
            array (
                'id' => 23,
                'core_email_notification_types_type' => 12,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés távollét rögzítéséről',
            ),
            23 => 
            array (
                'id' => 24,
                'core_email_notification_types_type' => 12,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of registration of absence',
            ),
            24 => 
            array (
                'id' => 25,
                'core_email_notification_types_type' => 13,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés távollét elfogadásáról',
            ),
            25 => 
            array (
                'id' => 26,
                'core_email_notification_types_type' => 13,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approved absence',
            ),
            26 => 
            array (
                'id' => 27,
                'core_email_notification_types_type' => 14,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés távollét elutasításáról',
            ),
            27 => 
            array (
                'id' => 28,
                'core_email_notification_types_type' => 14,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of rejected absence',
            ),
            28 => 
            array (
                'id' => 29,
                'core_email_notification_types_type' => 15,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés rögzített ügyelet elrendeléséről',
            ),
            29 => 
            array (
                'id' => 30,
                'core_email_notification_types_type' => 15,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered duty service',
            ),
            30 => 
            array (
                'id' => 31,
                'core_email_notification_types_type' => 16,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés rögzített ügyelet jóváhagyásáról',
            ),
            31 => 
            array (
                'id' => 32,
                'core_email_notification_types_type' => 16,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approved duty service',
            ),
            32 => 
            array (
                'id' => 33,
                'core_email_notification_types_type' => 17,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés rögzített ügyelet elutasításáról',
            ),
            33 => 
            array (
                'id' => 34,
                'core_email_notification_types_type' => 17,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of registered duty service rejection',
            ),
            34 => 
            array (
                'id' => 35,
                'core_email_notification_types_type' => 18,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés helyettesítésre felkérésről',
            ),
            35 => 
            array (
                'id' => 36,
                'core_email_notification_types_type' => 18,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of requested substitution',
            ),
            36 => 
            array (
                'id' => 37,
                'core_email_notification_types_type' => 19,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés helyettesítés megszüntetéséről',
            ),
            37 => 
            array (
                'id' => 38,
                'core_email_notification_types_type' => 19,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of terminated substitution',
            ),
            38 => 
            array (
                'id' => 39,
                'core_email_notification_types_type' => 20,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés beosztás elkészültéről',
            ),
            39 => 
            array (
                'id' => 40,
                'core_email_notification_types_type' => 20,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of roster completion ',
            ),
            40 => 
            array (
                'id' => 41,
                'core_email_notification_types_type' => 21,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés közvetlen felettes változásról',
            ),
            41 => 
            array (
                'id' => 42,
                'core_email_notification_types_type' => 21,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of change in superior',
            ),
            42 => 
            array (
                'id' => 43,
                'core_email_notification_types_type' => 22,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'Kötelező jelszó módosítás',
            ),
            43 => 
            array (
                'id' => 44,
                'core_email_notification_types_type' => 22,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'Mandatory password changes',
            ),
            44 => 
            array (
                'id' => 45,
                'core_email_notification_types_type' => 23,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-jelenlét értesítés karbantartási munkálatokról',
            ),
            45 => 
            array (
                'id' => 46,
                'core_email_notification_types_type' => 23,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of maintenance works',
            ),
            46 => 
            array (
                'id' => 47,
                'core_email_notification_types_type' => 24,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-jelenlét értesítés új kötelező tulajdonság létrejöttéről',
            ),
            47 => 
            array (
                'id' => 48,
                'core_email_notification_types_type' => 24,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of new mandatory property',
            ),
            48 => 
            array (
                'id' => 49,
                'core_email_notification_types_type' => 25,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-jelenlét új jelszó igénylése',
            ),
            49 => 
            array (
                'id' => 50,
                'core_email_notification_types_type' => 25,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'Request e-Jelenlét new password',
            ),
            50 => 
            array (
                'id' => 51,
                'core_email_notification_types_type' => 26,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'Értesítés a hamarosan lejáró könnyített állományairól',
            ),
            51 => 
            array (
                'id' => 52,
                'core_email_notification_types_type' => 26,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'Soon expiring simplified files',
            ),
            52 => 
            array (
                'id' => 53,
                'core_email_notification_types_type' => 3,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés szabadság igénylésről',
            ),
            53 => 
            array (
                'id' => 54,
                'core_email_notification_types_type' => 4,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés szabadság igény elutasításáról',
            ),
            54 => 
            array (
                'id' => 55,
                'core_email_notification_types_type' => 5,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés kiírt szabadság elfogadásáról',
            ),
            55 => 
            array (
                'id' => 56,
                'core_email_notification_types_type' => 6,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlóra rögzítésről',
            ),
            56 => 
            array (
                'id' => 57,
                'core_email_notification_types_type' => 7,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés elrendelt túlóra jóváhagyásáról',
            ),
            57 => 
            array (
                'id' => 58,
                'core_email_notification_types_type' => 8,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés elrendelt túlóra elutasításáról ',
            ),
            58 => 
            array (
                'id' => 59,
                'core_email_notification_types_type' => 9,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkaidő módosításáról',
            ),
            59 => 
            array (
                'id' => 60,
                'core_email_notification_types_type' => 10,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkaidő módosításának elfogadásáról',
            ),
            60 => 
            array (
                'id' => 61,
                'core_email_notification_types_type' => 11,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkaidő módosításának elutasításáról',
            ),
            61 => 
            array (
                'id' => 62,
                'core_email_notification_types_type' => 12,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés távollét rögzítéséről',
            ),
            62 => 
            array (
                'id' => 63,
                'core_email_notification_types_type' => 13,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés távollét elfogadásáról',
            ),
            63 => 
            array (
                'id' => 64,
                'core_email_notification_types_type' => 14,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés távollét elutasításáról',
            ),
            64 => 
            array (
                'id' => 65,
                'core_email_notification_types_type' => 15,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés elrendelt ügyelet rögzítéséről',
            ),
            65 => 
            array (
                'id' => 66,
                'core_email_notification_types_type' => 16,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés elrendelt ügyelet jóváhagyásáról',
            ),
            66 => 
            array (
                'id' => 67,
                'core_email_notification_types_type' => 17,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés elrendelt ügyelet elutasításáról',
            ),
            67 => 
            array (
                'id' => 68,
                'core_email_notification_types_type' => 3,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of requested holiday',
            ),
            68 => 
            array (
                'id' => 69,
                'core_email_notification_types_type' => 4,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of rejected holiday',
            ),
            69 => 
            array (
                'id' => 70,
                'core_email_notification_types_type' => 5,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of recorded holiday approval',
            ),
            70 => 
            array (
                'id' => 71,
                'core_email_notification_types_type' => 6,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of recorded overtime',
            ),
            71 => 
            array (
                'id' => 72,
                'core_email_notification_types_type' => 7,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered overtime approval',
            ),
            72 => 
            array (
                'id' => 73,
                'core_email_notification_types_type' => 8,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered overtime rejection',
            ),
            73 => 
            array (
                'id' => 74,
                'core_email_notification_types_type' => 9,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of change in working hours ',
            ),
            74 => 
            array (
                'id' => 75,
                'core_email_notification_types_type' => 10,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approved change in working hours ',
            ),
            75 => 
            array (
                'id' => 76,
                'core_email_notification_types_type' => 11,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of rejected change in working hours ',
            ),
            76 => 
            array (
                'id' => 77,
                'core_email_notification_types_type' => 12,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of registration of absence ',
            ),
            77 => 
            array (
                'id' => 78,
                'core_email_notification_types_type' => 13,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approved absence ',
            ),
            78 => 
            array (
                'id' => 79,
                'core_email_notification_types_type' => 14,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of rejected absence ',
            ),
            79 => 
            array (
                'id' => 80,
                'core_email_notification_types_type' => 15,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of registered duty service',
            ),
            80 => 
            array (
                'id' => 81,
                'core_email_notification_types_type' => 16,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered duty service approval',
            ),
            81 => 
            array (
                'id' => 82,
                'core_email_notification_types_type' => 17,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered duty service rejection',
            ),
            82 => 
            array (
                'id' => 83,
                'core_email_notification_types_type' => 27,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés készenlét rögzítéséről',
            ),
            83 => 
            array (
                'id' => 84,
                'core_email_notification_types_type' => 27,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés készenlét elrendeléséről',
            ),
            84 => 
            array (
                'id' => 85,
                'core_email_notification_types_type' => 28,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés készenlét jóváhagyásáról',
            ),
            85 => 
            array (
                'id' => 86,
                'core_email_notification_types_type' => 28,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés készenlét jóváhagyásáról',
            ),
            86 => 
            array (
                'id' => 87,
                'core_email_notification_types_type' => 29,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés készenlét elutasításáról',
            ),
            87 => 
            array (
                'id' => 88,
                'core_email_notification_types_type' => 29,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés készenlét elutasításáról',
            ),
            88 => 
            array (
                'id' => 89,
                'core_email_notification_types_type' => 27,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered standby',
            ),
            89 => 
            array (
                'id' => 90,
                'core_email_notification_types_type' => 27,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered standby',
            ),
            90 => 
            array (
                'id' => 91,
                'core_email_notification_types_type' => 28,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approved standby',
            ),
            91 => 
            array (
                'id' => 92,
                'core_email_notification_types_type' => 28,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered standby approval',
            ),
            92 => 
            array (
                'id' => 93,
                'core_email_notification_types_type' => 29,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of registered standby rejection',
            ),
            93 => 
            array (
                'id' => 94,
                'core_email_notification_types_type' => 29,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered standby rejection',
            ),
            94 => 
            array (
                'id' => 95,
                'core_email_notification_types_type' => 30,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlóra elrendeléséről',
            ),
            95 => 
            array (
                'id' => 96,
                'core_email_notification_types_type' => 31,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés szabadság elrendeléséről',
            ),
            96 => 
            array (
                'id' => 97,
                'core_email_notification_types_type' => 30,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered overtime',
            ),
            97 => 
            array (
                'id' => 98,
                'core_email_notification_types_type' => 31,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered holiday',
            ),
            98 => 
            array (
                'id' => 99,
                'core_email_notification_types_type' => 32,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés ügyelet törléséről',
            ),
            99 => 
            array (
                'id' => 100,
                'core_email_notification_types_type' => 32,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés ügyelet törléséről',
            ),
            100 => 
            array (
                'id' => 101,
                'core_email_notification_types_type' => 33,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés készenlét törléséről',
            ),
            101 => 
            array (
                'id' => 102,
                'core_email_notification_types_type' => 33,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés készenlét törléséről',
            ),
            102 => 
            array (
                'id' => 103,
                'core_email_notification_types_type' => 34,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlóra törléséről',
            ),
            103 => 
            array (
                'id' => 104,
                'core_email_notification_types_type' => 34,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlóra törléséről',
            ),
            104 => 
            array (
                'id' => 105,
                'core_email_notification_types_type' => 35,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés műszak törléséről',
            ),
            105 => 
            array (
                'id' => 106,
                'core_email_notification_types_type' => 35,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés műszak törléséről',
            ),
            106 => 
            array (
                'id' => 107,
                'core_email_notification_types_type' => 36,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés távollét törléséről',
            ),
            107 => 
            array (
                'id' => 108,
                'core_email_notification_types_type' => 36,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés távollét törléséről',
            ),
            108 => 
            array (
                'id' => 109,
                'core_email_notification_types_type' => 32,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of deleted duty service',
            ),
            109 => 
            array (
                'id' => 110,
                'core_email_notification_types_type' => 32,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of deleted duty service',
            ),
            110 => 
            array (
                'id' => 111,
                'core_email_notification_types_type' => 33,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of deleted standby',
            ),
            111 => 
            array (
                'id' => 112,
                'core_email_notification_types_type' => 33,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of deleted standby',
            ),
            112 => 
            array (
                'id' => 113,
                'core_email_notification_types_type' => 34,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of deleted overtime',
            ),
            113 => 
            array (
                'id' => 114,
                'core_email_notification_types_type' => 34,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of deleted overtime',
            ),
            114 => 
            array (
                'id' => 115,
                'core_email_notification_types_type' => 35,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of deleted shift',
            ),
            115 => 
            array (
                'id' => 116,
                'core_email_notification_types_type' => 35,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of deleted shift',
            ),
            116 => 
            array (
                'id' => 117,
                'core_email_notification_types_type' => 36,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of deleted absence',
            ),
            117 => 
            array (
                'id' => 118,
                'core_email_notification_types_type' => 36,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of deleted absence',
            ),
            118 => 
            array (
                'id' => 119,
                'core_email_notification_types_type' => 37,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés egyéb műszakon belüli pótlékos időszak rögzítéséről',
            ),
            119 => 
            array (
                'id' => 120,
                'core_email_notification_types_type' => 37,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification for fixing a replacement period within other shifts',
            ),
            120 => 
            array (
                'id' => 121,
                'core_email_notification_types_type' => 37,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés egyéb műszakon belüli pótlékos időszak rögzítéséről',
            ),
            121 => 
            array (
                'id' => 122,
                'core_email_notification_types_type' => 37,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification for fixing a replacement period within other shifts',
            ),
            122 => 
            array (
                'id' => 123,
                'core_email_notification_types_type' => 38,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés egyéb műszakon belüli pótlékos időszak jóváhagyásáról',
            ),
            123 => 
            array (
                'id' => 124,
                'core_email_notification_types_type' => 38,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approval of an additional extension within other frames',
            ),
            124 => 
            array (
                'id' => 125,
                'core_email_notification_types_type' => 38,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés egyéb műszakon belüli pótlékos időszak jóváhagyásáról',
            ),
            125 => 
            array (
                'id' => 126,
                'core_email_notification_types_type' => 38,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approval of an additional extension within other frames',
            ),
            126 => 
            array (
                'id' => 127,
                'core_email_notification_types_type' => 39,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés egyéb műszakon belüli pótlékos időszak elutasításáról',
            ),
            127 => 
            array (
                'id' => 128,
                'core_email_notification_types_type' => 39,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification for rejection of an additional substitution period within other ranges',
            ),
            128 => 
            array (
                'id' => 129,
                'core_email_notification_types_type' => 39,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés egyéb műszakon belüli pótlékos időszak elutasításáról',
            ),
            129 => 
            array (
                'id' => 130,
                'core_email_notification_types_type' => 39,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification for rejection of an additional substitution period within other ranges',
            ),
            130 => 
            array (
                'id' => 131,
                'core_email_notification_types_type' => 40,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés egyéb műszakon belüli pótlékos időszak törléséről',
            ),
            131 => 
            array (
                'id' => 132,
                'core_email_notification_types_type' => 40,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of cancellation of an additional period within another shift',
            ),
            132 => 
            array (
                'id' => 133,
                'core_email_notification_types_type' => 40,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés egyéb műszakon belüli pótlékos időszak törléséről',
            ),
            133 => 
            array (
                'id' => 134,
                'core_email_notification_types_type' => 40,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of cancellation of an additional period within another shift',
            ),
            134 => 
            array (
                'id' => 135,
                'core_email_notification_types_type' => 41,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés beosztás változásáról',
            ),
            135 => 
            array (
                'id' => 136,
                'core_email_notification_types_type' => 41,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of schedule changes',
            ),
            136 => 
            array (
                'id' => 137,
                'core_email_notification_types_type' => 42,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés jóváhagyandó napokról',
            ),
            137 => 
            array (
                'id' => 138,
                'core_email_notification_types_type' => 42,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of unconfirmed days',
            ),
            138 => 
            array (
                'id' => 139,
                'core_email_notification_types_type' => 42,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés jóváhagyandó napokról',
            ),
            139 => 
            array (
                'id' => 140,
                'core_email_notification_types_type' => 42,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of unconfirmed days',
            ),
            140 => 
            array (
                'id' => 141,
                'core_email_notification_types_type' => 43,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés - dolgozó előbb érkezett',
            ),
            141 => 
            array (
                'id' => 142,
                'core_email_notification_types_type' => 43,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification - worker arrived early',
            ),
            142 => 
            array (
                'id' => 143,
                'core_email_notification_types_type' => 44,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés - dolgozó később érkezett',
            ),
            143 => 
            array (
                'id' => 144,
                'core_email_notification_types_type' => 44,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification - worker arrived late',
            ),
            144 => 
            array (
                'id' => 145,
                'core_email_notification_types_type' => 45,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés - dolgozó előbb távozott',
            ),
            145 => 
            array (
                'id' => 146,
                'core_email_notification_types_type' => 45,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification - worker left early',
            ),
            146 => 
            array (
                'id' => 147,
                'core_email_notification_types_type' => 46,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés - dolgozó később távozott',
            ),
            147 => 
            array (
                'id' => 148,
                'core_email_notification_types_type' => 46,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification - worker left late',
            ),
            148 => 
            array (
                'id' => 149,
                'core_email_notification_types_type' => 47,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés - WinAccess beemelés',
            ),
            149 => 
            array (
                'id' => 150,
                'core_email_notification_types_type' => 47,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification - WinAccess import',
            ),
            150 => 
            array (
                'id' => 151,
                'core_email_notification_types_type' => 48,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés - műszakon belüli távollét',
            ),
            151 => 
            array (
                'id' => 152,
                'core_email_notification_types_type' => 48,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification - absence within shift',
            ),
            152 => 
            array (
                'id' => 153,
                'core_email_notification_types_type' => 49,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkanap felosztásának frissítéséről',
            ),
            153 => 
            array (
                'id' => 154,
                'core_email_notification_types_type' => 49,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of updated workday division',
            ),
            154 => 
            array (
                'id' => 155,
                'core_email_notification_types_type' => 49,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkanap felosztásának frissítéséről',
            ),
            155 => 
            array (
                'id' => 156,
                'core_email_notification_types_type' => 49,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of updated workday division',
            ),
            156 => 
            array (
                'id' => 157,
                'core_email_notification_types_type' => 50,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkanap felosztásának jóváhagyásáról',
            ),
            157 => 
            array (
                'id' => 158,
                'core_email_notification_types_type' => 50,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approved workday division update',
            ),
            158 => 
            array (
                'id' => 159,
                'core_email_notification_types_type' => 50,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkanap felosztásának jóváhagyásáról',
            ),
            159 => 
            array (
                'id' => 160,
                'core_email_notification_types_type' => 50,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of approved workday division update',
            ),
            160 => 
            array (
                'id' => 161,
                'core_email_notification_types_type' => 51,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkanap felosztásának elutasításáról',
            ),
            161 => 
            array (
                'id' => 162,
                'core_email_notification_types_type' => 51,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of rejected workday division update',
            ),
            162 => 
            array (
                'id' => 163,
                'core_email_notification_types_type' => 51,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkanap felosztásának elutasításáról',
            ),
            163 => 
            array (
                'id' => 164,
                'core_email_notification_types_type' => 51,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of rejected workday division update',
            ),
            164 => 
            array (
                'id' => 165,
                'core_email_notification_types_type' => 52,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlórát is tartalmazó készenlét elrendeléséről',
            ),
            165 => 
            array (
                'id' => 166,
                'core_email_notification_types_type' => 52,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered standby including overtime',
            ),
            166 => 
            array (
                'id' => 167,
                'core_email_notification_types_type' => 52,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlórát is tartalmazó készenlét rögzítéséről',
            ),
            167 => 
            array (
                'id' => 168,
                'core_email_notification_types_type' => 52,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered standby including overtime',
            ),
            168 => 
            array (
                'id' => 169,
                'core_email_notification_types_type' => 53,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés készenlét elrendeléséről, ami egy korábbi törlésével járt',
            ),
            169 => 
            array (
                'id' => 170,
                'core_email_notification_types_type' => 53,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered standby, which resulted in a previous deletion',
            ),
            170 => 
            array (
                'id' => 171,
                'core_email_notification_types_type' => 53,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés készenlét rögzítéséről, ami egy korábbi törlésével járt',
            ),
            171 => 
            array (
                'id' => 172,
                'core_email_notification_types_type' => 53,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered standby, which resulted in a previous deletion',
            ),
            172 => 
            array (
                'id' => 173,
                'core_email_notification_types_type' => 54,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlórát is tartalmazó készenlét elrendeléséről, ami egy korábbi törlésével járt',
            ),
            173 => 
            array (
                'id' => 174,
                'core_email_notification_types_type' => 54,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered standby including overtime, which resulted in a previous deletion',
            ),
            174 => 
            array (
                'id' => 175,
                'core_email_notification_types_type' => 54,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés túlórát is tartalmazó készenlét rögzítéséről, ami egy korábbi törlésével járt',
            ),
            175 => 
            array (
                'id' => 176,
                'core_email_notification_types_type' => 54,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of ordered standby including overtime, which resulted in a previous deletion',
            ),
            176 => 
            array (
                'id' => 177,
                'core_email_notification_types_type' => 55,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés vezető kiléptetéséről',
            ),
            177 => 
            array (
                'id' => 178,
                'core_email_notification_types_type' => 55,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of quit of Leader ',
            ),
            178 => 
            array (
                'id' => 179,
                'core_email_notification_types_type' => 56,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés - jogviszony törlése a hierarchiából',
            ),
            179 => 
            array (
                'id' => 180,
                'core_email_notification_types_type' => 56,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification - legal entity deletion from the hierarchy',
            ),
            180 => 
            array (
                'id' => 181,
                'core_email_notification_types_type' => 57,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkavégzés helyének megadásáról',
            ),
            181 => 
            array (
                'id' => 182,
                'core_email_notification_types_type' => 57,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of the place of work',
            ),
            182 => 
            array (
                'id' => 183,
                'core_email_notification_types_type' => 57,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkavégzés helyének megadásáról',
            ),
            183 => 
            array (
                'id' => 184,
                'core_email_notification_types_type' => 57,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of the place of work',
            ),
            184 => 
            array (
                'id' => 185,
                'core_email_notification_types_type' => 58,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkaidő módosításáról és távollét rögzítéséről',
            ),
            185 => 
            array (
                'id' => 186,
                'core_email_notification_types_type' => 58,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of change in working hours and registration of absence',
            ),
            186 => 
            array (
                'id' => 187,
                'core_email_notification_types_type' => 58,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkaidő módosításáról és távollét rögzítéséről',
            ),
            187 => 
            array (
                'id' => 188,
                'core_email_notification_types_type' => 58,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of change in working hours and registration of absence',
            ),
            188 => 
            array (
                'id' => 189,
                'core_email_notification_types_type' => 59,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkaidő módosításáról és kiírt szabadságról',
            ),
            189 => 
            array (
                'id' => 190,
                'core_email_notification_types_type' => 59,
                'subtype' => 0,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of change in working hours and recorded holiday',
            ),
            190 => 
            array (
                'id' => 191,
                'core_email_notification_types_type' => 59,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 1,
                'subject' => 'e-Jelenlét értesítés munkaidő módosításáról és szabadság igénylésről',
            ),
            191 => 
            array (
                'id' => 192,
                'core_email_notification_types_type' => 59,
                'subtype' => 1,
                'core_firms_id' => 1,
                'localization_id' => 2,
                'subject' => 'e-Jelenlét notification of change in working hours and requested holiday',
            ),
        ));

        
    }
}