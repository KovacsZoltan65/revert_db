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
        Schema::create('core_other_incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key2007');
            $table->string('payroll_software_id', 8);
            $table->string('name', 128)->default('');
            $table->tinyInteger('status')->default(1)->comment('egyéb jövedelem állapota (0: inaktív, 1: aktív)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_other_incomes');
    }
};
