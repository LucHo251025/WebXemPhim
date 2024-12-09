<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $fillable = [
        'season_id',
        'episode_number',
        'title',
        'description',
        'release_date',
        'duration',
        'video_path',
        'image',
    ];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
