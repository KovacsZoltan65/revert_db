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
        Schema::create('attendance_legal_stock', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->nullable()->index('key1010')->comment('külső kulcs a cég azonosítójára');
            $table->unsignedInteger('core_legal_entities_id')->index('key1008')->comment('külső kulcs a jogviszony azonosítójára');
            $table->unsignedInteger('attendance_abscence_types_id')->index('key1009')->comment('külső kulcs a távolléttípus azonosítójára');
            $table->date('start_date')->comment('a jogviszony ettől a naptól van távol');
            $table->date('end_date')->comment('a jogviszony eddig a napig van távol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_legal_stock');
    }
};
