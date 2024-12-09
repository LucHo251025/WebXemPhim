<?php

namespace App\Livewire;

use App\Models\Film;
use Livewire\Component;

class HomePage extends Component
{
    public $films;
    public $movies;
    public $shows;
    public function mount()
    {
        $this->films = Film::all();
        $this->movies = $this->films->where('type', 'movie');
        $this->shows = $this->films->where('type', 'show');
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
