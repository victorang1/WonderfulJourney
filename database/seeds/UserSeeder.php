<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'a',
            'email' => 'a@a.com',
            'phone' => '123123123',
            'role' => 'admin',
            'password' => Hash::make('a'),
        ]);

        DB::table('users')->insert([
            'name' => 'b',
            'email' => 'b@b.com',
            'phone' => '123111111',
            'role' => 'user',
            'password' => Hash::make('b'),
        ]);
    }
}
