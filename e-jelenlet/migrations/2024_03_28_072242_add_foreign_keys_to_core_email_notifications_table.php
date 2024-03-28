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
        Schema::table('core_email_notifications', function (Blueprint $table) {
            $table->foreign(['core_email_notification_types_id'], 'key0011')->references(['id'])->on('core_email_notification_types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_localization_id'], 'key0012')->references(['id'])->on('core_localization')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_legal_entities_id'], 'key1017')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['source_core_legal_entities_id'], 'key5007')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_email_notifications', function (Blueprint $table) {
            $table->dropForeign('key0011');
            $table->dropForeign('key0012');
            $table->dropForeign('key1017');
            $table->dropForeign('key5007');
        });
    }
};
