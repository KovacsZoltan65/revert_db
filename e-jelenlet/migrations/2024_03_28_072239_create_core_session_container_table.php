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
        Schema::create('core_session_container', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session_id', 40)->unique();
            $table->unsignedInteger('core_legal_entities_id')->nullable()->index('key1019');
            $table->longText('values')->nullable();
            $table->tinyInteger('permission_changed')->default(0);
            $table->dateTime('expiration_time')->nullable()->default('1000-01-01 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_session_container');
    }
};
