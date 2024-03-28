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
        Schema::create('sync_token_actions_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sync_api_token_id')->index('9059');
            $table->integer('core_actions_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sync_token_actions_rel');
    }
};
