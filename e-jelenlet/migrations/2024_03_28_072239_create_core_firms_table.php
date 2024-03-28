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
        Schema::create('core_firms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('registration_number', 12)->unique();
            $table->string('tax_id', 45)->unique();
            $table->string('name', 45)->default('');
            $table->string('directory', 45)->default('')->comment('A cég könyvtára, automatikusan képződik a cégnévből');
            $table->smallInteger('postal_code')->default(0);
            $table->unsignedInteger('core_cities_id')->default(0)->index('key016');
            $table->string('public_place_name', 45)->default('');
            $table->unsignedInteger('core_public_places_id')->default(0)->index('key017');
            $table->string('public_place_number', 10)->default('');
            $table->string('staircase', 10)->default('');
            $table->string('floor_door', 10)->default('');
            $table->string('phone_number', 45)->default('');
            $table->tinyInteger('status')->default(1);
            $table->string('notification_sender')->default('');
            $table->tinyInteger('default_id')->default(0)->comment('1 esetén ennek a cégnek a default nameje kerül megjelenítésre jelszó küldése esetén');
            $table->string('default_name', 100)->nullable();
            $table->tinyInteger('skip_tax_id_validation')->default(0)->comment('import során figyelembe kell-e venni az adószámot (igen: 1, nem: 0, alapértelmezett: 0)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_firms');
    }
};
