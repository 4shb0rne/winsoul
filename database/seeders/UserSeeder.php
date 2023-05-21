<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'Admin',
            'profile_picture' => 'default_profile_picture.jpg'
        ]);
        User::create([
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'role' => 'User',
            'profile_picture' => 'default_profile_picture.jpg'
        ]);
    }
}
