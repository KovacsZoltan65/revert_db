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
        Schema::create('attendance_holiday_rule_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_holiday_rule_id')->index('key2108');
            $table->date('planning_from_date');
            $table->date('planning_to_date');
            $table->date('planning_deadline')->nullable();
            $table->tinyInteger('percentage_of_holidays');
            $table->tinyInteger('minimum_number_of_required_days')->nullable();
            $table->tinyInteger('worker_has')->nullable();
            $table->tinyInteger('required_at_once')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_holiday_rule_schedules');
    }
};
