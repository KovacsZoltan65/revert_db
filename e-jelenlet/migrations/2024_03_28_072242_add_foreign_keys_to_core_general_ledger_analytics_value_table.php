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
        Schema::table('core_general_ledger_analytics_value', function (Blueprint $table) {
            $table->foreign(['core_firms_id'], 'key2012')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_general_ledger_analytics_id'], 'key2013')->references(['id'])->on('core_general_ledger_analytics')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_general_ledger_analytics_value', function (Blueprint $table) {
            $table->dropForeign('key2012');
            $table->dropForeign('key2013');
        });
    }
};
