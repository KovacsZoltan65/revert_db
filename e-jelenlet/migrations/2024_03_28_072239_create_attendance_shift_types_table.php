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
        Schema::create('attendance_shift_types', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key4003');
            $table->string('payroll_software_id', 8);
            $table->string('code', 8);
            $table->string('name');
            $table->time('trunk_time_start')->default('00:00:00');
            $table->time('trunk_time_end')->default('00:00:00');
            $table->time('edge_time_start')->default('00:00:00');
            $table->time('edge_time_end')->default('00:00:00');
            $table->time('bonus1_time_start')->nullable();
            $table->time('bonus1_time_end')->nullable();
            $table->time('bonus2_time_start')->nullable();
            $table->time('bonus2_time_end')->nullable();
            $table->integer('breaktime')->nullable();
            $table->time('breaktime_start')->nullable();
            $table->time('breaktime_end')->nullable();
            $table->string('trunk_attendance_bonuses')->default('');
            $table->string('edge_attendance_bonuses')->default('');
            $table->tinyInteger('status')->default(1);
            $table->boolean('editable')->default(true);
            $table->time('sunday_bonus_time_start')->nullable()->comment('vasárnapi pótlék kezdete');
            $table->time('sunday_bonus_time_end')->nullable()->comment('vasárnapi pótlék vége');
            $table->unsignedInteger('sunday_bonus_type_id')->nullable()->index('key20300')->comment('külső kulcs a pótlékok táblájához');
            $table->time('holiday_bonus_time_start')->nullable()->comment('ünnepnapi pótlék kezdete');
            $table->time('holiday_bonus_time_end')->nullable()->comment('ünnepnapi pótlék vége');
            $table->unsignedInteger('holiday_bonus_type_id')->nullable()->index('key20301')->comment('külső kulcs a pótlékok táblájához');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_shift_types');
    }
};
