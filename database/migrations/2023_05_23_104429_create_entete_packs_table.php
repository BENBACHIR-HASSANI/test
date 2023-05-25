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
        Schema::create('entete_packs', function (Blueprint $table) {
            $table->increments('id');
            $table->String('trigramme_user');
            $table->String('type');
            $table->Integer('qc');
            $table->String('version');
            $table->Integer('csr');
            $table->Date('date');
            $table->String('env_source');
            $table->Integer("statut");
            $table->String('project_name')->nullable();
            $table->integer('requestAllTableDSN')->nullable();
            $table->integer('requestDeleteDSN')->nullable();
//        
        });
    }

    /**
     * Reverse the migrations.
     * 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entete_packs');
    }
};
