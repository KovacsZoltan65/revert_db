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
        DB::statement("CREATE VIEW `view_persons_query` AS select `core_persons`.`core_persons_id` AS `core_persons_id`,`core_persons`.`email` AS `email`,`core_persons`.`name` AS `name`,`core_persons`.`ohr` AS `ohr`,`core_persons`.`other_identification` AS `other_identification`,`core_persons`.`password` AS `password`,`core_persons`.`active` AS `active`,`core_persons`.`lang` AS `lang`,`core_persons`.`password_repeat` AS `password_repeat`,`core_persons`.`tax_id` AS `tax_id`,`core_persons`.`forbid_logging_in` AS `forbid_logging_in` from (select `ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_id` AS `core_persons_id`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 1),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `ohr`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 2),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `email`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 3),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `other_identification`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 4),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `name`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 5),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `password`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 6),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `active`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 7),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `lang`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 8),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `password_repeat`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 9),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `tax_id`,group_concat(if((`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` = 10),`ej2_showtime_p`.`core_persons_attributes_values`.`value`,'') separator '') AS `forbid_logging_in` from `ej2_showtime_p`.`core_persons_attributes_values` where (`ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_attributes_id` in (1,2,3,4,5,6,7,8,9,10)) group by `ej2_showtime_p`.`core_persons_attributes_values`.`core_persons_id`) `core_persons`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_persons_query`");
    }
};
