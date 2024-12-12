<?php

namespace App\Livewire;
use App\Models\Film;
use Livewire\Component;

class ShowMoviePage extends Component
{

    public $films;
    public $rating = 0;
    public $filmId;
    public $userId;
    public $averageRating = 0;
    public $totalReviews = 0;

    public function mount()
    {
        $this->films = Film::take(10)->get();
    }


    public function selectRating($rating)
    {
        $this->rating = $rating;
        //test
        $this->averageRating = $rating;
        $this->totalReviews = 1;


    }

    public function render()
    {
        return view('livewire.show-movie-page');
    }

}
