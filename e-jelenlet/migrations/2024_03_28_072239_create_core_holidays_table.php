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
        Schema::create('core_holidays', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->nullable();
            $table->date('date');
            $table->tinyInteger('type')->default(1)->comment('1 - Ünnepnap, 2 - Áthelyezett pihenőnap, 3 - Áthelyezett munkanap');
            $table->dateTime('created_at')->nullable()->default('1000-01-01 00:00:00');
            $table->dateTime('updated_at')->nullable()->default('1000-01-01 00:00:00');

            $table->unique(['core_firms_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_holidays');
    }
};
