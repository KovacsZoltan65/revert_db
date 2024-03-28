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
        Schema::create('core_email_identification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('core_person_id')->index('key6002');
            $table->string('access_token', 120)->comment('a levélben küldött karaktersorozat hashe');
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
        Schema::dropIfExists('core_email_identification');
    }
};
