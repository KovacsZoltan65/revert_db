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
        Schema::table('attendance_workplan_shifts', function (Blueprint $table) {
            $table->foreign(['attendance_workplans_id'], 'key0027')->references(['id'])->on('attendance_workplans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_day_types_id'], 'key0028')->references(['id'])->on('attendance_day_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_shift_types_id'], 'key0029')->references(['id'])->on('attendance_shift_types')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_workplan_shifts', function (Blueprint $table) {
            $table->dropForeign('key0027');
            $table->dropForeign('key0028');
            $table->dropForeign('key0029');
        });
    }
};
