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
        Schema::table('core_parameters', function (Blueprint $table) {
            $table->foreign(['core_components_id'], 'key022')->references(['id'])->on('core_components')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_modules_id'], 'key023')->references(['id'])->on('core_modules')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_parameters', function (Blueprint $table) {
            $table->dropForeign('key022');
            $table->dropForeign('key023');
        });
    }
};
