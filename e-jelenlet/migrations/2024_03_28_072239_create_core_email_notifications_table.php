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
        Schema::create('core_email_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_email_notification_types_id')->index('key4004');
            $table->string('blade_file_name', 128);
            $table->unsignedInteger('core_localization_id')->nullable()->index('key4005');
            $table->unsignedInteger('core_legal_entities_id')->nullable()->index('key1017');
            $table->unsignedInteger('source_core_legal_entities_id')->nullable()->index('key5007')->comment('Az értesítést generáló jogviszony azonosítója');
            $table->string('email_address');
            $table->string('subject');
            $table->text('variables');
            $table->dateTime('expiration');
            $table->dateTime('sent_time')->nullable();
            $table->tinyInteger('sent_status');
            $table->integer('error_code')->nullable();
            $table->string('error_message', 1000)->nullable();
            $table->string('blocked_name')->nullable();
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
        Schema::dropIfExists('core_email_notifications');
    }
};
