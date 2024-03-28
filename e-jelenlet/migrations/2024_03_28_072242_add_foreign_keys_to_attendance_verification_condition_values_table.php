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
        Schema::table('attendance_verification_condition_values', function (Blueprint $table) {
            $table->foreign(['attendance_verification_condition_system_id'], 'key0033')->references(['id'])->on('attendance_verification_condition_systems')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_verification_condition_id'], 'key0034')->references(['id'])->on('attendance_verification_conditions')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_verification_condition_values', function (Blueprint $table) {
            $table->dropForeign('key0033');
            $table->dropForeign('key0034');
        });
    }
};
