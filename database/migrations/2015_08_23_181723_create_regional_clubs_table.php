<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regional_clubs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('chartered');
            $table->string('website');
            $table->string('meeting_date');
            $table->string('meeting_time');
            $table->string('meeting_place_name');
            $table->string('meeting_place_address');
            $table->string('meeting_place_city');
            $table->string('meeting_place_postal_code');

            $table->integer('district_id')->unsigned();
            $table->integer('meeting_place_province_id')->unsigned();

            $table->timestamps();

            $table->foreign('district_id')->references('id')->on('regional_districts');
            $table->foreign('meeting_place_province_id')->references('id')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('regional_clubs');
    }
}
