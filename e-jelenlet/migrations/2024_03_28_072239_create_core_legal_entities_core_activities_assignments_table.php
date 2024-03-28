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
        Schema::create('core_legal_entities_core_activities_assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_legal_entities_id')->index('key1041');
            $table->unsignedInteger('core_activity_id')->index('key1042');
            $table->date('start_date');
            $table->date('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_legal_entities_core_activities_assignments');
    }
};
