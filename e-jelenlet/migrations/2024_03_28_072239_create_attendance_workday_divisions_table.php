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
        Schema::create('attendance_workday_divisions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_legal_entities_calendar_id')->index('key1027')->comment('a nap naptári azonosítója');
            $table->unsignedInteger('attendance_legal_entities_shifts_id')->nullable()->index('key1028')->comment('a műszak naptári azonosítója');
            $table->unsignedInteger('attendance_shift_breaks_id')->nullable()->index('key1330')->comment('müszak szünetének azonosítója');
            $table->unsignedInteger('attendance_legal_entities_overtimes_id')->nullable()->index('key1029')->comment('a műszakon kívüli túlóra naptári azonosítója');
            $table->unsignedInteger('attendance_legal_entities_outside_shifts_time_id')->nullable()->index('key1030')->comment('a készenlét naptári azonosítója');
            $table->unsignedInteger('attendance_standby_overtimes_id')->nullable()->index('key1031')->comment('a készenlét alatti túlóra naptári azonosítója');
            $table->unsignedInteger('attendance_legal_entities_abscences_id')->nullable()->index('key1329')->comment('a távollét naptári azonosítója');
            $table->time('start_time')->comment('a kezdés időpontja az adott network-ön');
            $table->time('end_time')->comment('a zárás időpontja az adott network-ön');
            $table->integer('percent_start')->nullable();
            $table->integer('percent_end')->nullable();
            $table->json('categories')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_workday_divisions');
    }
};
