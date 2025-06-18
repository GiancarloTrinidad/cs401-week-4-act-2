<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_name' => fake()->word(),
            'file_type' => fake()->randomElement(['image', 'video']),
            'file_size' => rand(1, 20),
            'url' => fake()->imageUrl(640, 480, 'animals', true),
            'upload_date' => now(),
            'description' => fake()->sentence(rand(1, 3))
        ];
    }
}
