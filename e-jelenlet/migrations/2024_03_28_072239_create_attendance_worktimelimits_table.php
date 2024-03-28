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
        Schema::create('attendance_worktimelimits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key2001');
            $table->string('name', 128)->default('');
            $table->date('start_date')->comment('érvényesség kezdete (éééé-hh-nn)');
            $table->date('end_date')->comment('érvényesség vége (éééé-hh-nn)');
            $table->string('daily_workhours')->comment('napi óraszám');

            $table->unique(['name', 'core_firms_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_worktimelimits');
    }
};
