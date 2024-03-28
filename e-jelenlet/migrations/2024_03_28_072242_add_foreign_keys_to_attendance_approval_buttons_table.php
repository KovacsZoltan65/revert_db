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
        Schema::table('attendance_approval_buttons', function (Blueprint $table) {
            $table->foreign(['legalentity_id'], 'key12798')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_email_notifications_id'], 'key12799')->references(['id'])->on('core_email_notifications')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance_approval_buttons', function (Blueprint $table) {
            $table->dropForeign('key12798');
            $table->dropForeign('key12799');
        });
    }
};
