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
        Schema::create('subdomains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subdomain');
            $table->string('url')->comment('a példány értéke');
            $table->string('name');
            $table->string('db_host', 125)->default('localhost');
            $table->integer('db_port')->default(3306);
            $table->string('db_name');
            $table->string('db_user');
            $table->string('db_password');
            $table->boolean('notification');
            $table->unsignedInteger('state_id')->index('subdomains_state_id_foreign');
            $table->tinyInteger('is_mirror')->default(0);
            $table->tinyInteger('sso')->default(0);
            $table->integer('access_control_system')->default(0);
            $table->dateTime('last_export')->default('1000-01-01 00:00:00');
            $table->dateTime('created_at')->default('1000-01-01 00:00:00');
            $table->dateTime('updated_at')->default('1000-01-01 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subdomains');
    }
};
