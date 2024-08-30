<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        News::factory()->count(10)->create();
        User::factory()->make([
            'name' => 'Admin',
            'type' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make("admin#1234"),
        ])->save();
        User::factory()->make([
            'name' => 'User',
            'type' => 'user',
            'email' => 'newuser0@gmail.com',
            'password' => Hash::make('@NewUser444'),
        ])->save();
    }
}
