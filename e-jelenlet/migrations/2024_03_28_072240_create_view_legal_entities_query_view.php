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
        DB::statement("CREATE VIEW `view_legal_entities_query` AS select `core_legal_entities`.`core_legal_entities_id` AS `core_legal_entities_id`,`core_legal_entities`.`core_firms_id` AS `core_firms_id`,`core_legal_entities`.`legal_entity_name` AS `legal_entity_name`,`core_legal_entities`.`core_establishments_id` AS `core_establishments_id`,`core_legal_entities`.`core_departments_id` AS `core_departments_id`,`core_legal_entities`.`start_date` AS `start_date`,`core_legal_entities`.`last_workday_date` AS `last_workday_date`,`core_legal_entities`.`end_date` AS `end_date`,`core_legal_entities`.`last_export_date` AS `last_export_date`,`core_legal_entities`.`outsourced_admin` AS `outsourced_admin`,`core_legal_entities`.`payroll_software_id` AS `payroll_software_id`,`core_legal_entities`.`virtual_legal_entity` AS `virtual_legal_entity`,`core_legal_entities`.`core_persons_id` AS `core_persons_id`,`core_persons`.`person_name` AS `person_name`,`core_persons`.`person_email` AS `person_email` from ((select `ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_id` AS `core_legal_entities_id`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 2),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `core_firms_id`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 1),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `legal_entity_name`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 10),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `core_establishments_id`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 11),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `core_departments_id`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 7),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `start_date`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 14),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `last_workday_date`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 8),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `end_date`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 9),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `last_export_date`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 16),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `outsourced_admin`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 15),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `payroll_software_id`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 18),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `virtual_legal_entity`,group_concat(if((`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` = 3),`ej2_showtime_p`.`core_legal_entities_attributes_values`.`value`,'') separator '') AS `core_persons_id` from `ej2_showtime_p`.`core_legal_entities_attributes_values` where (`ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_attributes_id` in (1,2,3,7,8,9,10,11,14,15,16,18)) group by `ej2_showtime_p`.`core_legal_entities_attributes_values`.`core_legal_entities_id`) `core_legal_entities` join (select `ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_id` AS `core_persons_id`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 4),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `person_name`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 2),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `person_email` from `ej2_showtime_p`.`core_persons_attributes_values` where (`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` in (2,4)) group by `ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_id`) `core_persons` on((`core_persons`.`core_persons_id` = `core_legal_entities`.`core_persons_id`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_legal_entities_query`");
    }
};
