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
        Schema::create('details_pack_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('table');
            $table->string('pin_num')->nullable();
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
        Schema::dropIfExists('details_pack_rules');
    }
};
