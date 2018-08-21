<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address1');
            $table->string('address2');
            $table->string('area');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->string('propertyname');
            $table->float('rent');
            $table->float('advance');
            $table->string('type');
            $table->string('for');
            $table->string('description');
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
        Schema::dropIfExists('owners');
    }
}
