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
        Schema::table('core_legal_entities_establishment_assignments', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key4012')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_establishments_id'], 'key4013')->references(['id'])->on('core_establishments')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_legal_entities_establishment_assignments', function (Blueprint $table) {
            $table->dropForeign('key4012');
            $table->dropForeign('key4013');
        });
    }
};
