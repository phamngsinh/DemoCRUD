<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            'name' => str_random(10),
            'phone' => 1234567890,
            'username' => 'username'.str_random(10),
            'email' => 'admin@loalhost.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
