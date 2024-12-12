<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UpcomingMovie;
use App\Mail\SupportEmail;
use Illuminate\Support\Facades\Mail;;

class SupportMoviePage extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $messageUser;
    public $agree;

    public function render()

    {
        $items = UpcomingMovie::take(20)->get();

        // Order by year and month

        return view('livewire.support-movie-page' ,['items'=> $items]);
    }

    public function sendEmail()
    {
        $this->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'messageUser' => 'required|string|max:9000',
        ]);

        $recipientEmail='hah25703@gmail.com';
        // Send email
         // Send the email
        Mail::to($recipientEmail)->send(new SupportEmail(
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->phone,
            messageUser: $this->messageUser,
        ));
        session()->flash('successMessage', 'Email sent successfully!');
    }
}
