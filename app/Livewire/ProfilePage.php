<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ProfilePage extends Component
{
    public User $user;

    public function mount($id){
        $this->user = User::find($id);
    }
    public function render()
    {
        return view('livewire.profile-page');
    }
}
