<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransmitterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Transmitter', function (Blueprint $table) {
            $table->integer('id');
            $table->boolean("isEnterprise");
            $table->string("website");
            $table->string("secretId");
            $table->string("apiKey");
            $table->text("service");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Transmitter');
    }
}
