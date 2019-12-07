<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bus_name_id');
            $table->integer('date_id');
            $table->integer('time_id');
            $table->integer('terminal_name_id');
            $table->integer('district_name_id');
            $table->integer('bus_type_id');
            $table->integer('price_id');
            $table->integer('total_seat_id');
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
        Schema::dropIfExists('seat_details');
    }
}
