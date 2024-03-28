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
        Schema::create('core_unique_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_legal_entities_id')->index('key4030');
            $table->unsignedInteger('core_firms_id')->index('key4031');
            $table->string('name');
            $table->text('description');
            $table->text('data_fields');
            $table->text('data_filters');
            $table->text('data_order');
            $table->text('start_date');
            $table->text('end_date');
            $table->text('assigned_date');
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
        Schema::dropIfExists('core_unique_reports');
    }
};
