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
        Schema::create('core_email_notification_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_email_notification_types_type');
            $table->tinyInteger('subtype')->default(0)->comment('értesítés altípusát jelöli 0/1');
            $table->unsignedInteger('core_firms_id')->index('key5001');
            $table->unsignedInteger('localization_id')->nullable()->index('key5003');
            $table->string('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_email_notification_subjects');
    }
};
