@extends('layouts.admin')

@section('content')

<div class="bg-gray-800 p-4 rounded-lg flex shadow-md col-span-1 md:col-span-2">
    <a href="{{ route('category.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Criar Categoria</a>

    <form action="" class="flex">
        <input type="search" name="" id="" class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded-l py-2 px-4 leading-tight focus:outline-none focus:bg-gray-600 ml-4" placeholder="Procurar Categoria">
        
        <button type="submit" class="bg-blue-500 rounded-r px-4">Procurar</button>
    </form>
</div>

<div class="bg-gray-800 p-4 mt-3 rounded-lg shadow-md col-span-1 md:col-span-2">
    <table class="min-w-full bg-gray-800 text-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-700 text-left">#</th>
                <th class="py-2 px-4 border-b border-gray-700 text-left">Categoria<p class="text-xs text-gray-500">Para editar, cilique duas vezes no nome</p></th>
                <th class="py-2 px-4 border-b border-gray-700 text-left"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorys as $categoria)
            <tr class="hover:bg-gray-700">
                <td class="py-2 px-4 border-b border-gray-700">{{ $categoria->id }}</td>
                <td class="py-2 px-4 border-b border-gray-700">{{ $categoria->name }}</td>
                
                <td class="py-1 px-4 border-b border-gray-700 text-center">
                     <form action="{{ route('category.destroy', $categoria->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-1 py-1 rounded-lg">
                            <svg width="25px" height="25px" viewBox="-3.6 -3.6 31.20 31.20" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 12L14 16M14 12L10 16M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M18 6V16.2C18 17.8802 18 18.7202 17.673 19.362C17.3854 19.9265 16.9265 20.3854 16.362 20.673C15.7202 21 14.8802 21 13.2 21H10.8C9.11984 21 8.27976 21 7.63803 20.673C7.07354 20.3854 6.6146 19.9265 6.32698 19.362C6 18.7202 6 17.8802 6 16.2V6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $categorys->links() }}
    </div>
</div>

@endsection
