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
        Schema::table('core_firms', function (Blueprint $table) {
            $table->foreign(['core_cities_id'], 'key016')->references(['id'])->on('core_cities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_public_places_id'], 'key017')->references(['id'])->on('core_public_places')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_firms', function (Blueprint $table) {
            $table->dropForeign('key016');
            $table->dropForeign('key017');
        });
    }
};
