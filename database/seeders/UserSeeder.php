<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'npm' => 12345678,
            'username' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'Perpus',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
        ]);
    }
}