<?php

namespace App\Livewire;

use App\Models\Movie;
use Livewire\Component;

class PlayPage extends Component
{
    public $movies;
    public function mount(){
        $this->movies = Movie::all();
    }
    public function render()
    {
        return view('livewire.play-page');
    }
}
