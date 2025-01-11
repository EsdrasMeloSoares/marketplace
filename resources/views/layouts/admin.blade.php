<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-gray-200 flex h-screen">

    @include('components.side-bar')

    <div class="flex-1 ml-64 flex flex-col"> 
        
        <header class="bg-gray-800 p-4 flex justify-between items-center">
            <div class="text-white text-bs font-semibold">Painel de Controle <span class="text-xs text-gray-500">/ {{ $title ?? 'Desconhecido'}}</span> </div>
            <div class="flex items-center space-x-4">
            </div>
        </header>

        <main class="flex-1 p-8 overflow-y-auto">
            @include('components.flash-message')
            @yield('content')
        </main>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
