<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLatlongToRegionalClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('regional_clubs', function (Blueprint $table) {
          $table->decimal('meeting_place_lat', 8, 6);
          $table->decimal('meeting_place_long', 9, 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('regional_clubs', function (Blueprint $table) {
            $table->dropColumn(['meeting_place_lat', 'meeting_place_long']);
        });
    }
}
