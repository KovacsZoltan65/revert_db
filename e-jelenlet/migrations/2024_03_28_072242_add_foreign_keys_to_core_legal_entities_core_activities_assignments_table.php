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
        Schema::table('core_legal_entities_core_activities_assignments', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key1041')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_activity_id'], 'key1042')->references(['id'])->on('core_activities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_legal_entities_core_activities_assignments', function (Blueprint $table) {
            $table->dropForeign('key1041');
            $table->dropForeign('key1042');
        });
    }
};
