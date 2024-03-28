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
        Schema::table('core_menu_items', function (Blueprint $table) {
            $table->foreign(['core_modules_id'], 'key013')->references(['id'])->on('core_modules')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_parameters_id'], 'key40001')->references(['id'])->on('core_parameters')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_menu_items', function (Blueprint $table) {
            $table->dropForeign('key013');
            $table->dropForeign('key40001');
        });
    }
};
