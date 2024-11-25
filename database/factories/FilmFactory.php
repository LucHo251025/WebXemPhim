<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->company,
            'director' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'release_date' => $this->faker->dateTimeBetween('1975-01-01', 'now'),
            'type' => $this->faker->randomElement(['movie', 'show']),
            'duration' => $this->faker->numberBetween(60, 200),
            'average_rating' => $this->faker->randomFloat(1, 1, 10),
            'slug' => $this->faker->slug,
            'video_path' => null,
        ];
    }
}
