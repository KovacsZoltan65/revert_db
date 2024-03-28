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
        Schema::table('core_cities', function (Blueprint $table) {
            $table->foreign(['core_counties_id'], 'key009')->references(['id'])->on('core_counties')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_cities', function (Blueprint $table) {
            $table->dropForeign('key009');
        });
    }
};
