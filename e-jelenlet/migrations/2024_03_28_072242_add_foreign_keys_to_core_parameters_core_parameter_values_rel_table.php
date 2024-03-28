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
        Schema::table('core_parameters_core_parameter_values_rel', function (Blueprint $table) {
            $table->foreign(['core_parameters_id'], 'key026')->references(['id'])->on('core_parameters')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_parameter_values_id'], 'key027')->references(['id'])->on('core_parameter_values')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_parameters_core_parameter_values_rel', function (Blueprint $table) {
            $table->dropForeign('key026');
            $table->dropForeign('key027');
        });
    }
};
