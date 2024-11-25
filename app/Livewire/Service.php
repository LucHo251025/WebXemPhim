<?php

namespace App\Livewire;

use App\Models\Subscription;
use Livewire\Attributes\Url;
use Livewire\Component;

class Service extends Component
{
    #[Url]
    public $name;

    public $month;
    public $price;
    public $emailUser;
    public $duration;
    public $discountCode;
    public $discountAmount;
    public $total;

    public $showModal = false;
    public $timeRemaining = 540; // 9 minutes

    protected $listeners = ['startTimer'];

    public function showModal()
    {
        $this->showModal = true;
        $this->startTimer();
    }

    public function hideModal()
    {
        $this->showModal = false;
        $this->timeRemaining = 540; // Reset the timer
    }

    public function startTimer()
    {
        $this->dispatchBrowserEvent('start-timer');
    }

    public function countdown()
    {
        if ($this->timeRemaining > 0) {
            $this->timeRemaining--;
        }
    }
    public function mount($month = '1 month')
    {
        $this->month = $month;
        $this->emailUser = auth()->user()->email;
        $this->updatePrice();
    }

    public function updatedMonth($value)
    {
        $this->updatePrice();
    }

    private function updatePrice()
    {
        $subscription = Subscription::query()
            ->where('name', $this->name)
            ->where('duration', $this->month)
            ->first();

        $this->price = $subscription ? $subscription->price : 0;
    }

    public function applyDiscount()
    {
        // Ví dụ mã khuyến mãi "PROMO10" giảm 10%
        if ($this->discountCode == 'PROMO10') {
            $this->discountAmount = $this->price * 0.10;
        } else {
            $this->discountAmount = 0;
        }
    }

    public function getTotalPrice()
    {
        return $this->price - $this->discountAmount;
    }


    public function pay()
    {
        $this->showModal = true;
    }
    public function render()
    {
        return view('livewire.service',[
            'pack' => Subscription::query()->get()
        ]);
    }
}
