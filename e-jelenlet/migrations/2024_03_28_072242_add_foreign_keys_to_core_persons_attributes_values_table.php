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
        Schema::table('core_persons_attributes_values', function (Blueprint $table) {
            $table->foreign(['core_persons_id'], 'key028')->references(['id'])->on('core_persons')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_persons_attributes_id'], 'key029')->references(['id'])->on('core_persons_attributes')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_persons_attributes_values', function (Blueprint $table) {
            $table->dropForeign('key028');
            $table->dropForeign('key029');
        });
    }
};
