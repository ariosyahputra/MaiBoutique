<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => "Binusian",
                'password' => Hash::make("binusuniversity"),
                'email' => "binus@gmail.com",
                'phone_number' => "01234567890",
                'address' => "Alam Sutra",
                'role_id' => 1
            ],
            [
                'username' => "Mikee",
                'password' => Hash::make("11111"),
                'email' => "mike@gmail.com",
                'phone_number' => "09867547531",
                'address' => "Jakarta Raya",
                'role_id' => 2
            ]
        ]);
    }
}
