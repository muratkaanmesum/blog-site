<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        Category::truncate();
        Post::truncate();
        // User::factory(10)->create();
        $work = Category::create([
            "name"=> "Work",
            "description" => "Work stuff"
        ]);
        $hobby = Category::create([
            "name"=> "Hobby",
            "description" => "My silly hobbies"
        ]);
        $userOne = User::factory()->create();
        $userTwo = User::factory()->create();
        Post::factory()->count(5)->create([
            "category_id" => $work->id,
            "author_id" =>$userOne->id
        ]);
        Post::factory()->count(5)->create([
            "category_id" => $hobby->id,
            "author_id" =>$userTwo->id

        ]);
    }
}
