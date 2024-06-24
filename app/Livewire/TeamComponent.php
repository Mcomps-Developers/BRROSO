<?php

namespace App\Livewire;

use Livewire\Component;

class TeamComponent extends Component
{
    public function render()
    {
        return view('livewire.team-component')->layout('layouts.app');
    }
}
