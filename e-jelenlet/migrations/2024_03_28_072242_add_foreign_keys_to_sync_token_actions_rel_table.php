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
        Schema::table('sync_token_actions_rel', function (Blueprint $table) {
            $table->foreign(['sync_api_token_id'], '9059')->references(['id'])->on('sync_api_token')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sync_token_actions_rel', function (Blueprint $table) {
            $table->dropForeign('9059');
        });
    }
};
