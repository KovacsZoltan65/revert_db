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
        Schema::table('attendance_bonus_types', function (Blueprint $table) {
            $table->foreign(['core_firms_id'], 'key036')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_firms_id'], 'key4002')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_bonus_types', function (Blueprint $table) {
            $table->dropForeign('key036');
            $table->dropForeign('key4002');
        });
    }
};
