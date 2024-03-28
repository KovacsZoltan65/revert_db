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
        Schema::create('attendance_legal_entities_holiday_amounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_legal_entities_id')->index('key4016');
            $table->unsignedInteger('attendance_offday_types_id')->index('key4017');
            $table->integer('year');
            $table->integer('value');
            $table->integer('used_value');
            $table->unsignedInteger('amount_from_hq')->nullable()->comment('Felhasznált szabadságok értéke a Központi csv importálás során kap értéket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_legal_entities_holiday_amounts');
    }
};
