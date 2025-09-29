<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 5 users, each with 3 posts
        User::factory()
            ->count(5)
            ->hasPosts(3) // uses PostFactory relationship
            ->create();
    }
}
