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
        Schema::create('attendance_holiday_rules_legal_entities_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_holiday_rule_id')->index('key2106');
            $table->integer('core_legal_entities_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_holiday_rules_legal_entities_rel');
    }
};
