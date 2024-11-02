<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie_Genre;
use App\Models\MovieGenre;
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
            Genre::create(['name' => $genre]);
        }
        MovieGenre::factory(30)->create();
    }
}
