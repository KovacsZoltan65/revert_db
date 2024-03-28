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
        Schema::table('attendance_worktimelimit_abscences', function (Blueprint $table) {
            $table->foreign(['attendance_worktimelimits_id'], 'key2041')->references(['id'])->on('attendance_worktimelimits')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['abscence_types_id'], 'key2042')->references(['attendance_abscence_types_id'])->on('attendance_abscence_types_core_firms_rel')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_worktimelimit_abscences', function (Blueprint $table) {
            $table->dropForeign('key2041');
            $table->dropForeign('key2042');
        });
    }
};
