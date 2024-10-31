<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Employeeslist extends Component
{
    use WithPagination;

    #[Computed]
    public function employees()
    {
        return Employee::query()
            ->select(['id', 'name', 'email', 'address', 'gender', 'position', 'telephone', 'cpf'])
            ->paginate(8);
    }

    public function deleteEmploy($id)
    {
        $employee = Employee::find($id);

        if ($employee) {
            $employee->delete();
            session()->flash('message', 'Dado deletado com sucesso!');
            $this->resetPage();
        }
    }

    public function render()
    {
        return view('livewire.employeeslist');
    }
}