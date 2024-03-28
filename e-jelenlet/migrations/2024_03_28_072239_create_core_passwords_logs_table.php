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
        Schema::create('core_passwords_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_persons_id')->default(0)->index('key40008');
            $table->string('password', 256);
            $table->integer('login_count')->default(0);
            $table->dateTime('created_at')->default('1000-01-01 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_passwords_logs');
    }
};
