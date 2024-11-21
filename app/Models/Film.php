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
        'release_year',
        'type',
        'video_path',
        'duration',
        'rating',
        'images',
    ];
    protected $casts = [
        'images' => 'array',
        'links' => 'array',
        'release_date' => 'date',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'film_genres', 'film_id', 'genre_id');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'film_actors', 'film_id', 'actor_id');
    }

    public function date()
    {
        return $this->release_date->format('M d, Y');
    }
    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
}
