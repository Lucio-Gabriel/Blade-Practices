<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade-aulas</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#0F172A]">

    <div class="flex items-start justify-center pt-52">
    <h1 class="text-white text-3xl font-medium">Bem vindo ao sistema de praticas</h1>
    </div>

    <div class="flex items-start justify-center pt-12 gap-4">


        <x-btn-livewire>
         Livewire
        </x-btn-livewire>

        <x-btn-blade>
         Blade
        </x-btn-blade>

    </div>

</body>
</html>
