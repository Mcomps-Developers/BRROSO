<?php

namespace App\Livewire;

use Livewire\Component;

class EventDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.event-details-component')->layout('layouts.app');
    }
}
