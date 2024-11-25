<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /** @use HasFactory<\Database\Factories\FilmFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'director',
        'release_date',
        'type',
        'video_path',
        'duration',
        'rating',

    ];
    protected $casts = [

        'video_path' => 'array',

    ];
    public function filmImages()
    {
        return $this->hasOne(FilmImages::class);
    }


    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'film_genres', 'film_id', 'genre_id');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'film_actors', 'film_id', 'actor_id');
    }

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }


}
