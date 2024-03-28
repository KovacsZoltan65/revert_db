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
        Schema::create('attendance_legal_entities_outside_shifts_time_bonuses_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_legal_entities_outside_shifts_time_id')->nullable()->index('key0047');
            $table->unsignedInteger('attendance_bonus_types_id')->nullable()->index('key0048');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_legal_entities_outside_shifts_time_bonuses_rel');
    }
};
