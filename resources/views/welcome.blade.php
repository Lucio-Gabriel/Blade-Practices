<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo ao sistema Inveta</title>
    @vite('resources/css/app.css')
</head>
<body >

        <div class="flex items-center justify-center pt-36 ml-52">
        <h1 class="text-3xl pt-36">Bem vindo ao <span class="font-medium text-[#0F172A]">Inventa</span></h1>
        <img class="animate-pulse" src="assests/image/icon.inventa.blue.png" alt="" width="200" height="200">
        </div>

         <x-center-div>

         <x-link href="{{route('index.homeLB')}}">
        Funcionarios
        </x-link>

         <x-link href="#">
        Produtos
        </x-link>

       </x-center-div>

</body>
</html>
