<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('start_hour');
            $table->string('start_city');
            $table->string('start_address');
            $table->string('finish_hour');
            $table->string('finish_city');
            $table->string('finish_address');
            $table->string('price');
            $table->string('available_seats');
            $table->string('preferences');
            $table->string('driver');
            $table->string('id_driver');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
