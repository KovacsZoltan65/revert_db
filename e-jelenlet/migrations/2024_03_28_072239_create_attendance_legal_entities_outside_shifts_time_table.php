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
        Schema::create('attendance_legal_entities_outside_shifts_time', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->default(0)->comment('1: készenlét, 2: ügyelet');
            $table->unsignedInteger('attendance_legal_entities_calendar_id')->nullable()->index('key0045');
            $table->unsignedInteger('attendance_standby_types_id')->nullable()->index('key1020')->comment('a készenlét szótári azonosítója');
            $table->unsignedInteger('creator_legal_entity_id')->nullable()->index('key0046');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('note_legal_entity');
            $table->string('note_boss');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_legal_entities_outside_shifts_time');
    }
};
