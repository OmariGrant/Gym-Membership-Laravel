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
        //default users for testing
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'test@example.com',
            'password' => bcrypt('gym123'),
        ]);
    }
}
