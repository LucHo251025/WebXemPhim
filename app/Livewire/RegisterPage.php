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
    public $password_confirmation;

    public function save()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',

        ]);


        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'avatar' => null,
            'subscription_id' => '1',
            'subscription_started_at' => null,
            'subscription_ended_at' => null

        ]);
        $user->password = Hash::make($this->password);
        $user->save();

//        dd($user);
        auth()->login($user);

        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.register-page')->layout('components.layouts.log-res');  // Chỉ định layout thông qua phương thức render()

    }
}
