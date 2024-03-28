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
        Schema::create('core_hierarchy_import', function (Blueprint $table) {
            $table->increments('id');
            $table->date('from_date');
            $table->integer('core_firms_id');
            $table->string('parent_payroll_software_id', 128)->default('');
            $table->unsignedInteger('child_core_legal_entities_id');
            $table->tinyInteger('processed')->default(0);
            $table->string('fail_message')->comment('entity-parent nem létezik; loop-hurok; recurrence-ismétlődés; no_change-nincs változás; other-egyéb');
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
        Schema::dropIfExists('core_hierarchy_import');
    }
};
