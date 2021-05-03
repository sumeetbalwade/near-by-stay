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
            $table->string('city');
            $table->string('state');
            $table->integer('nob')->nullable();
            $table->integer('gc');
            $table->float('price');
            $table->boolean('vo')->default(false);
            $table->boolean('pool')->default(false);
            $table->boolean('wifi')->default(false);
            $table->boolean('pets')->default(false);
            $table->boolean('beach')->default(false);


            $table->boolean('bc')->default(false);
            $table->boolean('fg')->default(false);
            $table->boolean('ce')->default(false);
            $table->boolean('ac')->default(false);
            $table->boolean('cp')->default(false);
            $table->boolean('ws')->default(false);
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
