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
        Schema::create('attendance_bonus_types', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key4002');
            $table->string('payroll_software_id', 8)->nullable();
            $table->string('name');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('overtime')->default(0);
            $table->tinyInteger('bonus_within_shift')->default(0)->comment('Egyéb műszakon belüli pótlék');
            $table->tinyInteger('excess_hour')->default(0)->comment('Többletóra');
            $table->tinyInteger('deficit_hour')->default(0)->comment('Hiányóra');
            $table->tinyInteger('abscence_hour')->default(0)->comment('csúsztatás órái');
            $table->tinyInteger('rest_time_difference')->default(0)->comment('pihenőnapi különbség');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_bonus_types');
    }
};
