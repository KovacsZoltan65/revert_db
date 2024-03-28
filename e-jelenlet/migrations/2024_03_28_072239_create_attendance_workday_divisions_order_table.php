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
        Schema::create('attendance_workday_divisions_order', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key2021');
            $table->string('divisions_id')->comment('Code szerinti id: magyarázat a workdaydivision osztályban');
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_workday_divisions_order');
    }
};
