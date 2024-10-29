<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Funcionarios</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#0F172A]">

    <div class="flex flex-row-reverse pt-3 mr-2">
        <x-back-btn />
    </div>

    <div class="flex items-start justify-center ">
        <h1 class="text-white text-3xl font-medium">Sua lista de Funcionarios <span class="animate-bounce">🔥</span> </h1>
    </div>


        <livewire:employeeslist />


</body>
</html>
