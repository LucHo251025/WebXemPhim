<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Url;
use Livewire\Component;

class ResetPassword extends Component
{
    #[Url]
    public $email;
    public $token;
    public $password;
    public $password_confirmation;

    public function mount($token){
        $this->token = $token;
    }

    public function save(){
        $this->validate([
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required'
        ]);

        $status = Password::reset([
            'email' => $this->email,
            'token' => $this->token,
            'password' => $this->password.
                'password.confirm',
        ],
        function (User $user, Password $password) {
            $password => $this->password;

            $user->forceFill([
                'password' => Hash::make($password),
            ])->setRememberToken(Str::random(60));
            $user->save();
            event(new PasswordReset($user));
        }
        );
    }
    public function render()
    {
        return view('livewire.reset-password');
    }
}
