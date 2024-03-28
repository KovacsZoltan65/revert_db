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
        Schema::table('attendance_places_of_work_bonuses_rel', function (Blueprint $table) {
            $table->foreign(['attendance_places_of_work_id'], 'key2098')->references(['id'])->on('attendance_places_of_work')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_bonus_types_id'], 'key2099')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_places_of_work_bonuses_rel', function (Blueprint $table) {
            $table->dropForeign('key2098');
            $table->dropForeign('key2099');
        });
    }
};
