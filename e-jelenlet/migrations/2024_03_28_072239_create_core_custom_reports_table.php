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
        Schema::create('core_custom_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_legal_entities_id')->index('key1016');
            $table->unsignedInteger('core_firms_id')->index('key1015');
            $table->string('name')->comment('Riport megnevezése');
            $table->text('description')->comment('Riport leírása');
            $table->text('data_fields')->comment('Kiválasztott mezők adatai JSON tömbben');
            $table->text('data_filters')->comment('Kiválasztott szűrők adatai JSON tömbben');
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
        Schema::dropIfExists('core_custom_reports');
    }
};
