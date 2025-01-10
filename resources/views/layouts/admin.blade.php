<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-v8A8jMM6.css') }}">
</head>
<body class="bg-gray-900 text-gray-200">
    <div class="flex h-screen">


        @include('components.aside')
        <div class="flex-1 flex flex-col">
            <header class="bg-gray-800 p-4 flex justify-between items-center">
                <h2 class="text-ms font-bold flex">
                        <a href="{{ route('dashboard.index') }}">Painel de Controle</a><span class="ml-1 text-xs mt-1 text-gray-400">/ {{ $title }}</span>
                </h2>
            </header>
            

            <main class="p-6 ">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('build/assets/app-Fwl9nOSa.js') }}"></script>
</body>
</html>
