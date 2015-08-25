<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_links', function (Blueprint $table) {
            $table->increments('id');

            $table->string('link');
            $table->string('link_title');
            $table->boolean('is_main_link')->default(false);

            $table->integer('event_id')->unsigned();

            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('event_links');
    }
}
