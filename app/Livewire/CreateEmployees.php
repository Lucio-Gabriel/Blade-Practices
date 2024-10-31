<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Component;

class CreateEmployees extends Component
{

    public string $name = '';
    public string $email = '';
    public string $address = '';
    public string $gender = '';
    public string $position = '';
    public string $telephone = '';
    public string $cpf = '';
    public function save()
    {
        Employee::create(
            $this->only([
                'name',
                'email',
                'address',
                'gender',
                'position',
                'telephone',
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
