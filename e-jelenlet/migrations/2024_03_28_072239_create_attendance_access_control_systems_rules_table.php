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
        Schema::create('attendance_access_control_systems_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key2058');
            $table->string('name')->comment('szabály neve');
            $table->tinyInteger('arrive_tolerance_time_minus')->nullable()->comment('érkezés - minus tolerancia idő');
            $table->tinyInteger('arrive_tolerance_time_plus')->nullable()->comment('érkezés - plus tolerancia idő');
            $table->boolean('arrive_tolerance_time_out_boss_rejection')->default(false);
            $table->boolean('arrive_tolerance_times_active')->default(false);
            $table->tinyInteger('arrive_rounding')->comment('érkezés - kerekítés');
            $table->tinyInteger('arrive_double_data')->comment('érkezés - dupla adat érkezésekor');
            $table->tinyInteger('leave_tolerance_time_minus')->nullable()->comment('távozás - minus tolerancia idő');
            $table->tinyInteger('leave_tolerance_time_plus')->nullable()->comment('távozás - plus tolerancia idő');
            $table->boolean('leave_tolerance_time_out_boss_rejection')->default(false);
            $table->boolean('leave_tolerance_times_active')->default(false);
            $table->tinyInteger('leave_rounding')->comment('távozás - kerekítés');
            $table->tinyInteger('leave_double_data')->comment('távozás - dupla adat érkezésekor');
            $table->tinyInteger('over_work_handle')->nullable()->comment('Túlmunka kezelése mint');
            $table->boolean('fault_sign')->default(false)->comment('hiba jelzés');
            $table->tinyInteger('double_checking_time')->comment('dupla lehúzások vizsgálata ezen időben');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_access_control_systems_rules');
    }
};
