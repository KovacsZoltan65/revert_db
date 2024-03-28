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
        Schema::create('core_special_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128)->default('');
            $table->unsignedInteger('core_firms_id');
            $table->unsignedInteger('source_permission_group_id')->index('key1001')->comment('ez a forráscsoport, ennek tagjai gyakorolják a jogokat');
            $table->unsignedInteger('target_permission_group_id')->index('key1002')->comment('ez a célcsoport, ennek tagjain gyakorolja forráscsoport a jogokat');

            $table->unique(['name', 'core_firms_id'], 'special_permissions_unique_1');
            $table->unique(['core_firms_id', 'source_permission_group_id', 'target_permission_group_id'], 'special_permissions_unique_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_special_permissions');
    }
};
