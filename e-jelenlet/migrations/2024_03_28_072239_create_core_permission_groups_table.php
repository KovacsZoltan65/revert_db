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
        Schema::create('core_permission_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64)->default('');
            $table->tinyInteger('group_type')->default(0)->comment('1: külsős admin, 2: belsős admin, 3: dolgozó, ha 0, akkor az nem default csoport és így a felületen módosítható');
            $table->unsignedInteger('core_firms_id')->nullable()->index('key0001');
            $table->boolean('active')->default(true);
            $table->dateTime('created_at')->nullable()->default('1000-01-01 00:00:00');
            $table->dateTime('updated_at')->nullable()->default('1000-01-01 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_permission_groups');
    }
};
