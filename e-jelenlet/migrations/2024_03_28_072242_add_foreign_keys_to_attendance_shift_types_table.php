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
        Schema::table('attendance_shift_types', function (Blueprint $table) {
            $table->foreign(['core_firms_id'], 'key037')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['sunday_bonus_type_id'], 'key20300')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['holiday_bonus_type_id'], 'key20301')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_shift_types', function (Blueprint $table) {
            $table->dropForeign('key037');
            $table->dropForeign('key20300');
            $table->dropForeign('key20301');
        });
    }
};
