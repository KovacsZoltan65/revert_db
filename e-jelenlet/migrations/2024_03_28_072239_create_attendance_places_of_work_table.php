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
        Schema::create('attendance_places_of_work', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key4007');
            $table->string('name', 128);
            $table->tinyInteger('status');
            $table->tinyInteger('bonus_status')->default(0)->comment('Pótlékolható');
            $table->string('authorization', 20)->nullable()->comment('rögzítés hatásköre, ki rögzítheti az adott helyet - (Admin: 1, Vezető: 2, Dolgozó: 3)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_places_of_work');
    }
};
