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
        Schema::table('core_actions', function (Blueprint $table) {
            $table->foreign(['core_menu_items_id'], 'key011')->references(['id'])->on('core_menu_items')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_modules_id'], 'key012')->references(['id'])->on('core_modules')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_actions', function (Blueprint $table) {
            $table->dropForeign('key011');
            $table->dropForeign('key012');
        });
    }
};
