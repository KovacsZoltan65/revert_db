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
        Schema::table('core_parameters_core_firms_status', function (Blueprint $table) {
            $table->foreign(['core_parameters_id'], 'key1345')->references(['id'])->on('core_parameters')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_firms_id'], 'key1346')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_parameters_core_firms_status', function (Blueprint $table) {
            $table->dropForeign('key1345');
            $table->dropForeign('key1346');
        });
    }
};
