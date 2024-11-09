<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Film;
use App\Models\FilmGenre;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $genres = ['Action', 'Comedy', 'Drama', 'Horror', 'Romance', 'Sci-Fi', 'Thriller'];

        // Insert genres into the database
        foreach ($genres as $genre) {
            Genre::create(['name' => $genre, 'images' => json_encode('resources/demo-images/adventure.png')]);
        }
        Film::factory(40)->create()->each(function ($film) {
            // Lấy ngẫu nhiên một số thể loại từ danh sách các thể loại có sẵn
            $genreIds = Genre::inRandomOrder()->take(rand(1, 4))->pluck('id');

            // Gán các thể loại vào phim mà không trùng lặp
            foreach ($genreIds as $genreId) {
                FilmGenre::firstOrCreate([
                    'film_id' => $film->id,
                    'genre_id' => $genreId,
                ]);
            }
        });    }
}
