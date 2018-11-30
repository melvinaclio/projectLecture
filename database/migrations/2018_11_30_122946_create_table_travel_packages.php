<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTravelPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_travel_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('packagePrice');
            $table->string('packageName');
            $table->string('packageDescription');
            $table->integer('packageRating');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_travel_packages');
    }
}
