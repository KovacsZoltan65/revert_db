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
        Schema::create('core_firms_core_components_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->default(0)->index('key018');
            $table->unsignedInteger('core_components_id')->default(0)->index('key019');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_firms_core_components_rel');
    }
};
