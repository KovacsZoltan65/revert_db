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
        Schema::table('attendance_legal_entities_abscences', function (Blueprint $table) {
            $table->foreign(['registered_calendar_id'], 'key0053')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['payroll_calendar_id'], 'key0054')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_legal_entities_shifts_id'], 'key0055')->references(['id'])->on('attendance_legal_entities_shifts')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_abscence_types_id'], 'key0056')->references(['id'])->on('attendance_abscence_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_offday_types_id'], 'key0057')->references(['id'])->on('attendance_offday_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['creator_legal_entity_id'], 'key0058')->references(['id'])->on('core_legal_entities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_entities_abscences', function (Blueprint $table) {
            $table->dropForeign('key0053');
            $table->dropForeign('key0054');
            $table->dropForeign('key0055');
            $table->dropForeign('key0056');
            $table->dropForeign('key0057');
            $table->dropForeign('key0058');
        });
    }
};
