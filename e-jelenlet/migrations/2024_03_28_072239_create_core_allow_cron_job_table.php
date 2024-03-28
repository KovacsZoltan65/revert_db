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
        Schema::create('core_allow_cron_job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('engedélyezett cron neve');
            $table->unsignedInteger('core_firms_id')->index('key2037');
            $table->boolean('active')->default(false);
            $table->json('data')->nullable()->comment('A futáshoz szükséges adatok');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_allow_cron_job');
    }
};
