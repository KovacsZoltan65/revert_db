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
        Schema::table('core_saved_legal_entity_filters', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key1018')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_saved_legal_entity_filters', function (Blueprint $table) {
            $table->dropForeign('key1018');
        });
    }
};
