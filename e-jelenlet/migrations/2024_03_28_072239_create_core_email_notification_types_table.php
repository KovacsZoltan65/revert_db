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
        Schema::create('core_email_notification_types', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('type')->index();
            $table->tinyInteger('subtype')->default(0)->comment('meghatározza, az adott típus altípusát 0: dolgozói 1: vezetői altípust jelöl');
            $table->tinyInteger('extra_notification')->default(0)->comment('Meghatározza hogy az adott típus megjelenjen-e az extra értesítést létrehozó/szerkesztő felületen. 0:nem 1:igen');
            $table->unsignedInteger('core_firms_id')->index();
            $table->tinyInteger('is_combined');
            $table->tinyInteger('display')->default(1)->comment('megjeleníthető');
            $table->tinyInteger('expiration_unit')->nullable();
            $table->string('expiration_values', 128)->nullable();
            $table->time('timing_time')->nullable();
            $table->string('template', 128);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_email_notification_types');
    }
};
