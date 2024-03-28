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
        Schema::create('attendance_legal_entities_abscences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('registered_calendar_id')->nullable()->index('key0053');
            $table->unsignedInteger('payroll_calendar_id')->nullable()->index('key0054');
            $table->unsignedInteger('attendance_legal_entities_shifts_id')->nullable()->index('key0055');
            $table->unsignedInteger('attendance_abscence_types_id')->nullable()->index('key0056');
            $table->unsignedInteger('attendance_offday_types_id')->nullable()->index('key0057');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('note_legal_entity', 128)->nullable();
            $table->string('note_boss', 128)->nullable();
            $table->unsignedInteger('creator_legal_entity_id')->nullable()->index('key0058');
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
        Schema::dropIfExists('attendance_legal_entities_abscences');
    }
};
