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
        Schema::table('core_temporary_hierarchy', function (Blueprint $table) {
            $table->foreign(['parent_core_legal_entities_id'], 'key0008')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['child_core_legal_entities_id'], 'key0009')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_firms_id'], 'key0010')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_temporary_hierarchy', function (Blueprint $table) {
            $table->dropForeign('key0008');
            $table->dropForeign('key0009');
            $table->dropForeign('key0010');
        });
    }
};
