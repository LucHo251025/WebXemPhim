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
        $images_poster = [
            'public/storage/movies/poster/01JCQFPFJG21WS8RQ22ESYMCTM.png',
            'public/storage/movies/poster/01JCQFPFJJE9D6WBAWHVZ2CKAV.png',
            ];
        $images_background = [
            'public/storage/backgrounds/01JCQFPFJG21WS8RQ22ESYMCTM.png',
            'public/storage/backgrounds/01JCQFPFJJE9D6WBAWHVZ2CKAV.png',
        ];
        return [
            'title' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'director' => $this->faker->name,

            'links' => null,
            'duration' => $this->faker->numberBetween(60, 200),
            'type' => $this->faker->randomElement(['movie', 'show']),
            'release_date' => $this->faker->dateTimeBetween('1975-01-01', 'now'),
            'rating' => $this->faker->randomFloat(1, 1, 10),
        ];
    }
}
