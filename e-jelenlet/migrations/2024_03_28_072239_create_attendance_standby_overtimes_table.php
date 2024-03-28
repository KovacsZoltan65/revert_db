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
        Schema::create('attendance_standby_overtimes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_legal_entities_outside_shifts_time_id')->index('key1021')->comment('a készenlét azonosítója a jogviszony naptárában');
            $table->time('start_time')->comment('a túlóra kezdő időpontja');
            $table->time('end_time')->comment('a túlóra záró időpontja');
            $table->tinyInteger('work_by_traveling')->default(0)->comment('utazással járt-e a munkavégzés (0 - nem, 1 - igen)');
            $table->string('note')->comment('megjegyzés a túlórához');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_standby_overtimes');
    }
};
