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
        Schema::create('attendance_workplan_shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_workplans_id')->index('key0027');
            $table->unsignedInteger('attendance_day_types_id')->index('key0028');
            $table->unsignedInteger('attendance_shift_types_id')->nullable()->index('key0029');
            $table->date('_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_workplan_shifts');
    }
};
