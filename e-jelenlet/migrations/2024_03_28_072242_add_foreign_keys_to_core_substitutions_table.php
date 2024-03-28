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
        Schema::table('core_substitutions', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key020')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_persons_id'], 'key021')->references(['id'])->on('core_persons')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_substitutions', function (Blueprint $table) {
            $table->dropForeign('key020');
            $table->dropForeign('key021');
        });
    }
};
