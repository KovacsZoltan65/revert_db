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
        Schema::table('core_reports', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key4025')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_firms_id'], 'key4026')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_report_classes_id'], 'key4027')->references(['id'])->on('core_report_classes')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_reports', function (Blueprint $table) {
            $table->dropForeign('key4025');
            $table->dropForeign('key4026');
            $table->dropForeign('key4027');
        });
    }
};
