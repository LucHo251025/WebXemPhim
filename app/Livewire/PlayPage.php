<?php

namespace App\Livewire;

use App\Models\Actor;
use App\Models\Film;
use App\Models\Movie;
use Livewire\Component;

class PlayPage extends Component
{
    public $movies;
    public $actors;
    public $isCollapsed = true;
    public $text;
    public $limit;
    public function mount($text,$limit = 100){
        $this->movies = Film::with('filmImages')->get();
        $this->actors =Actor::query()->get();
        $this->text = $text;
        $this->limit = $limit;
    }

    public  function toggle()
    {
        $this->isCollapsed = !$this->isCollapsed;
    }
    public function render()
    {
        return view('livewire.play-page');
    }
}
