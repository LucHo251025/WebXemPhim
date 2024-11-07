<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable = [
        'season_number',
    ];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
