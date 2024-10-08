<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password123'),
            'phone' => '1234567890',
            'role' => 'owner',
            'address' => '123 Main St',
            'profile_picture' => 'default.jpg',
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => bcrypt('password123'),
            'phone' => '0987654321',
            'role' => 'broker',
            'address' => '456 Elm St',
            'profile_picture' => 'default.jpg',
        ]);
    }
}
