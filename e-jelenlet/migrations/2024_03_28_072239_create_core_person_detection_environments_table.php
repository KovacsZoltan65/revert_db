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
        Schema::create('core_person_detection_environments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('core_person_id')->index('key6001');
            $table->string('ip_address', 15);
            $table->string('device_type', 30)->nullable();
            $table->string('browser_family', 50)->nullable();
            $table->string('browser_version', 50)->nullable();
            $table->string('platform_family', 50)->nullable();
            $table->integer('platform_version')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_person_detection_environments');
    }
};
