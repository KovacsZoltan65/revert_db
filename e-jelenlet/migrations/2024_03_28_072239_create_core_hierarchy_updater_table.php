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
        Schema::create('core_hierarchy_updater', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('from_date');
            $table->string('parent_payroll_software_id', 128)->default('');
            $table->unsignedInteger('child_core_legal_entities_id');
            $table->unsignedInteger('core_firms_id');
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
        Schema::dropIfExists('core_hierarchy_updater');
    }
};
