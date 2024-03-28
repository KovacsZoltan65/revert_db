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
        Schema::table('core_legal_entities_general_ledger_analytic_value_assignments', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key1025')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_general_ledger_analytics_id'], 'key2026')->references(['id'])->on('core_general_ledger_analytics')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_general_ledger_analytics_value_id'], 'key2027')->references(['id'])->on('core_general_ledger_analytics_value')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_legal_entities_general_ledger_analytic_value_assignments', function (Blueprint $table) {
            $table->dropForeign('key1025');
            $table->dropForeign('key2026');
            $table->dropForeign('key2027');
        });
    }
};
