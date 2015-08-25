<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('location_name');
            $table->string('location_address');
            $table->string('location_city');
            $table->string('description');
            $table->boolean('is_main_event')->default(false);

            $table->integer('location_province_id')->unsigned();

            $table->timestamps();

            $table->foreign('location_province_id')->references('id')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
