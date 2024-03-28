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
        Schema::table('attendance_legal_entities_calendar_rejections', function (Blueprint $table) {
            $table->foreign(['attendance_legal_entities_calendar_id'], 'key0051')->references(['id'])->on('attendance_legal_entities_calendar')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_legal_entities_id'], 'key0052')->references(['id'])->on('core_legal_entities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_legal_entities_calendar_rejections', function (Blueprint $table) {
            $table->dropForeign('key0051');
            $table->dropForeign('key0052');
        });
    }
};
