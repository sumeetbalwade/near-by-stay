<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('name');
            // $table->string('city');
            // $table->string('state');
            // $table->integer('nob');
            // $table->integer('gc');
            // $table->float('price');
            // $table->boolean('vo');
            // $table->boolean('pool');
            // $table->boolean('wifi');
            // $table->boolean('pets');
            // $table->boolean('beach');


            // $table->boolean('bc');
            // $table->boolean('fg');
            // $table->boolean('ce');
            // $table->boolean('ac');
            // $table->boolean('cp');
            // $table->boolean('ws');
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
        Schema::dropIfExists('properties');
    }
}
