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
        Schema::create('attendance_approval_buttons', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_email_notifications_id')->index('key12799')->comment('email üzenet azonosítója');
            $table->unsignedInteger('legalentity_id')->index('key12798')->comment('jogviszony azonosítója');
            $table->string('token', 42)->comment('Token egyedi azonosító');
            $table->string('yes', 2)->comment('Jóváhagyás azonosítója');
            $table->string('no', 2)->comment('Jóváhagyás elutasításának azonosítója');
            $table->integer('use_status')->default(0)->comment('Használat');
            $table->dateTime('expires_at')->nullable();
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
        Schema::dropIfExists('attendance_approval_buttons');
    }
};
