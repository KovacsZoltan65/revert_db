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
        Schema::create('attendance_legal_entities_bonuses_within_shift', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('registered_calendar_id')->index('key3006');
            $table->unsignedInteger('payroll_calendar_id')->index('key3007');
            $table->unsignedInteger('attendance_legal_entities_shifts_id')->index('key3008');
            $table->unsignedInteger('attendance_bonus_types_id')->index('key3009');
            $table->unsignedInteger('creator_legal_entity_id')->index('key3010');
            $table->time('start_time');
            $table->time('end_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_legal_entities_bonuses_within_shift');
    }
};
