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
        Schema::create('attendance_worktimelimit_assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_worktimelimits_id')->index('key20038')->comment('munkaidőkeret azonosítója az attendance_worktimelimits táblából');
            $table->unsignedInteger('core_legal_entities_id')->index('key20039')->comment('jogviszony azonosítója a core_legal_entities táblából');
            $table->date('start_date')->comment('hozzárendelés kezdete (éééé-hh-nn)');
            $table->date('end_date')->comment('hozzárendelés vége (éééé-hh-nn)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_worktimelimit_assignments');
    }
};
