<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('core_permission_groups_action_permissions_rel', function (Blueprint $table) {
            $table->foreign(['core_permission_groups_id'], 'key007')->references(['id'])->on('core_permission_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_actions_id'], 'key008')->references(['id'])->on('core_actions')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_permission_groups_action_permissions_rel', function (Blueprint $table) {
            $table->dropForeign('key007');
            $table->dropForeign('key008');
        });
    }
};
