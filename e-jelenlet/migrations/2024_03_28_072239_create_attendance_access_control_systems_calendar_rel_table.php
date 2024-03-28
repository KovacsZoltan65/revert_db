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
        Schema::create('attendance_access_control_systems_calendar_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('calendar_id')->index('key2057');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->smallInteger('processed_status')->default(0);
            $table->json('error_message')->nullable()->comment('Hiba leírása');
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
        Schema::dropIfExists('attendance_access_control_systems_calendar_rel');
    }
};
