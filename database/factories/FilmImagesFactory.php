<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\film_images>
 */
class FilmImagesFactory extends Factory
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
            'posters' => json_encode($images_poster), // 'images_poster'
            'backgrounds'=>json_encode($images_background),
        ];
    }
}
