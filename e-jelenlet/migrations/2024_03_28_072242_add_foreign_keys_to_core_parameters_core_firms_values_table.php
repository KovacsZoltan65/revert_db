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
        Schema::table('core_parameters_core_firms_values', function (Blueprint $table) {
            $table->foreign(['core_parameters_id'], 'key024')->references(['id'])->on('core_parameters')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_firms_id'], 'key025')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_parameters_core_firms_values', function (Blueprint $table) {
            $table->dropForeign('key024');
            $table->dropForeign('key025');
        });
    }
};
