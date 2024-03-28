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
        Schema::table('core_email_notification_types', function (Blueprint $table) {
            $table->foreign(['core_firms_id'], 'key5000')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_email_notification_types', function (Blueprint $table) {
            $table->dropForeign('key5000');
        });
    }
};
