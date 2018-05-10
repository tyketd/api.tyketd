<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string("lastName");
            $table->string("firstName");
            $table->string("phoneNumber");
            $table->dateTime("createAt");
            $table->string("registrationNumber");
            $table->string("nationalRegisterNumber");
            $table->string("identityCartePicture");
            $table->date("birthDate");
            $table->string("gender");
            $table->string("address");
            $table->string("profile");
            $table->boolean("emailConfirmed");
            $table->boolean("phoneNumberConfirmed");
            $table->boolean("isOnline");
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
}
