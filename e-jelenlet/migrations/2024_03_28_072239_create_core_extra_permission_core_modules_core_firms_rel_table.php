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
        Schema::create('core_extra_permission_core_modules_core_firms_rel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('core_firms_id')->index('key1343')->comment('cég azonosító');
            $table->unsignedInteger('core_modules_id')->index('key1344')->comment('modul azonosítója');
            $table->tinyInteger('usable')->nullable()->comment('A modul használhatósága');
            $table->string('name')->nullable()->comment('A modul elnevezése');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_extra_permission_core_modules_core_firms_rel');
    }
};
