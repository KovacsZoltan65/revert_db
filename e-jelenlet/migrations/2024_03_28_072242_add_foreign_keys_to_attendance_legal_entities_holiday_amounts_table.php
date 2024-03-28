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
        Schema::table('attendance_legal_entities_holiday_amounts', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key4016')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_offday_types_id'], 'key4017')->references(['id'])->on('attendance_offday_types')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_entities_holiday_amounts', function (Blueprint $table) {
            $table->dropForeign('key4016');
            $table->dropForeign('key4017');
        });
    }
};
