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
        Schema::create('core_extended_hierarchy', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_core_legal_entities_id')->index('key3003');
            $table->unsignedInteger('child_core_legal_entities_id')->index('key3004');
            $table->unsignedInteger('core_firms_id')->index('key3005');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_extended_hierarchy');
    }
};
