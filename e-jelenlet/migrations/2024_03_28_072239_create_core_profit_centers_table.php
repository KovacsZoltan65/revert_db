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
        Schema::create('core_profit_centers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key7004')->comment('külső kulcs a core_firms tábla id mezőjére');
            $table->string('payroll_software_id', 30)->nullable();
            $table->string('name', 64)->comment('Profitcentrum megnevezése');
            $table->unsignedInteger('establishment_id')->nullable()->index('key7005')->comment('külső kulcs a telephelyekre (core_establishments tábla id mezőjére)');
            $table->tinyInteger('status')->comment('Állapot: 0: inaktív, 1: aktív');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_profit_centers');
    }
};
