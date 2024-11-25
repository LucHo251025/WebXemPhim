<?php

namespace App\Livewire;
use App\Models\Movie;
use App\Models\UpcomingMovie;
use Livewire\Component;

class ShowMoviePage extends Component
{

    public $movies;
    public function mount()
    {
        $this->movies = UpcomingMovie::take(10)->get();
    }
    public function render()
    {   
        return view('livewire.show-movie-page');
    }
}
