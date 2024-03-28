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
        Schema::create('attendance_workplans_core_legal_entities_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_workplans_id')->index('key0025');
            $table->unsignedInteger('core_legal_entities_id')->index('key0026');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_workplans_core_legal_entities_rel');
    }
};
