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
        Schema::table('attendance_offday_types_core_firms_order', function (Blueprint $table) {
            $table->foreign(['attendance_offday_types_id'], 'key0013')->references(['id'])->on('attendance_offday_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_firms_id'], 'key0014')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_other_incomes_id'], 'key2078')->references(['id'])->on('core_other_incomes')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_offday_types_core_firms_order', function (Blueprint $table) {
            $table->dropForeign('key0013');
            $table->dropForeign('key0014');
            $table->dropForeign('key2078');
        });
    }
};
