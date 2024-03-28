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
        Schema::create('core_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->nullable()->index('key1014');
            $table->unsignedInteger('core_legal_entities_id')->nullable()->index('key001');
            $table->unsignedInteger('substitution_core_persons_id')->nullable()->index('key002');
            $table->string('IP_address', 30)->nullable();
            $table->unsignedInteger('core_log_messages_id')->default(0)->index('key003');
            $table->unsignedInteger('core_components_id')->nullable()->index('key004');
            $table->unsignedInteger('core_modules_id')->nullable()->index('key005');
            $table->unsignedInteger('core_actions_id')->nullable()->index('key006');
            $table->tinyInteger('success_type')->default(0);
            $table->text('logged_data')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->dateTime('created_at')->nullable()->default('1000-01-01 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_logs');
    }
};
