<?php

namespace App\Livewire;

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginPage extends Component
{
    public $email;
    public $password;

    public function save(){
        $this->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        if(!auth()->attempt(['email' => $this->email, 'password' => $this->password])){
            session()->flash('error', 'Invalid credentials');
            return ;
        }

        return redirect()->intended();
    }
    public function render()
    {
        return view('livewire.login-page')->layout('components.layouts.log-res');  // Chỉ định layout thông qua phương thức render()

    }
}
