<?php

namespace App\Livewire\Components;

use Livewire\Component;

class SmallSlider extends Component
{
    public $movies;
    public function render()
    {
        return view('livewire.components.small-slider');
    }
}
