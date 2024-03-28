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
        Schema::create('core_sso_oauth_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('client_id')->nullable();
            $table->string('secret_key')->nullable();
            $table->string('authorize_url')->comment('Authentikációs URL');
            $table->string('token_check_url')->comment('Token ellenőrzés URL');
            $table->string('user_authentication_url')->comment('Felhasználó lekérésének útvonala');
            $table->string('scope')->default('')->comment('A felhasználhatósági jogosultság: pl: view-user');
            $table->string('user_interface')->nullable()->comment('ejelenlét oldali interface neve');
            $table->boolean('status')->comment('Állapot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_sso_oauth_clients');
    }
};
