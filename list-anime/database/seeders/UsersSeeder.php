<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Agung',
            'email' => 'agung@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'role' => 'admin',
            'remember_token' => 'sadasdsadsa13412',
        ]);

        User::create([
            'name' => 'Admin Dila',
            'email' => 'dila@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'role' => 'admin',
            'remember_token' => 'sadasdsadsa13412',
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
            'role' => 'user',
            'remember_token' => 'sadasdsadsa13412',
        ]);
    }
}
