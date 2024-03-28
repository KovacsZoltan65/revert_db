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
        Schema::create('attendance_approval_links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token', 32)->unique()->comment('Token egyedi azonosító');
            $table->unsignedInteger('user_id')->index('key7006')->comment('jogosult felhasználó azonosítója');
            $table->unsignedInteger('legalentity_id')->index('key7007')->comment('jogviszony azonosítója');
            $table->unsignedInteger('core_email_notifications_id')->index('key7008')->comment('email üzenet azonosítója');
            $table->string('month', 7)->comment('A jóváhagyandó hónap (éééé-hh)');
            $table->dateTime('expires_at')->nullable()->comment('a token lejárati dátuma (éééé-hh-nn óó:pp:ss)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_approval_links');
    }
};
