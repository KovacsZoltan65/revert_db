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
        Schema::table('core_legal_entities_attributes_labels', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_attributes_id'], 'key034')->references(['id'])->on('core_legal_entities_attributes')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_localization_id'], 'key035')->references(['id'])->on('core_localization')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_legal_entities_attributes_labels', function (Blueprint $table) {
            $table->dropForeign('key034');
            $table->dropForeign('key035');
        });
    }
};
