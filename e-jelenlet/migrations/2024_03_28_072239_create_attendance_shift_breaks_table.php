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
        Schema::create('attendance_shift_breaks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_shift_types_id')->index('key7000')->comment('műszaktípus azonosítója a attendance_shift_types táblából');
            $table->time('start_time')->default('00:00:00')->comment('kezdő időpont');
            $table->time('end_time')->default('00:00:00')->comment('záró időpont');
            $table->tinyInteger('is_bonused')->default(0)->comment('Pótlékolható-e');
            $table->integer('length')->default(0)->comment('szünet tartama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_shift_breaks');
    }
};
