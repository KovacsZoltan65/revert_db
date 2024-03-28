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
        Schema::table('core_extra_email_addresses', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key5004')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_email_notifications_types_id'], 'key5005')->references(['id'])->on('core_email_notification_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['core_localization_id'], 'key5006')->references(['id'])->on('core_localization')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_extra_email_addresses', function (Blueprint $table) {
            $table->dropForeign('key5004');
            $table->dropForeign('key5005');
            $table->dropForeign('key5006');
        });
    }
};
