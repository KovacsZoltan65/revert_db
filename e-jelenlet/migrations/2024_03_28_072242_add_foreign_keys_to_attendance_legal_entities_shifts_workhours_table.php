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
        Schema::table('attendance_legal_entities_shifts_workhours', function (Blueprint $table) {
            $table->foreign(['registered_calendar_id'], 'key3000')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['payroll_calendar_id'], 'key3001')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_legal_entities_shifts_id'], 'key3002')->references(['id'])->on('attendance_legal_entities_shifts')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_entities_shifts_workhours', function (Blueprint $table) {
            $table->dropForeign('key3000');
            $table->dropForeign('key3001');
            $table->dropForeign('key3002');
        });
    }
};
