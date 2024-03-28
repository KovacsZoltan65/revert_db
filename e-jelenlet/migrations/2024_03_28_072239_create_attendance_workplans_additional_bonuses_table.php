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
        Schema::create('attendance_workplans_additional_bonuses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_workplans_id')->index('key0030');
            $table->unsignedInteger('attendance_bonus_types_id')->index('key0031');
            $table->tinyInteger('type')->default(0)->comment('jogcím mire vonatkozik (1: többlet óra, 2: hiány óra) ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_workplans_additional_bonuses');
    }
};
