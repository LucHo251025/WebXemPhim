<?php

namespace App\Livewire;

use App\Models\Actor;
use App\Models\Film;
use Livewire\Component;

class PlayPage extends Component
{
    public $films;
    public $film;
    public $actors;
    public $isCollapsed = true;
    public $text;
    public $limit;
    public $slug;
    public function mount($slug, $text, $limit = 100){
        $this->slug = $slug;
        $this->films = Film::take(20)->get();
        // get film by slug
        $this->film = Film::get()->where('slug', $slug)->first();
        if (!$this->film) {
            abort(404);
        }
        $this->actors =$this->film->actors;
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
