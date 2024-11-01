<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    /** @use HasFactory<\Database\Factories\ViewFactory> */
    use HasFactory;
    protected $fillable = [];
    protected $casts = [
        'images' => 'array',
        'links' => 'array',

    ];
}
