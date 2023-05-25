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
        Schema::create('table_lists', function (Blueprint $table) {
            $table->Integer('id');
		    $table->string('type');
			$table->string('tableName');
			$table->string('tableVersion');
			$table->string('tableHistorique');
			$table->string('key1')->nullable();
			$table->string('key2')->nullable();
			$table->string('key3')->nullable();
			$table->string('key4')->nullable();
			$table->string('key5')->nullable();
			$table->string('key6')->nullable();
			$table->foreign('type')->references('name')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_lists');
    }
};
