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
        Schema::create('request_all_table_dsns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tableName');
            $table->string('request');
            $table->integer('entete_id');
            $table->foreign('entete_id')->references('id')->on('entete_packs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_all_table_dsns');
    }
};
