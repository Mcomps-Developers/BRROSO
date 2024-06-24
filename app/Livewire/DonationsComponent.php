<?php

namespace App\Livewire;

use Livewire\Component;

class DonationsComponent extends Component
{
    public function render()
    {
        return view('livewire.donations-component')->layout('layouts.app');
    }
}
