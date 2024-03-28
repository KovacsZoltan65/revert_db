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
        Schema::table('core_person_detection_environments', function (Blueprint $table) {
            $table->foreign(['core_person_id'], 'key6001')->references(['id'])->on('core_persons')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_person_detection_environments', function (Blueprint $table) {
            $table->dropForeign('key6001');
        });
    }
};
