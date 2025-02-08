<?php

namespace App\Livewire\Tournament;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Tournaments')]
    public function render(): View
    {
        return view('livewire.tournament.index');
    }
}
