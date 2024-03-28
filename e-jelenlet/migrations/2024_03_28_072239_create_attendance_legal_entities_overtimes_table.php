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
        Schema::create('attendance_legal_entities_overtimes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('registered_calendar_id')->nullable()->index('key0039');
            $table->unsignedInteger('payroll_calendar_id')->nullable()->index('key0040');
            $table->unsignedInteger('attendance_legal_entities_shifts_id')->nullable()->index('key0041');
            $table->unsignedInteger('creator_legal_entity_id')->nullable()->index('key0042');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('overtime_minutes')->default(0);
            $table->integer('shifted_minutes')->default(0);
            $table->date('export_date')->nullable();
            $table->string('note_legal_entity')->nullable();
            $table->string('note_boss')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_legal_entities_overtimes');
    }
};
