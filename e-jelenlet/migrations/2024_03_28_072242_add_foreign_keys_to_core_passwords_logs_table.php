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
        Schema::table('core_passwords_logs', function (Blueprint $table) {
            $table->foreign(['core_persons_id'], 'key40008')->references(['id'])->on('core_persons')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_passwords_logs', function (Blueprint $table) {
            $table->dropForeign('key40008');
        });
    }
};
