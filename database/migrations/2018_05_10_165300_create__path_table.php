<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Path', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime("dateOfDeparture");
            $table->dateTime("dateOfArrival");
            $table->string("planeTicket");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Path');
    }
}
