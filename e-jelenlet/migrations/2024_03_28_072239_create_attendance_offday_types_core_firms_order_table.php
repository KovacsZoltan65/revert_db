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
        Schema::create('attendance_offday_types_core_firms_order', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_offday_types_id')->index('key0013');
            $table->unsignedInteger('core_firms_id')->index('key0014');
            $table->tinyInteger('_order')->nullable();
            $table->tinyInteger('status');
            $table->unsignedInteger('core_other_incomes_id')->nullable()->index('key2078');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_offday_types_core_firms_order');
    }
};
