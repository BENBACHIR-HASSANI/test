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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('first_name');
            $table->string('last_name');
			$table->string('trigramme_user')->unique();
			$table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
			$table->string('stat_id')->unique();
			$table->string('password', 60);
            $table->string('confirm_password', 60);
            $table->string('tel');
            $table->string('role');
			$table->rememberToken();
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
