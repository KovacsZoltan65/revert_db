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
        Schema::create('attendance_rounding_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('rounding_id');
            $table->unsignedInteger('core_firms_id')->index('key1011');
            $table->tinyInteger('prevalence');
            $table->tinyInteger('rate');
            $table->tinyInteger('accuracy');
            $table->tinyInteger('rule');
            $table->tinyInteger('type')->default(1)->comment('Típus (1: törzs, 2: lábléc)');
            $table->tinyInteger('display')->default(1)->comment('Megjelenítés (1: óra:perc, 2: óra)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_rounding_settings');
    }
};
