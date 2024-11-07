<?php

namespace App\Livewire;

use App\Models\Film;
use Livewire\Component;

class MostWatched extends Component
{
    public $films;
    public $film;
    public $name = 'most-watched';

    public function mount()
    {
        $this->films = Film::all();
            $this->film = $this->films->first();
    }
    public function render()
    {
        return view('livewire.most-watched');
    }
}
