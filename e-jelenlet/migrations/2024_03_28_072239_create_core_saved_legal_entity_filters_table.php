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
        Schema::create('core_saved_legal_entity_filters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_legal_entities_id')->index('key1018');
            $table->string('name');
            $table->text('filter_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_saved_legal_entity_filters');
    }
};
