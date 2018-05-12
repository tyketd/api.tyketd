<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForwardingAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ForwardingAgent', function (Blueprint $table) {
            $table->integer('id');
            $table->string("passportNumber");
            $table->string("passportPicture");
            $table->string("bankAccountNumber");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ForwardingAgent');
    }
}
