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
        Schema::table('attendance_legal_entities_calendar_attendance_places_of_work_rel', function (Blueprint $table) {
            $table->foreign(['attendance_legal_entities_calendar_id'], 'key0049')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_places_of_work_id'], 'key0050')->references(['id'])->on('attendance_places_of_work')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_entities_calendar_attendance_places_of_work_rel', function (Blueprint $table) {
            $table->dropForeign('key0049');
            $table->dropForeign('key0050');
        });
    }
};
