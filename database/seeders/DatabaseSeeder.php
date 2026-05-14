<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Product;
use App\Models\Teachers;
// use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Teachers::factory(20)->create();
        // Teachers::factory(10)->create();
        // Product::factory(30)->create();
        Post::factory(40)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
