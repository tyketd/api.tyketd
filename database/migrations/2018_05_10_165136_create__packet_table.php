<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Packet', function (Blueprint $table) {
            $table->integer('id');
            $table->string("name");
            $table->string("deliveryTimeInterval");
            $table->double("costEstimation");
            $table->text("receiverDescription");
            $table->string("container");
            $table->double("width");
            $table->double("height");
            $table->double("length");
            $table->double("weight");
            $table->double("price");
            $table->string("priceInterval");
            $table->string('expeditionPlace');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Packet');
    }
}
