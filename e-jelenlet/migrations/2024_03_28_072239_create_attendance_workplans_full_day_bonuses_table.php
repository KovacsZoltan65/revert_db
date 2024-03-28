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
        Schema::create('attendance_workplans_full_day_bonuses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_workplans_id')->index('key2009')->comment('külső kulcs a munkarendek táblájához');
            $table->unsignedInteger('attendance_bonus_types_id')->index('key2010')->comment('külső kulcs a pótlékok táblájához');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_workplans_full_day_bonuses');
    }
};
