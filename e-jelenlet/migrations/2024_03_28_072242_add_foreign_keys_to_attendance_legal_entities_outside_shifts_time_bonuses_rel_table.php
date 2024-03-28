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
        Schema::table('attendance_legal_entities_outside_shifts_time_bonuses_rel', function (Blueprint $table) {
            $table->foreign(['attendance_legal_entities_outside_shifts_time_id'], 'key0047')->references(['id'])->on('attendance_legal_entities_outside_shifts_time')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_bonus_types_id'], 'key0048')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_entities_outside_shifts_time_bonuses_rel', function (Blueprint $table) {
            $table->dropForeign('key0047');
            $table->dropForeign('key0048');
        });
    }
};
