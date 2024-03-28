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
        Schema::table('attendance_legal_stock', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key1008')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['attendance_abscence_types_id'], 'key1009')->references(['id'])->on('attendance_abscence_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_firms_id'], 'key1010')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_stock', function (Blueprint $table) {
            $table->dropForeign('key1008');
            $table->dropForeign('key1009');
            $table->dropForeign('key1010');
        });
    }
};
