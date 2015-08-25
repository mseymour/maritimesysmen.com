<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // $this->call(UserTableSeeder::class);
        $this->call(EventLinkTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(RegionalClubTableSeeder::class);
        $this->call(RegionalDistrictTableSeeder::class);
        $this->call(RegionalPresidentTableSeeder::class);
        $this->call(RegionalTeamMemberTableSeeder::class);

        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Model::reguard();
    }
}
