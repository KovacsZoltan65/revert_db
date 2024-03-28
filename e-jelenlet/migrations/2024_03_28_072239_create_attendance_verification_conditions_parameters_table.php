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
        Schema::create('attendance_verification_conditions_parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_localization_id')->default(0);
            $table->string('parameter', 32)->default('');
            $table->string('parameter_type', 32)->default('');
            $table->string('parameter_value', 32)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_verification_conditions_parameters');
    }
};
