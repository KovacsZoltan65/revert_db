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
        Schema::create('attendance_places_of_work_bonuses_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_places_of_work_id')->index('key2098')->comment('külső kulcs a munkavégzés helye táblájához');
            $table->unsignedInteger('attendance_bonus_types_id')->index('key2099')->comment('külső kulcs a pótlékok táblájához');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_places_of_work_bonuses_rel');
    }
};
