<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        if ($users->count() == 0)
        {
            echo 'No users found, please run UserSeeder.';
            return;
        }

        Post::factory(10)->create([
            'user_id' => $users->random()->id,
        ]);

        $categories = Category::all();
        $posts = Post::all();

        foreach ($posts as $post) 
        {
            $randomCategories = $categories->random(rand(1, 3));
            $post->categories()->attach($randomCategories);
        }
    }
}
