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
        Schema::create('core_localization', function (Blueprint $table) {
            $table->increments('id');
            $table->string('language', 64)->default('');
            $table->string('language_original', 64)->default('');
            $table->string('language_file', 64)->default('');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('_order')->default(0);
            $table->tinyInteger('precedency_order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_localization');
    }
};
