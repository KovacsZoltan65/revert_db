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
        Schema::table('core_report_classes', function (Blueprint $table) {
            $table->foreign(['core_report_categories_id'], 'key4024')->references(['id'])->on('core_report_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('core_report_classes', function (Blueprint $table) {
            $table->dropForeign('key4024');
        });
    }
};
