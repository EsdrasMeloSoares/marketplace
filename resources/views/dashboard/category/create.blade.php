@extends('layouts.admin')

@section('content')
@include('components.flash-message')

<div class="bg-gray-800 p-4 mt-3 rounded-lg shadow-md col-span-1 md:col-span-2">
    <div class="bg-gray-800 p-4 mt-3 rounded-lg col-span-1 md:col-span-2">
        <form class="w-full" method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
            @csrf     
            
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="name">
                        Categoria
                    </label>
                    <input class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-600" id="name" name="name" type="text">
                </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Registrar Produto
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
