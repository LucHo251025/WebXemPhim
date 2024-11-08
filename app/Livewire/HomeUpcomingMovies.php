<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;
use App\Models\UpcomingMovie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class HomeUpcomingMovies extends Component
{
   
    public function render()
    {
        $dataMovies = collect(UpcomingMovie::all());
    
    // Group by both year and month
    $groupedMovies = $dataMovies->groupBy(function($movie) {
        return $movie->release_year_upcoming.str_pad($movie->release_month_upcoming, 2, '0', STR_PAD_LEFT);
    });

    // Order by year and month
    $groupedMovies = $groupedMovies->sortKeys();

    return view('livewire.upcoming-movies', ['groupedMovies'=> $groupedMovies]);
    }

}
