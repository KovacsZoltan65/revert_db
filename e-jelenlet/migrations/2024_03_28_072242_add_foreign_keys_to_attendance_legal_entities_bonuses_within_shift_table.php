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
        Schema::table('attendance_legal_entities_bonuses_within_shift', function (Blueprint $table) {
            $table->foreign(['registered_calendar_id'], 'key3006')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['payroll_calendar_id'], 'key3007')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_legal_entities_shifts_id'], 'key3008')->references(['id'])->on('attendance_legal_entities_shifts')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_bonus_types_id'], 'key3009')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['creator_legal_entity_id'], 'key3010')->references(['id'])->on('core_legal_entities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_entities_bonuses_within_shift', function (Blueprint $table) {
            $table->dropForeign('key3006');
            $table->dropForeign('key3007');
            $table->dropForeign('key3008');
            $table->dropForeign('key3009');
            $table->dropForeign('key3010');
        });
    }
};
