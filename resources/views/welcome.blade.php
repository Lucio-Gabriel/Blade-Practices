<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade-aulas</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-500">

    <div class="flex items-start justify-center pt-52">
    <h1 class="text-3xl font-medium">Bem vindo ao sistema de praticas</h1>
    </div>

    <div class="flex items-start justify-center pt-12 gap-4">
        @component('components.btn')
         Livewire
        @endcomponent

        @component('components.btn')
         Blade
        @endcomponent
    </div>

</body>
</html>
