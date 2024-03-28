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
        Schema::create('attendance_verification_condition_systems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128)->default('');
            $table->unsignedInteger('core_firms_id')->index('key0032');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_verification_condition_systems');
    }
};
