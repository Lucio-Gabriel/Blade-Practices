<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Seus Projetos livewire</title>
     @vite('resources/css/app.css')
</head>
<body class="">

    <div class="flex flex-row-reverse pt-3 mr-2">
    <x-homeBtn />
    </div>

    <div class="flex items-start justify-center pt-52">
    <h1 class="text-black text-3xl font-medium">Escolha uma ação <span class="animate-spin text-[#0F172A]"><i class="bi bi-gear-wide-connected"></i></span> </h1>
    </div>

    <x-center-div>

    <x-link href="{{route('create.employee')}}">
        Cadastrar um funcionario <span><i class="bi bi-people-fill"></i></span>
    </x-link>

    <x-link href="{{route('list.employee')}}">
        Lista de funcionarios <span><i class="bi bi-list-nested"></i></span>
    </x-link>

    </x-center-div>



</body>
</html>
