<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.homepage');
    }
    
    public function showWizard()
    {
        return view('livewire.wizard');
    }
}
