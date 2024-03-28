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
        Schema::create('attendance_scheduler_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('firm_id')->nullable();
            $table->unsignedInteger('legal_entity_id')->default(0);
            $table->string('title', 100)->default('');
            $table->tinyInteger('default')->default(0);
            $table->string('config', 1000)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_scheduler_templates');
    }
};
