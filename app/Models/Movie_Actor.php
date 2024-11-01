<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie_Actor extends Model
{
    /** @use HasFactory<\Database\Factories\MovieActorFactory> */
    use HasFactory;
    protected $fillable = [
        'movie_id',
        'actor_id'
    ];
    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_actors', 'actor_id', 'movie_id');
    }
}
