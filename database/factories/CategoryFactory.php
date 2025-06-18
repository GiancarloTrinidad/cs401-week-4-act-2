<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryName = fake()->words(rand(1, 3), true);
        return [
            'category_name' => $categoryName,
            'slug' => Str::slug($categoryName),
            'description' => fake()->sentence(rand(1, 5))
        ];
    }
}
