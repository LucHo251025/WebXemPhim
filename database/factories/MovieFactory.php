<?php

namespace Database\Factories;

use App\Models\Genre;
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
            'title' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'director' => $this->faker->name,
            'images' => json_encode('resources/images/play_image/phim1.png'),
            'links' => null,
            'duration' => $this->faker->numberBetween(60, 200),
            'release_year' => $this->faker->year(),
            'rating' => $this->faker->randomFloat(1, 1, 10),
        ];
    }
}
