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
        Schema::table('attendance_workplans', function (Blueprint $table) {
            $table->foreign(['core_firms_id'], 'key0015')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_workplan_categories_id'], 'key0016')->references(['id'])->on('attendance_workplan_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_verification_condition_systems_id'], 'key0017')->references(['id'])->on('attendance_verification_condition_systems')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_access_control_systems_id'], 'key0018')->references(['id'])->on('attendance_access_control_systems')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['holiday_bonus_id'], 'key0019')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['restday_bonus_id'], 'key0020')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['sunday_bonus_id'], 'key0021')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['overtime_bonus_id'], 'key0022')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['stand_by_bonus_id'], 'key0023')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['duty_bonus_id'], 'key0024')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['night_shift_bonus_id'], 'key1005')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['afternoon_shift_bonus_id'], 'key1006')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['overtime_base_bonus_id'], 'key1007')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['travel_time_workday_bonus_type_id'], 'key20044')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['travel_time_restday_bonus_type_id'], 'key20046')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_access_control_systems_rule_id'], 'key2060')->references(['id'])->on('attendance_access_control_systems_rules')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_workplans', function (Blueprint $table) {
            $table->dropForeign('key0015');
            $table->dropForeign('key0016');
            $table->dropForeign('key0017');
            $table->dropForeign('key0018');
            $table->dropForeign('key0019');
            $table->dropForeign('key0020');
            $table->dropForeign('key0021');
            $table->dropForeign('key0022');
            $table->dropForeign('key0023');
            $table->dropForeign('key0024');
            $table->dropForeign('key1005');
            $table->dropForeign('key1006');
            $table->dropForeign('key1007');
            $table->dropForeign('key20044');
            $table->dropForeign('key20046');
            $table->dropForeign('key2060');
        });
    }
};
