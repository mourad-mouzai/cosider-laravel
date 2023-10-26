<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\Subscriber;

class LandingPage extends Component
{
    public $subscriptionEmail;

    public function subscribeFunction()
    {
        Log::debug($this->subscriptionEmail);
        
        Subscriber::factory()->create([
            'email' => $this->subscriptionEmail,
        ]);
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
