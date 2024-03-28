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
        Schema::create('core_persons_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 32)->default('');
            $table->integer('system')->default(0);
            $table->integer('core_firms_id')->default(0)->comment('Ha az értéke 0, akkor az összes céghez kapcsolódik');
            $table->tinyInteger('visible_for_owner')->default(1);
            $table->tinyInteger('visible_for_boss')->default(1);
            $table->unsignedInteger('visible_for_other')->default(0);
            $table->tinyInteger('editable_for_owner')->default(0);
            $table->tinyInteger('editable_for_boss')->default(0);
            $table->unsignedInteger('editable_for_other')->default(0);
            $table->boolean('visible_in_header')->default(false);
            $table->dateTime('deadline_if_required')->nullable()->default('1000-01-01 00:00:00');
            $table->tinyInteger('value_required')->default(1);
            $table->tinyInteger('value_unique')->default(0);
            $table->tinyInteger('value_email')->default(0);
            $table->string('value_regex', 63)->default('');
            $table->dateTime('created_at')->nullable()->default('1000-01-01 00:00:00');
            $table->dateTime('updated_at')->nullable()->default('1000-01-01 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_persons_attributes');
    }
};
