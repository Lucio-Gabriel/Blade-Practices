<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crie seu usuario aqui</title>
     @vite('resources/css/app.css')
</head>
<body class="bg-[#0F172A]">

    <div class="flex flex-row-reverse pt-3 mr-2">
    <x-back-btn />
    </div>

    <div class="flex items-start justify-center pt-52">
    <h1 class="text-white text-3xl font-medium flex gap-1"> Cadastro de Funcionarios<span  class=" pt-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </svg>
    </span> </h1>
    </div>


    <div class="pt-6">
    <livewire:create-employees />
    </div>




</body>
</html>
