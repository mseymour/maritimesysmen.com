<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Mark Seymour',
          'email' => 'mark.seymour.ns@gmail.com',
          'password' => bcrypt(env('DEFAULT_USER_PASSWORD')),
      ]);
    }
}
