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
        Schema::create('core_parameter_values', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value', 256)->default('')->comment('a nyelvi állományban a parameter_value_X értéke tartozik hozzá szöveges értékként');
            $table->tinyInteger('status')->default(1);
            $table->integer('_order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_parameter_values');
    }
};
