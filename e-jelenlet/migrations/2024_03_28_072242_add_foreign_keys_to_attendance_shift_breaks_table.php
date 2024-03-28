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
        Schema::table('attendance_shift_breaks', function (Blueprint $table) {
            $table->foreign(['attendance_shift_types_id'], 'key7000')->references(['id'])->on('attendance_shift_types')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_shift_breaks', function (Blueprint $table) {
            $table->dropForeign('key7000');
        });
    }
};
