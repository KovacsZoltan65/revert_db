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
        Schema::table('attendance_worktimelimit_rest_time_difference_bonus', function (Blueprint $table) {
            $table->foreign(['attendance_worktimelimits_id'], 'key21034')->references(['id'])->on('attendance_worktimelimits')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_bonus_types_id'], 'key21035')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_worktimelimit_rest_time_difference_bonus', function (Blueprint $table) {
            $table->dropForeign('key21034');
            $table->dropForeign('key21035');
        });
    }
};
