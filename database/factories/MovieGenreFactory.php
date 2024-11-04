<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieGenreFactory extends Factory
{
    protected $model = MovieGenre::class;
    public function definition(): array
    {
        return [
            'movie_id' => Movie::factory()->create()->id,
            'genre_id' => rand(1, 7),
        ];
    }
}
