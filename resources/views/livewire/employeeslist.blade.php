<div class="m-10">

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Endereco
                </th>
                <th scope="col" class="px-6 py-3">
                    Genero
                </th>
                <th scope="col" class="px-6 py-3">
                    Posição
                </th>
                <th scope="col" class="px-6 py-3">
                    Telefone
                </th>
                <th scope="col" class="px-6 py-3">
                    CPF
                </th>

                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($this->employees as $employee)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $employee->name  }}
                </th>
                <td class="px-6 py-4">
                    {{ $employee->email }}
                </td>
                <td class="px-6 py-4">
                    {{ $employee->address }}
                </td>
                <td class="px-6 py-4">
                    {{ $employee->gender }}
                </td>
                <td class="px-6 py-4">
                    {{ $employee->position }}
                </td>
                <td class="px-6 py-4">
                    {{ $employee->telephone }}
                </td>
                <td class="px-6 py-4">
                    {{ $employee->cpf }}
                </td>
                <td class="px-6 py-4 text-right">
                    <button type="submit" wire:click="deleteEmploy({{ $employee->id }})" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Deletar</button >
                </td>
            </tr>

            @endforeach
            </tbody>
        </table>
    </div>

    <div class=" pt-5">
    {{ $this->employees->links()  }}
    </div>

</div>


{{--https://i.pravatar.cc/150?img--}}
