<?php

namespace App\Livewire;

use Livewire\Component;

class DonationsDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.donations-details-component')->layout('layouts.app');
    }
}
