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
        Schema::table('core_legal_entities_cost_center_assignments', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key4014')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_cost_centers_id'], 'key4015')->references(['id'])->on('core_cost_centers')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_legal_entities_cost_center_assignments', function (Blueprint $table) {
            $table->dropForeign('key4014');
            $table->dropForeign('key4015');
        });
    }
};
