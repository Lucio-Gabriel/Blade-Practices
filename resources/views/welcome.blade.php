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
    <h1 class="text-white text-3xl font-medium">Bem Vindo <span>👨🏾‍💻</span></h1>
    </div>

        <x-center-div>

        <x-link href="{{route('index.livewire')}}">
        Livewire
        </x-link>

        <x-link href="{{route('index.blade')}}">
        Blade
        </x-link>

       </x-center-div>

</body>
</html>
