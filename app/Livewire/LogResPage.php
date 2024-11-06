<?php

namespace App\Livewire;

use Livewire\Component;

class LogResPage extends Component
{

    public function render()
    {
        return view('livewire.log-res-page')->layout('components.layouts.log-res');  // Chỉ định layout thông qua phương thức render()
        ;
    }
}
