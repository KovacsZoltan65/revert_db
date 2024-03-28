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
        Schema::create('core_persons_system_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('developer_description')->default('');
            $table->tinyInteger('editable')->default(0)->comment('1: akkor is módosítható, ha van számfejtő szoftver a rendszerben (alapértelmezett), 0: csak akkor módosítható, ha nincs számfejtő szoftver a rendszerben');
            $table->tinyInteger('show_in_legal_entity_selector')->default(0);
            $table->string('model_name')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_persons_system_attributes');
    }
};
