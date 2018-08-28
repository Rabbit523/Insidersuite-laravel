<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->integer('hotel_idFk')->unsigned();
            $table->integer('user_idFk')->unsigned();            
            $table->enum('booking_status', array(1,0))->default(1);
            $table->timestamps();
        });
        Schema::table('bookings', function($table) {
            $table->foreign('user_idFk')->references('user_id')->on('users')->onDelete('restrict');
            $table->foreign('hotel_idFk')->references('hotel_id')->on('hotels')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
