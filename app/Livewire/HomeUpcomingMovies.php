<?php

namespace App\Livewire;

use App\Models\Film;
use App\Models\Genre;
use App\Models\Movie;
use Livewire\Component;
use App\Models\UpcomingMovie;
use App\Models\UpcomingMovieGenre;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class HomeUpcomingMovies extends Component
{
   public $groupedMovies;
   public $genreMovies;

   public $groupYearsMovies;
   public $selected_year;
   public $selected_genre;

    public function mount()
    {
        $this->genreMovies = Genre::all();
        
        $this->groupYearsMovies = UpcomingMovie::selectRaw('release_year_upcoming as release_year')
        ->distinct()
        ->where('release_year_upcoming', '>=', Carbon::now()->year) // Exclude current year
        ->orderBy('release_year', 'asc')
        ->get();


        $year = request()->query('year');

        $this->selected_year = $year ?? Carbon::now()->year; 

        $genreId = request()->query('genre');

        $this->selected_genre =  $this->genreMovies->firstWhere('id', $genreId);

        $filterMovies = UpcomingMovie::where('release_year_upcoming', '=', $this->selected_year);

        if( $this->selected_genre){
            $filterMovies->whereHas('genres', function ($query) use ($genreId) {
                $query->where('genre_id', $genreId);
            });
        }

        $dataMovies = collect($filterMovies // Exclude current year
        ->get());
    
        // Group by both year and month
        $groupedMovies = $dataMovies->groupBy(function($movie) {
            return $movie->release_year_upcoming.str_pad($movie->release_month_upcoming, 2, '0', STR_PAD_LEFT);
        });

        // Order by year and month
        $this->groupedMovies = $groupedMovies->sortKeys();


  
        
    }

    public function render()
    {
        

    return view('livewire.upcoming-movies');
    }

}
