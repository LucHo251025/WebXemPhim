<?php

namespace App\Livewire\Components;

use Livewire\Component;

class SmallCard extends Component
{
    public $movie;
    public function mount($movie)
    {
        $this->movie = $movie;
    }
    public function render()
    {
        return view('livewire.components.small-card');
    }
}
