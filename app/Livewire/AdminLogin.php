<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminLogin extends Component
{

    public string $email = '';

    public string $password = '';

    public function save()
    {
        User::create(['name', 'password']);

       return $this->redirect('/escolha-aqui');
    }

    public function render()
    {
        return view('livewire.admin-login');
    }
}