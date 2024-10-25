<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Symfony\Contracts\Service\Attribute\Required;

class CreateUsers extends Component
{

    #[Validate('required')]
    public string $name = '';

    #[Validate]
    public string $email = '';

    #[Validate('required')]
    public string $password = '';

    public function save()
    {
        User::create(
            $this->only(['name', 'email', 'password'])
        );

        return $this->redirect(route('index.livewire'));
    }

    // protected function rules()
    // {
    //     return [
    //         'email' => [
    //             'required',
    //             Rule::unique('email'),
    //         ]
    //     ];
    // }

    public function render()
    {
        return view('livewire.create-users');
    }
}