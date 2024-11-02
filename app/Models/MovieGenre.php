<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieGenre extends Model
{
    /** @use HasFactory<\Database\Factories\MovieGenreFactory> */
    use HasFactory;
    protected $fillable = [
        'movie_id',
        'genre_id'
    ];
    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_genres', 'movie_id', 'genre_id');
    }
}
