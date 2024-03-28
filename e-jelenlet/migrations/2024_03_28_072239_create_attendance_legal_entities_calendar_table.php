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
        Schema::create('attendance_legal_entities_calendar', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_legal_entities_id')->default(0)->index('key0035');
            $table->date('_date');
            $table->integer('balance')->default(0);
            $table->integer('rolled_balance')->default(0);
            $table->tinyInteger('balance_to_overtime')->default(0)->comment('0: ha nincs még feladva túlóraként, 1: ha már fel lett adva');
            $table->tinyInteger('legal_entity_confirmed')->default(0);
            $table->dateTime('legal_entity_confirmed_date')->nullable()->default('1000-01-01 00:00:00');
            $table->tinyInteger('boss_confirmed')->default(0);
            $table->dateTime('boss_confirmed_date')->nullable()->default('1000-01-01 00:00:00');
            $table->unsignedInteger('boss_confirmed_id')->nullable()->index('key0036');
            $table->tinyInteger('winaccess_failure')->nullable()->default(0)->comment('sikertelen volt-e a WinAccess beemelési kísérlet (érvényes értékek: 0 - nem, 1 - igen)');
            $table->tinyInteger('full_day_bonus')->default(0)->comment('Ki lett-e jelölve egész napos pótlékra a nap (igen: 1, nem: 0, alapértelmezett: 0)');
            $table->dateTime('created_at')->nullable()->default('1000-01-01 00:00:00');
            $table->dateTime('updated_at')->nullable()->default('1000-01-01 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_legal_entities_calendar');
    }
};
