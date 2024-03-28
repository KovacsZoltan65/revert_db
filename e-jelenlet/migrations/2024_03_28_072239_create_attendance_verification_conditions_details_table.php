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
        Schema::create('attendance_verification_conditions_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_verification_conditions_id')->index('key2061');
            $table->unsignedInteger('core_localization_id')->default(0);
            $table->string('title')->default('');
            $table->string('error_message')->default('');
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
        Schema::dropIfExists('attendance_verification_conditions_details');
    }
};
