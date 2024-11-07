<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\Movie;
use App\Models\MovieActor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     */

    protected $model = MovieActor::class;
    public function definition(): array
    {
        return [
            'movie_id' => Movie::factory()->create()->id,
            'actor_id' => Actor::factory()->create()->id,
        ];
    }
}
