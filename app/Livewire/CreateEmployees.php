<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Component;

class CreateEmployees extends Component
{

    public string $name = '';
    public string $email = '';
    public string $endereco = '';
    public string $genero = '';
    public string $cargo = '';
    public string $telefone = '';
    public string $cpf = '';

    public function save()
    {
        Employee::create(
            $this->only([
                'name',
                'email',
                'endereco',
                'genero',
                'cargo',
                'telefone',
                'cpf'
            ])
        );

        return $this->redirect(route('index.homeLB'));
    }

    public function render()
    {
        return view('livewire.create-employees');
    }
}