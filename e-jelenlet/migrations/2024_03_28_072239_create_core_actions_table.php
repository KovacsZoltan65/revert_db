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
        Schema::create('core_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_menu_items_id')->nullable()->index('key011');
            $table->unsignedInteger('core_modules_id')->nullable()->index('key012');
            $table->string('name', 64)->default('');
            $table->boolean('is_api')->default(false);
            $table->string('description')->nullable();
            $table->tinyInteger('is_visible')->default(1);
            $table->unsignedInteger('default_permission_level')->nullable();
            $table->tinyInteger('action_without_menu')->default(0)->comment('a programban külön kezelendő, mert nem menüből indul, nem tartozik hozzá egyedi ajax hívás!');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_actions');
    }
};
