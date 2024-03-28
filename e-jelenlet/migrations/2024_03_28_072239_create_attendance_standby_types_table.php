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
        Schema::create('attendance_standby_types', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->comment('külső kulcs a core_firms tábla id mezőjére');
            $table->string('code', 3);
            $table->string('name', 45)->comment('Készenlét megnevezése');
            $table->time('start_time')->comment('Készenlét kezdetének ideje');
            $table->time('end_time')->comment('Készenlét lezárásának ideje');
            $table->integer('travel_time')->comment('Utazási idő hossza percben');
            $table->tinyInteger('status')->comment('Állapot: 0: inaktív, 1: aktív');
            $table->tinyInteger('editable')->default(1)->comment('Szerkeszthető: 0: nem, 1: igen');

            $table->unique(['core_firms_id', 'code'], 'UK_attendance_standby_types_core_firm_id_code');
            $table->unique(['core_firms_id', 'name'], 'UK_attendance_standby_types_core_firms_id_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_standby_types');
    }
};
