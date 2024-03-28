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
        Schema::table('attendance_approval_links', function (Blueprint $table) {
            $table->foreign(['user_id'], 'key7006')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['legalentity_id'], 'key7007')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_email_notifications_id'], 'key7008')->references(['id'])->on('core_email_notifications')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_approval_links', function (Blueprint $table) {
            $table->dropForeign('key7006');
            $table->dropForeign('key7007');
            $table->dropForeign('key7008');
        });
    }
};
