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
        Schema::create('attendance_holiday_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('notification');
            $table->integer('core_firms_id');
            $table->integer('year')->comment('szabályzat érvényessége');
            $table->integer('creator_legal_entities_id');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_holiday_rules');
    }
};
