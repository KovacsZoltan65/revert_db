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
        Schema::create('core_menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_modules_id')->nullable()->index('key013');
            $table->string('route', 256)->default('');
            $table->unsignedInteger('parent')->default(0);
            $table->unsignedInteger('_order')->default(0);
            $table->unsignedInteger('core_parameters_id')->nullable()->index('key40001');
            $table->string('core_parameters_value', 31)->default('')->comment('akkor jelenik meg a menüpont (a jogosultságon túl), ha előző oszlopban megadott rendszerparaméternek ez az értéke');
            $table->tinyInteger('visible_for_outsourced_admin')->default(1);
            $table->tinyInteger('visible_for_substitution')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_menu_items');
    }
};
