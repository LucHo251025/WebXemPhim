<?php

namespace App\Livewire;

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginPage extends Component
{

    public function render()
    {
        return view('livewire.login-page')->layout('components.layouts.log-res');  // Chỉ định layout thông qua phương thức render()

    }
}
