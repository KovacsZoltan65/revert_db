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
        Schema::table('attendance_holiday_rule_schedules', function (Blueprint $table) {
            $table->foreign(['attendance_holiday_rule_id'], 'key2108')->references(['id'])->on('attendance_holiday_rules')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_holiday_rule_schedules', function (Blueprint $table) {
            $table->dropForeign('key2108');
        });
    }
};
