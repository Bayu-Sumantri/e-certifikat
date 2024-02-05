<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"           => "test",
            "email"          => "test@gmail.com",
            "password"       => \bcrypt('1234567890')
         ]);

         User::create([
            "name"           => "user",
            "email"          => "user@gmail.com",
            "password"       => \bcrypt('user12345')
         ]);
    }
}
