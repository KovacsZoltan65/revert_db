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
        Schema::create('core_log_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category')->default(0)->comment('1 - rendszer, 2 - felhasználó, 3 - import, 4 - értesítés');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_log_messages');
    }
};
