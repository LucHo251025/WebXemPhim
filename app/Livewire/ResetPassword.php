<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Url;
use Livewire\Component;
use Illuminate\Support\Str;

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

    //save function
    public function save(){
        $this->validate([
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required'
        ]);

        $status = Password::reset([
            'email' => $this->email,
            'token' => $this->token,
            'password' => $this->password,
            'password.confirm' => $this->password_confirmation,
        ],
        function (User $user, string $password) {
            $password = $this->password;

            $user->forceFill([
                'password' => Hash::make($password),
            ])->setRememberToken(Str::random(60));
            $user->save();
            event(new PasswordReset($user));
        }
        );
        return $status === Password::PASSWORD_RESET ? redirect('/login') : back()->withErrors(['email' => [__($status)]]);

    }
    public function render()
    {
        return view('livewire.reset-password');
    }
}
