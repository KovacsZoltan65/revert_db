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
        DB::statement("CREATE VIEW `view_special_permissions_query` AS select `rel0`.`core_actions_id` AS `core_actions_id`,`rel1`.`core_legal_entities_id` AS `source_legal_entity_id`,`rel2`.`core_legal_entities_id` AS `target_legal_entity_id`,`p`.`core_persons_id` AS `target_person_id`,`p`.`value` AS `target_person_name` from (((((`ej2_showtime_p`.`core_special_permissions` `sp` join `ej2_showtime_p`.`core_special_permissions_core_actions_rel` `rel0` on((`rel0`.`core_special_permissions_id` = `sp`.`id`))) join `ej2_showtime_p`.`core_permission_groups_core_legal_entities_rel` `rel1` on((`rel1`.`core_permission_groups_id` = `sp`.`source_permission_group_id`))) join `ej2_showtime_p`.`core_permission_groups_core_legal_entities_rel` `rel2` on((`rel2`.`core_permission_groups_id` = `sp`.`target_permission_group_id`))) join `ej2_showtime_p`.`core_legal_entities_attributes_values` `le` on(((`rel2`.`core_legal_entities_id` = `le`.`core_legal_entities_id`) and (`le`.`core_legal_entities_attributes_id` = 3)))) join `ej2_showtime_p`.`core_persons_attributes_values` `p` on(((`le`.`value` = `p`.`core_persons_id`) and (`p`.`core_persons_attributes_id` = 4))))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_special_permissions_query`");
    }
};
