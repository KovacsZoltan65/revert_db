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
        Schema::create('pekseg_dolgozok', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Rekord azonosító');
            $table->string('name')->index()->comment('Dolgozó neve');
            $table->string('email')->index()->comment('Dolgozó email címe');
            $table->string('phone')->index()->comment('Dolgozó telefonszáma');
            $table->integer('uzlet_id')->index()->comment('Dolgozó munkahelyének azonosítója');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pekseg_dolgozok');
    }
};
