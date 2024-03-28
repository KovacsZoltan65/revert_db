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
        Schema::create('core_legal_entities_attributes_labels', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_legal_entities_attributes_id')->default(0)->index('key034');
            $table->unsignedInteger('core_localization_id')->default(0)->index('key035');
            $table->string('value', 256)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_legal_entities_attributes_labels');
    }
};
