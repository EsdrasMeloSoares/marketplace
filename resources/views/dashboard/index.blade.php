@extends('layouts.admin')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-3">
    <!-- Card 1 -->
    <div class="bg-gray-800 p-4 rounded-lg shadow-md">
        <h3 class="text-lg font-bold mb-4">Vendas</h3>
        <p class="text-3xl font-bold">$15,230</p>
        <p class="text-green-500">+5% from last week</p>
    </div>

    <!-- Card 2 -->
    <div class="bg-gray-800 p-4 rounded-lg shadow-md">
        <h3 class="text-lg font-bold mb-4">Usuários <span class="text-xs text-gray-400">/ Cadastrados</span></h3>
        <p class="text-3xl font-bold">{{ $usersCount }}</p>
        <p class="text-blue-500">{{  $message }}</p>
    </div>

    <!-- Card 3 -->
    <div class="bg-gray-800 p-4 rounded-lg shadow-md">
        <h3 class="text-lg font-bold mb-4">Saldo</h3>
        <p class="text-3xl font-bold">99.99%</p>
        <p class="text-green-500">Stable</p>
    </div>
</div>
@endsection
