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
            $table->string('type');
            $table->string('location');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('nob')->nullable()->default(0);
            $table->integer('gc')->nullable()->default(0);
            $table->float('price');
            $table->integer('ratings')->nullable()->default(0);
            $table->longText('description')->nullable();


            $aminities = ['television', 'wifi', 'air-conditioner', 'free-breakfast', 'free-cancellation', 'ensuite-bathroom', 'swimming-pool', 'lawn', 'valley-view', 'lake-view', 'pets-allowed', 'alcohol-allowed', 'bonfire', 'parking', 'genset', 'towels-and-toiletries', 'inverter', 'bedroom-and-laundry', 'essentials', 'towels', 'bed-sheets', 'soap-and-toilet-paper', 'hanger', 'CCTV-cameras', 'first-aid-kit', 'fire-extinguisher', 'kitchen',  'microwave', 'refrigerator', 'dishes-and-silverware','space-where-guests-can-cook-their-own-meals'];

            foreach ($aminities as $item) {
                $table->boolean($item)->default(false);
            }
            // $table->boolean('vo')->default(false);
            // $table->boolean('pool')->default(false);
            // $table->boolean('wifi')->default(false);
            // $table->boolean('pets')->default(false);
            // $table->boolean('beach')->default(false);


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
