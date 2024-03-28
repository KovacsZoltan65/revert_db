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
        Schema::create('core_parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_components_id')->default(0)->index('key022');
            $table->unsignedInteger('core_modules_id')->nullable()->index('key023');
            $table->integer('type')->default(0)->comment('1: szabadszavas, 2: egyszeres lista, 3: többszörös lista, 4: slider');
            $table->unsignedInteger('minimum_value')->nullable();
            $table->unsignedInteger('maximum_value')->nullable();
            $table->string('default_value', 256)->default('');
            $table->tinyInteger('status')->default(1)->comment('1: aktív, 0: inaktív, 2: központ által vezérelt');
            $table->integer('_order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_parameters');
    }
};
