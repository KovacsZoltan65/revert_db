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
        Schema::table('attendance_legal_entities_shifts', function (Blueprint $table) {
            $table->foreign(['registered_calendar_id'], 'key0037')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_shift_types_id'], 'key0038')->references(['id'])->on('attendance_shift_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['payroll_calendar_id'], 'key0064')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_entities_shifts', function (Blueprint $table) {
            $table->dropForeign('key0037');
            $table->dropForeign('key0038');
            $table->dropForeign('key0064');
        });
    }
};
