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
        Schema::create('pekseg_uzletek', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Rekord azonosító');
            $table->string('name')->index()->comment('Üzlet neve');
            $table->string('address')->index()->comment('Üzlet címe');
            $table->string('phone')->index()->comment('Üzlet telefonszáma');
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
        Schema::dropIfExists('pekseg_uzletek');
    }
};
