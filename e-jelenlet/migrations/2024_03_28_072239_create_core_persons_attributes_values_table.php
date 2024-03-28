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
        Schema::create('core_persons_attributes_values', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_persons_id')->default(0)->index('key028');
            $table->unsignedInteger('core_persons_attributes_id')->default(0)->index('key029');
            $table->string('value', 256)->default('');
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
        Schema::dropIfExists('core_persons_attributes_values');
    }
};
