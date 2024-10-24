<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateUsers extends Component
{

    public string $name = '';
    public string $email = '';
    public string $password = '';

    public function save()
    {
        User::create(
            $this->only(['name', 'email', 'password'])
        );

        return $this->redirect(route('index.livewire'));
    }

    public function render()
    {
        return view('livewire.create-users');
    }
}