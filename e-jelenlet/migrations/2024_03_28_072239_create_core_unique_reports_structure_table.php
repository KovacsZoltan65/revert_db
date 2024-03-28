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
        Schema::create('core_unique_reports_structure', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->comment('1 - Saját adatok, 2 - Személyek adatai');
            $table->integer('class_id')->comment('1 - Személyes adatlap, 2 - Jelenléti ív, 3 - Helyettesítések, 4 - Jogi állományok');
            $table->string('field');
            $table->string('class_name', 256)->default('')->comment('A mezőhöz tartozó osztály neve');
            $table->string('filter')->comment('nonfilter - a mező nem szűrhető, date - dátumosan szűrhető, class - osztályosan szűrhető, text - szövegesen szűrhető, int - egész szám szerint');
            $table->tinyInteger('active')->default(1)->comment('A mező megjeleníthetősége a mezőválasztóban');
            $table->text('data')->comment('egyéb adatok tárolására szánt hely');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_unique_reports_structure');
    }
};
