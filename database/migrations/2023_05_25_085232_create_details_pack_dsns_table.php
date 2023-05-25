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
        Schema::create('details_pack_dsns', function (Blueprint $table) {
            $table->increments('id');
			$table->string('table');
			$table->string('key1')->nullable();
			$table->string('key2')->nullable();
			$table->string('key3')->nullable();
			$table->string('key4')->nullable();
			$table->string('key5')->nullable();
			$table->string('key6')->nullable();
			$table->string('keyx')->nullable();
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
        Schema::dropIfExists('details_pack_dsns');
    }
};
