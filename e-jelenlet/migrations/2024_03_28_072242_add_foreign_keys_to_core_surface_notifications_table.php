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
        Schema::table('core_surface_notifications', function (Blueprint $table) {
            $table->foreign(['target_legal_entities_id'], 'key4210')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['source_legal_entities_id'], 'key4211')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_surface_notifications', function (Blueprint $table) {
            $table->dropForeign('key4210');
            $table->dropForeign('key4211');
        });
    }
};
