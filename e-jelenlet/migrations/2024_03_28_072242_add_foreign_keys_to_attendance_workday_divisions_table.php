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
        Schema::table('attendance_workday_divisions', function (Blueprint $table) {
            $table->foreign(['attendance_legal_entities_calendar_id'], 'key1027')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_legal_entities_shifts_id'], 'key1028')->references(['id'])->on('attendance_legal_entities_shifts')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_legal_entities_overtimes_id'], 'key1029')->references(['id'])->on('attendance_legal_entities_overtimes')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_legal_entities_outside_shifts_time_id'], 'key1030')->references(['id'])->on('attendance_legal_entities_outside_shifts_time')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_standby_overtimes_id'], 'key1031')->references(['id'])->on('attendance_standby_overtimes')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_legal_entities_abscences_id'], 'key1329')->references(['id'])->on('attendance_legal_entities_abscences')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_shift_breaks_id'], 'key1330')->references(['id'])->on('attendance_shift_breaks')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_workday_divisions', function (Blueprint $table) {
            $table->dropForeign('key1027');
            $table->dropForeign('key1028');
            $table->dropForeign('key1029');
            $table->dropForeign('key1030');
            $table->dropForeign('key1031');
            $table->dropForeign('key1329');
            $table->dropForeign('key1330');
        });
    }
};
