<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
            'released_date' => fake()->dateTimeBetween(),
            'image' => 'https://loremflickr.com/320/240?random=' . rand(1,50),
            'genre_id' => rand(1, 10),
        ];
    }
}
