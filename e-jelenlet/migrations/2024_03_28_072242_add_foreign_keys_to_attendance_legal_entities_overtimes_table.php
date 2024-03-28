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
        Schema::table('attendance_legal_entities_overtimes', function (Blueprint $table) {
            $table->foreign(['registered_calendar_id'], 'key0039')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['payroll_calendar_id'], 'key0040')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_legal_entities_shifts_id'], 'key0041')->references(['id'])->on('attendance_legal_entities_shifts')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['creator_legal_entity_id'], 'key0042')->references(['id'])->on('core_legal_entities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_entities_overtimes', function (Blueprint $table) {
            $table->dropForeign('key0039');
            $table->dropForeign('key0040');
            $table->dropForeign('key0041');
            $table->dropForeign('key0042');
        });
    }
};
