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
        Schema::table('attendance_worktimelimit_assignments', function (Blueprint $table) {
            $table->foreign(['attendance_worktimelimits_id'], 'key20038')->references(['id'])->on('attendance_worktimelimits')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_legal_entities_id'], 'key20039')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_worktimelimit_assignments', function (Blueprint $table) {
            $table->dropForeign('key20038');
            $table->dropForeign('key20039');
        });
    }
};
