<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    
</head>
<body class="bg-[#f3f4f6]">

    @include('components.header')

    <div class="main-content">
        @yield('content')
    </div>   

    @vite('resources/css/app.js')
</body>
</html>