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
        Schema::create('core_general_ledger_analytics_value', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key2012');
            $table->string('payroll_software_id', 36)->default('');
            $table->unsignedInteger('core_general_ledger_analytics_id')->index('key2013');
            $table->string('code', 20);
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
        Schema::dropIfExists('core_general_ledger_analytics_value');
    }
};
