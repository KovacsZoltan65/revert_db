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
        Schema::table('core_firms_core_components_rel', function (Blueprint $table) {
            $table->foreign(['core_firms_id'], 'key018')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_components_id'], 'key019')->references(['id'])->on('core_components')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_firms_core_components_rel', function (Blueprint $table) {
            $table->dropForeign('key018');
            $table->dropForeign('key019');
        });
    }
};
