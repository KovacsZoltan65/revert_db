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
        Schema::table('attendance_legal_entities_outside_shifts_time', function (Blueprint $table) {
            $table->foreign(['attendance_legal_entities_calendar_id'], 'key0045')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['creator_legal_entity_id'], 'key0046')->references(['id'])->on('core_legal_entities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['attendance_standby_types_id'], 'key1020')->references(['id'])->on('attendance_standby_types')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_entities_outside_shifts_time', function (Blueprint $table) {
            $table->dropForeign('key0045');
            $table->dropForeign('key0046');
            $table->dropForeign('key1020');
        });
    }
};
