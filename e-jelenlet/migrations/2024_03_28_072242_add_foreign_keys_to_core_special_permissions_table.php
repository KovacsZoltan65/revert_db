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
        Schema::table('core_special_permissions', function (Blueprint $table) {
            $table->foreign(['core_firms_id'], 'key1000')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['source_permission_group_id'], 'key1001')->references(['id'])->on('core_permission_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['target_permission_group_id'], 'key1002')->references(['id'])->on('core_permission_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_special_permissions', function (Blueprint $table) {
            $table->dropForeign('key1000');
            $table->dropForeign('key1001');
            $table->dropForeign('key1002');
        });
    }
};
