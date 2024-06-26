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
        Schema::create('attendance_verification_condition_values', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_verification_condition_system_id')->index('key0033');
            $table->unsignedInteger('attendance_verification_condition_id')->index('key0034');
            $table->string('value', 32)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_verification_condition_values');
    }
};
