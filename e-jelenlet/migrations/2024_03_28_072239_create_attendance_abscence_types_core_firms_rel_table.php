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
        Schema::create('attendance_abscence_types_core_firms_rel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attendance_abscence_types_id')->index('key4018');
            $table->unsignedInteger('core_firms_id')->index('key4019');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('bonus_status')->default(0)->comment('bónuszt kell rá számítani');
            $table->tinyInteger('worktime_status')->default(0)->comment('munkaidőkeretbe beleszámít');
            $table->unsignedInteger('core_other_incomes_id')->nullable()->index('key2077');
            $table->string('authorization', 120)->default('')->comment('távollét rögzítés jogosultághoz kötve, jog_csoportok');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_abscence_types_core_firms_rel');
    }
};
