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
        Schema::create('attendance_legal_entities_shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('registered_calendar_id')->nullable()->index('key0037');
            $table->unsignedInteger('payroll_calendar_id')->nullable()->index('key0064');
            $table->unsignedInteger('attendance_shift_types_id')->nullable()->index('key0038');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('shift_break_time')->default(0);
            $table->tinyInteger('balance_flag')->default(0);
            $table->time('preparation_start')->nullable()->comment('A felkészülési idő kezdete');
            $table->time('preparation_end')->nullable()->comment('A felkészülési idő vége');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_legal_entities_shifts');
    }
};
