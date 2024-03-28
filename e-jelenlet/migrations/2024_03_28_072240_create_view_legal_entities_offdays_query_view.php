<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `view_legal_entities_offdays_query` AS select `off`.`payroll_calendar_id` AS `attendance_legal_entities_calendar_id`,`off`.`id` AS `attendance_legal_entities_abscences_id`,`off`.`attendance_offday_types_id` AS `attendance_offday_types_id`,`lea`.`value` AS `core_firms_id`,`cal`.`_date` AS `_date`,`cal`.`core_legal_entities_id` AS `core_legal_entities_id`,`off`.`creator_legal_entity_id` AS `creator_legal_entity_id`,`cal`.`legal_entity_confirmed` AS `legal_entity_confirmed`,`cal`.`boss_confirmed` AS `boss_confirmed`,`cal`.`boss_confirmed_id` AS `boss_confirmed_id`,cast(`off`.`created_at` as date) AS `created_at` from ((`ej2_showtime_p`.`attendance_legal_entities_abscences` `off` join `ej2_showtime_p`.`attendance_legal_entities_calendar` `cal` on((`off`.`payroll_calendar_id` = `cal`.`id`))) join `ej2_showtime_p`.`core_legal_entities_attributes_values` `lea` on(((`cal`.`core_legal_entities_id` = `lea`.`core_legal_entities_id`) and (`lea`.`core_legal_entities_attributes_id` = 2)))) where ((`off`.`attendance_offday_types_id` is not null) and (`off`.`attendance_legal_entities_shifts_id` is null))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_legal_entities_offdays_query`");
    }
};
