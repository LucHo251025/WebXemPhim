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
        $images = [
            "poster" => [
                'resources/demo-images/deadpool.png',
                "resources/demo-images/lastofus.png"
            ],
            "background" => [
                "resources/demo-images/money-heist.png",
                "resources/demo-images/img.png"
            ]
        ];
        return [
            'title' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'director' => $this->faker->name,
            'images' => json_encode($images),
            'links' => null,
            'duration' => $this->faker->numberBetween(60, 200),
            'release_date' => $this->faker->dateTimeBetween('1975-01-01', 'now'),
            'rating' => $this->faker->randomFloat(1, 1, 10),
        ];
    }
}
