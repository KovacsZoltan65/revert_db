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
        Schema::create('core_special_permissions_core_actions_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_special_permissions_id')->index('key1003');
            $table->unsignedInteger('core_actions_id')->index('key1004');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_special_permissions_core_actions_rel');
    }
};
