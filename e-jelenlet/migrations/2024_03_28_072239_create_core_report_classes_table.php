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
        Schema::create('core_report_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_report_categories_id')->index('key4024');
            $table->string('class_name');
            $table->string('description', 256)->default('')->comment('A riport leírása');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_report_classes');
    }
};
