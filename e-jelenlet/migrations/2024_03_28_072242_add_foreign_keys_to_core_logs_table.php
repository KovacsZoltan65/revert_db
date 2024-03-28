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
        Schema::table('core_logs', function (Blueprint $table) {
            $table->foreign(['core_legal_entities_id'], 'key001')->references(['id'])->on('core_legal_entities')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['substitution_core_persons_id'], 'key002')->references(['id'])->on('core_persons')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_log_messages_id'], 'key003')->references(['id'])->on('core_log_messages')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_components_id'], 'key004')->references(['id'])->on('core_components')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_modules_id'], 'key005')->references(['id'])->on('core_modules')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_actions_id'], 'key006')->references(['id'])->on('core_actions')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['core_firms_id'], 'key1014')->references(['id'])->on('core_firms')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_logs', function (Blueprint $table) {
            $table->dropForeign('key001');
            $table->dropForeign('key002');
            $table->dropForeign('key003');
            $table->dropForeign('key004');
            $table->dropForeign('key005');
            $table->dropForeign('key006');
            $table->dropForeign('key1014');
        });
    }
};
