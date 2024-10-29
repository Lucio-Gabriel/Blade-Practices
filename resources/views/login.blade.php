<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>Bem vindo ao Inventa</title>
</head>
<body>

        <div class="flex items-center justify-center pt-36 ml-40">
        <h1 class="text-3xl pt-20">Bem vindo ao <span class="font-medium text-[#0F172A]">Inventa</span></h1>
        <img class="animate-pulse" src="assests/image/icon.inventa.blue.png" alt="" width="200" height="200">
        </div>

        <div class="flex items-center justify-center">
            <livewire:admin-login />
        </div>

</body>
</html>
