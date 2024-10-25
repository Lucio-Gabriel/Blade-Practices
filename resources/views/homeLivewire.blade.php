<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seus Projetos livewire</title>
     @vite('resources/css/app.css')
</head>
<body class="bg-[#0F172A]">

    <div class="flex flex-row-reverse pt-3 mr-2">
    <x-homeBtn />
    </div>

    <div class="flex items-start justify-center pt-52">
    <h1 class="text-white text-3xl font-medium">Escolha uma ação <span class="animate-bounce">🔥</span> </h1>
    </div>

    <x-center-div>

    <x-link href="{{ route('create.user') }}">
        Cadastrar um funcionario
    </x-link>

    <x-link href="#">
        Lista de funcionarios
    </x-link>

    </x-center-div>



</body>
</html>
