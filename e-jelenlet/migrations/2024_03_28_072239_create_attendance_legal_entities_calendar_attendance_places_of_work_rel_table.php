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
        Schema::create('attendance_legal_entities_calendar_attendance_places_of_work_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_legal_entities_calendar_id')->nullable()->index('key0049');
            $table->unsignedInteger('attendance_places_of_work_id')->nullable()->index('key0050');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_legal_entities_calendar_attendance_places_of_work_rel');
    }
};
