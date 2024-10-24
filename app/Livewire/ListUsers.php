<?php

namespace App\Livewire;

use Livewire\Component;

class ListUsers extends Component
{

    public string $name = 'Lucio';

    public function render()
    {
        return view('livewire.list-users');
    }
}