<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoreReportClassesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('core_report_classes')->truncate();
        
        \DB::table('core_report_classes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'core_report_categories_id' => 1,
                'class_name' => 'GeneratedBalanceReport',
                'description' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'core_report_categories_id' => 1,
                'class_name' => 'FullDaySlipsReport',
                'description' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'core_report_categories_id' => 2,
                'class_name' => 'AbscencesReport',
                'description' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'core_report_categories_id' => 1,
                'class_name' => 'NoCardMovingReport',
                'description' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'core_report_categories_id' => 2,
                'class_name' => 'PlannedAbscencesReport',
                'description' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'core_report_categories_id' => 3,
                'class_name' => 'BodyDatasReport',
                'description' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'core_report_categories_id' => 1,
                'class_name' => 'NotApprovedDaysReport',
                'description' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'core_report_categories_id' => 1,
                'class_name' => 'BalanceTimeValuesReport',
                'description' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'core_report_categories_id' => 1,
                'class_name' => 'BonusesWithinShiftsReport',
                'description' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'core_report_categories_id' => 2,
                'class_name' => 'NotApprovedAbscencesReport',
                'description' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'core_report_categories_id' => 1,
                'class_name' => 'ApprovedOvertimesWithBonusesReport',
                'description' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'core_report_categories_id' => 2,
                'class_name' => 'HolidayEntitlementsReport',
                'description' => '',
            ),
            12 => 
            array (
                'id' => 13,
                'core_report_categories_id' => 3,
                'class_name' => 'DailyTrackingsReport',
                'description' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'core_report_categories_id' => 1,
                'class_name' => 'FullDayBonusReport',
                'description' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'core_report_categories_id' => 3,
                'class_name' => 'NoWorkplanAssignmentReport',
                'description' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'core_report_categories_id' => 2,
                'class_name' => 'AbscencesReportWithDynamicDates',
                'description' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'core_report_categories_id' => 1,
                'class_name' => 'ShiftsPerDayReport',
                'description' => '',
            ),
            17 => 
            array (
                'id' => 18,
                'core_report_categories_id' => 1,
                'class_name' => 'WeekdayOvertimesReport',
                'description' => '',
            ),
            18 => 
            array (
                'id' => 19,
                'core_report_categories_id' => 1,
                'class_name' => 'WeekendOvertimesReport',
                'description' => '',
            ),
            19 => 
            array (
                'id' => 20,
                'core_report_categories_id' => 1,
                'class_name' => 'AttendanceInGivenIntervalReport',
                'description' => '',
            ),
            20 => 
            array (
                'id' => 21,
                'core_report_categories_id' => 1,
                'class_name' => 'PersonsAssignedWorkplansReport',
                'description' => '',
            ),
            21 => 
            array (
                'id' => 22,
                'core_report_categories_id' => 4,
                'class_name' => 'WorkTimeLimitChecklistReport',
                'description' => '',
            ),
            22 => 
            array (
                'id' => 23,
                'core_report_categories_id' => 3,
                'class_name' => 'LastExportDateReport',
                'description' => '',
            ),
            23 => 
            array (
                'id' => 24,
                'core_report_categories_id' => 1,
                'class_name' => 'PlaceOfWorkReport',
                'description' => '',
            ),
            24 => 
            array (
                'id' => 25,
                'core_report_categories_id' => 5,
                'class_name' => 'DailyAllInRiport',
                'description' => '',
            ),
            25 => 
            array (
                'id' => 26,
                'core_report_categories_id' => 1,
                'class_name' => 'OverworkAndShortageOfWork',
                'description' => '',
            ),
            26 => 
            array (
                'id' => 27,
                'core_report_categories_id' => 2,
                'class_name' => 'PlannedAbscencesByDateReport',
                'description' => '',
            ),
            27 => 
            array (
                'id' => 28,
                'core_report_categories_id' => 2,
                'class_name' => 'OffdaysForPeriodsReport',
                'description' => '',
            ),
            28 => 
            array (
                'id' => 29,
                'core_report_categories_id' => 1,
                'class_name' => 'BalanceTimeReport',
                'description' => '',
            ),
            29 => 
            array (
                'id' => 30,
                'core_report_categories_id' => 5,
                'class_name' => 'AccessControllSystemReport',
                'description' => '',
            ),
            30 => 
            array (
                'id' => 31,
                'core_report_categories_id' => 1,
                'class_name' => 'AttendanceSheetReport',
                'description' => '',
            ),
        ));

        
    }
}