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
        Schema::create('core_permission_groups_action_permissions_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_permission_groups_id')->default(0)->index('key007');
            $table->unsignedInteger('core_actions_id')->default(0)->index('key008');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_permission_groups_action_permissions_rel');
    }
};
