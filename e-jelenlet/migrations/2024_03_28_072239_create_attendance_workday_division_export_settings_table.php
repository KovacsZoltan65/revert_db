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
        Schema::create('attendance_workday_division_export_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('identification')->comment('jogviszony azonosítása');
            $table->unsignedInteger('core_firms_id')->index('key1347');
            $table->string('factory_code')->nullable()->comment('Üzemkód');
            $table->string('cost_center')->nullable()->comment('Költséghely');
            $table->string('jobnumber')->nullable()->comment('Munkaszám');
            $table->boolean('skip_incapable_of_work')->default(false)->comment('A keresőképtelenség kihagyását jelző flag');
            $table->json('core_general_ledger_analytics_ids')->nullable()->comment('dimenzió - fökönyvek azonosítói');
            $table->tinyInteger('export_division_with_date')->default(0)->comment('A felosztás tartalmazzon dátumot az exportban');
            $table->tinyInteger('export_in_sum')->default(0)->comment('Az export összegezve készüljön');
            $table->tinyInteger('time_format_number')->default(0)->comment('időadat exportálása szám formátumba 12:30=12,5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_workday_division_export_settings');
    }
};
