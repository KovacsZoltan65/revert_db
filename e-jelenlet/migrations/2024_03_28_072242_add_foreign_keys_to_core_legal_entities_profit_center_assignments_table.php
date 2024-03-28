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
        Schema::table('core_legal_entities_profit_center_assignments', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key20042')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_profit_centers_id'], 'key20043')->references(['id'])->on('core_profit_centers')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_legal_entities_profit_center_assignments', function (Blueprint $table) {
            $table->dropForeign('key20042');
            $table->dropForeign('key20043');
        });
    }
};
