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
        Schema::create('core_parameters_core_firms_status', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_parameters_id')->index('key1345');
            $table->unsignedInteger('core_firms_id')->index('key1346');
            $table->tinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_parameters_core_firms_status');
    }
};
