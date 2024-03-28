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
        Schema::table('core_extra_permission_core_modules_core_firms_rel', function (Blueprint $table) {
            $table->foreign(['core_firms_id'], 'key1343')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_modules_id'], 'key1344')->references(['id'])->on('core_modules')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_extra_permission_core_modules_core_firms_rel', function (Blueprint $table) {
            $table->dropForeign('key1343');
            $table->dropForeign('key1344');
        });
    }
};
