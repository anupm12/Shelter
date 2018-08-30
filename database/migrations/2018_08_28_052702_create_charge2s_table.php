<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharge2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge2s', function (Blueprint $table) {
            $table->increments('id');
            $table->float('amount');
            $table->integer('user_id');
            $table->integer('o_id');
            $table->string('currency');
            $table->string('description');
            $table->string('source');
            $table->string('propertyname');
            $table->string('phonenumber');
            $table->string('username');
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
        Schema::dropIfExists('charge2s');
    }
}
