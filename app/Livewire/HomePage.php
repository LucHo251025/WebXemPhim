<?php

namespace App\Livewire;

use App\Models\Film;
use Livewire\Component;

class HomePage extends Component
{
    public $films;
    public function mount()
    {
        $this->films = Film::all();
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
