<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->mediumText('description');
            $table->float('price');
            $table->string('location');
            $table->dateTime('time');
            $table->enum('rating_provider', ['0', '1', '2', '3', '4', '5']); // add default value
            $table->enum('rating_client', ['0', '1', '2', '3', '4', '5']); //
            $table->enum('category', ['cleaning', 'watering', 'assassinate', 'delivery']);
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('provider_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('provider_id')->references('id')->on('providers');
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
        Schema::dropIfExists('services');
    }
}
