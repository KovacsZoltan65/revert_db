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
        Schema::create('core_surface_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('notification_type')->comment('Az értesítés típusának azonosítója');
            $table->unsignedInteger('subtype');
            $table->unsignedInteger('target_legal_entities_id')->index('key4210')->comment('A cél jogviszony azonosítója');
            $table->unsignedInteger('source_legal_entities_id')->index('key4211')->comment('Az értesítést generáló jogviszony azonosítója');
            $table->string('subject', 150);
            $table->boolean('use_status')->default(true)->comment('Aktiv értesítés 0:nem, 1:igen');
            $table->integer('core_email_notifications_id')->nullable()->comment('Az email üzenet azonosítója');
            $table->text('variables')->nullable()->comment('Az értesítésben megjelenítendő adatok');
            $table->text('combinable')->nullable()->comment('Jóváhagyás, elutasításhoz köthető adatok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_surface_notifications');
    }
};
