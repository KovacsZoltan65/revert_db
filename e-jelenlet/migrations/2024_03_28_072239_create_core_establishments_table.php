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
        Schema::create('core_establishments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key0005');
            $table->string('payroll_software_id', 160);
            $table->string('name');
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
        Schema::dropIfExists('core_establishments');
    }
};
