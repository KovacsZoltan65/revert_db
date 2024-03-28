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
        Schema::table('attendance_workplans_additional_bonuses', function (Blueprint $table) {
            $table->foreign(['attendance_workplans_id'], 'key0030')->references(['id'])->on('attendance_workplans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_bonus_types_id'], 'key0031')->references(['id'])->on('attendance_bonus_types')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_workplans_additional_bonuses', function (Blueprint $table) {
            $table->dropForeign('key0030');
            $table->dropForeign('key0031');
        });
    }
};
