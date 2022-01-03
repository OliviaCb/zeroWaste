<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
			$table->string('password');
            $table->string('email')->unique();
            $table->string('firstname');
            $table->string('surname');
            $table->date('birthday');
            $table->string('gender');
            $table->timestamp('email_verified_at')->nullable();
			$table->timestampsTz($precision = 0);
            $table->rememberToken();
            $table->string('role')->default('user');
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
}
