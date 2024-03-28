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
        Schema::create('attendance_verification_conditions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('core_firms_id')->nullable();
            $table->integer('workplan_category')->nullable()->comment('melyik munkarendre irányul a vizsgálat');
            $table->string('type', 32)->default('')->comment('milyen típusra irányul a vizsgálat (munkaidő, munkanap, stb.)');
            $table->string('operator', 32)->default('')->comment('a vizsgálat iránya (minimum, maximum)');
            $table->string('unit', 32)->default('')->comment('mennyiségi egység (óra, nap, darab, stb.)');
            $table->string('period', 32)->default('')->comment('vizsgált időszak (nap, hét, hónap, stb.)');
            $table->string('value', 32)->default('')->comment('milyen értékre irányul a vizsgálat');
            $table->integer('base_rule')->default(0)->comment('alap szabály-e?');
            $table->integer('prev_version_id')->nullable()->comment('előző verzió azonsítója');
            $table->dateTime('validity_start')->nullable()->default('1970-01-01 00:00:00')->comment('érvényesség kezdete');
            $table->dateTime('validity_end')->nullable()->comment('érvényesség vége');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_verification_conditions');
    }
};
