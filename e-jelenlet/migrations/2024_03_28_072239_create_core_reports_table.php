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
        Schema::create('core_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_legal_entities_id')->index('key4025');
            $table->unsignedInteger('core_firms_id')->index('key4026');
            $table->unsignedInteger('core_report_classes_id')->index('key4027');
            $table->string('name');
            $table->text('data');
            $table->string('core_legal_entity_attribute_ids')->default('');
            $table->string('core_person_attribute_ids')->default('');
            $table->dateTime('created_at')->nullable()->default('1000-01-01 00:00:00');
            $table->dateTime('updated_at')->nullable()->default('1000-01-01 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_reports');
    }
};
