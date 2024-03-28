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
        Schema::create('attendance_worktimelimit_abscences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_worktimelimits_id')->index('key2041')->comment('munkaidőkeret azonosítója az attendance_worktimelimits táblából');
            $table->unsignedInteger('abscence_types_id')->index('key2042')->comment('A távollét azonosítója az attendance_abscence_types_core_firms_rel táblában');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_worktimelimit_abscences');
    }
};
