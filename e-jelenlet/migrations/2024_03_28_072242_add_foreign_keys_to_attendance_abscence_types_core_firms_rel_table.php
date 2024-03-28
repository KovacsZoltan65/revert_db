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
        Schema::table('attendance_abscence_types_core_firms_rel', function (Blueprint $table) {
            $table->foreign(['core_other_incomes_id'], 'key2077')->references(['id'])->on('core_other_incomes')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_abscence_types_id'], 'key4018')->references(['id'])->on('attendance_abscence_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_firms_id'], 'key4019')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_abscence_types_core_firms_rel', function (Blueprint $table) {
            $table->dropForeign('key2077');
            $table->dropForeign('key4018');
            $table->dropForeign('key4019');
        });
    }
};
