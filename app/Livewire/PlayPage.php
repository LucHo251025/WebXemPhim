<?php

namespace App\Livewire;

use App\Models\Film;
use App\Models\Movie;
use Livewire\Component;

class PlayPage extends Component
{
    public $movies;
    public function mount(){
        $this->movies = Film::all();
    }
    public function render()
    {
        return view('livewire.play-page');
    }
}
