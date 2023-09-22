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
            $table->increments('id')->comment('Rekord azonosító');
            $table->string('subdomain', 191)->comment('Példány');
            $table->string('url', 191)->comment('Példány url-je');
            $table->string('name', 191)->comment('Aldomain neve');
            $table->string('db_host', 125)->default('localhost')->comment('Adatbázis szerver címe');
            $table->integer('db_port')->default(3306)->comment('Adatbázis port');
            $table->string('db_name', 191)->comment('Adatbázis neve');
            $table->string('db_user', 191)->comment('Adatbázis felhasználó');
            $table->string('db_password', 191)->comment('Adatbázis jelszó');
            $table->boolean('notification')->comment('Értesítés');
            $table->unsignedInteger('state_id')->index('subdomains_state_id_foreign')->comment('Állapot azonosító');
            $table->tinyInteger('is_mirror')->default(0)->comment('Tükör adatbázis');
            $table->tinyInteger('sso')->default(0)->comment('SSO');
            $table->integer('access_control_system')->default(0)->comment('Access Controll System');
            $table->timestamp('last_export')->comment('Utoldó export');
            $table->timestamps();
            $table->softDeletes();
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
