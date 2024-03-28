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
        Schema::table('attendance_standby_overtimes', function (Blueprint $table) {
            $table->foreign(['attendance_legal_entities_outside_shifts_time_id'], 'key1021')->references(['id'])->on('attendance_legal_entities_outside_shifts_time')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_standby_overtimes', function (Blueprint $table) {
            $table->dropForeign('key1021');
        });
    }
};
