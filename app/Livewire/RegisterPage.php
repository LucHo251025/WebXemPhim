<?php

namespace App\Livewire;

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;
    public $confirm_password;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        dd($user);
//        auth()->login($user);

        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.register-page')->layout('components.layouts.log-res');  // Chỉ định layout thông qua phương thức render()

    }
}
