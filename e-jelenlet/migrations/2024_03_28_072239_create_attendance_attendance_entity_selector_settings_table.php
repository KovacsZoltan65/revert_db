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
        Schema::create('attendance_attendance_entity_selector_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id');
            $table->text('column_settings');
            $table->text('column_settings_label');
            $table->text('column_settings_class');
            $table->text('column_settings_hide');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_attendance_entity_selector_settings');
    }
};
