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
        Schema::create('core_cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64)->default('');
            $table->unsignedInteger('core_counties_id')->default(0)->index('key009');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_cities');
    }
};
