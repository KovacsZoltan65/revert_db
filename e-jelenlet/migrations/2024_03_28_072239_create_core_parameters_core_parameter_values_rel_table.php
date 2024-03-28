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
        Schema::create('core_parameters_core_parameter_values_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_parameters_id')->default(0)->index('key026');
            $table->unsignedInteger('core_parameter_values_id')->default(0)->index('key027');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_parameters_core_parameter_values_rel');
    }
};
