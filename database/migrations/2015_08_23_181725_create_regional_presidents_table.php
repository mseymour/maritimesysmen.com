<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalPresidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regional_presidents', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email');
            $table->string('city');
            $table->string('phone');
            $table->string('postal_code');;
            $table->string('address');
            $table->string('address2');

            $table->integer('club_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->integer('province_id')->unsigned();

            $table->timestamps();

            $table->foreign('club_id')->references('id')->on('regional_clubs');
            $table->foreign('district_id')->references('id')->on('regional_districts');
            $table->foreign('province_id')->references('id')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('regional_presidents');
    }
}
