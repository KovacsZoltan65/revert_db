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
        Schema::table('core_special_permissions_core_actions_rel', function (Blueprint $table) {
            $table->foreign(['core_special_permissions_id'], 'key1003')->references(['id'])->on('core_special_permissions')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_actions_id'], 'key1004')->references(['id'])->on('core_actions')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_special_permissions_core_actions_rel', function (Blueprint $table) {
            $table->dropForeign('key1003');
            $table->dropForeign('key1004');
        });
    }
};
