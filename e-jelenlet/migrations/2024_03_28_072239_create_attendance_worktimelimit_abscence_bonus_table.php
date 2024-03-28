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
        Schema::create('attendance_worktimelimit_abscence_bonus', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_worktimelimits_id')->index('key20236')->comment('munkaidőkeret azonosítója az attendance_worktimelimits táblából');
            $table->unsignedInteger('attendance_bonus_types_id')->index('key20237')->comment('A pótlék azonosítója az attendance_bonus_types táblában');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_worktimelimit_abscence_bonus');
    }
};
