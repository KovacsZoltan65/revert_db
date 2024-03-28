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
        Schema::create('attendance_legal_entities_shifts_balances', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('registered_calendar_id')->nullable()->index('key0059');
            $table->unsignedInteger('payroll_calendar_id')->nullable()->index('key0060');
            $table->unsignedInteger('attendance_legal_entities_shifts_id')->nullable()->index('key0061');
            $table->time('start_time');
            $table->time('end_time');
            $table->tinyInteger('negative')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_legal_entities_shifts_balances');
    }
};
