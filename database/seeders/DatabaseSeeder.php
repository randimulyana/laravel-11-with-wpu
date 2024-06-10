<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'Web Development',
        //     'slug' => 'web-development'
        // ]);

        // Post::create([
        //     'title' => 'Laravel 11 Tutorial',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'laravel-11-tutorial',
        //     'body' => 'The PHP Framework
        //     for Web Artisans
        //     Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.'

        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();

    }
}
