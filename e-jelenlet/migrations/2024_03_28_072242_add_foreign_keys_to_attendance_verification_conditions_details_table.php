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
        Schema::table('attendance_verification_conditions_details', function (Blueprint $table) {
            $table->foreign(['attendance_verification_conditions_id'], 'key2061')->references(['id'])->on('attendance_verification_conditions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_verification_conditions_details', function (Blueprint $table) {
            $table->dropForeign('key2061');
        });
    }
};
