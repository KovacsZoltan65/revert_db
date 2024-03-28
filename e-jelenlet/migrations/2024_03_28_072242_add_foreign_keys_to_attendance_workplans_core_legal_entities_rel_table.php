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
        Schema::table('attendance_workplans_core_legal_entities_rel', function (Blueprint $table) {
            $table->foreign(['attendance_workplans_id'], 'key0025')->references(['id'])->on('attendance_workplans')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_legal_entities_id'], 'key0026')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_workplans_core_legal_entities_rel', function (Blueprint $table) {
            $table->dropForeign('key0025');
            $table->dropForeign('key0026');
        });
    }
};
