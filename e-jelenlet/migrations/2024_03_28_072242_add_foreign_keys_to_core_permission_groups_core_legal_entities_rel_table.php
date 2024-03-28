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
        Schema::table('core_permission_groups_core_legal_entities_rel', function (Blueprint $table) {
            $table->foreign(['core_permission_groups_id'], 'key014')->references(['id'])->on('core_permission_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_legal_entities_id'], 'key015')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_permission_groups_core_legal_entities_rel', function (Blueprint $table) {
            $table->dropForeign('key014');
            $table->dropForeign('key015');
        });
    }
};
