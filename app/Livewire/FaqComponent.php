<?php

namespace App\Livewire;

use Livewire\Component;

class FaqComponent extends Component
{
    public function render()
    {
        return view('livewire.faq-component')->layout('layouts.app');
    }
}
