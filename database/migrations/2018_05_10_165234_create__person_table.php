<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Person', function (Blueprint $table) {
            $table->increments('id');
           $table->string("email");
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Person');
    }
}
