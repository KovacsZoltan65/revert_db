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
        Schema::table('core_email_notification_subjects', function (Blueprint $table) {
            $table->foreign(['core_firms_id'], 'key5001')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['localization_id'], 'key5003')->references(['id'])->on('core_localization')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_email_notification_subjects', function (Blueprint $table) {
            $table->dropForeign('key5001');
            $table->dropForeign('key5003');
        });
    }
};
