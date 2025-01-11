@extends('layouts.app')

@section('content')
<div class="swiper-container w-full h-[450px]">

    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="{{ asset('imgs/carrossel/1.png')}}" alt="Imagem 1" class="w-full h-full object-cover" />
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    
    <!-- Categorias -->
    <div class="mt-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Categorias</h2>
            <div class="flex justify-center">
                <div class="flex space-x-8 overflow-x-auto scrollbar-thin scrollbar-thumb-gray-500 scrollbar-track-gray-300">

                
                @foreach ($categorias as $categoria)
                <div class="flex flex-col items-center">
                    <div class="w-28 h-28 bg-gray-200 rounded-full overflow-hidden shadow-lg">
                        <img 
                            src="./src/imgs/imagem-topo/babyDoll.jpg" 
                            alt="Categorias" 
                            class="w-full h-full object-cover"
                        />
                    </div>

                    <p class="mt-2 text-center text-sm font-semibold text-gray-800">{{ $categoria->name }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex justify-center px-4 sm:px-6 lg:px-8 py-12">
            <div class="w-full max-w-7xl p-6 bg-white rounded-lg shadow-2xl">
                <h1 class="text-3xl font-semibold text-center text-gray-800 mb-8">Destaques</h1>        
        
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        
                    <div class="relative bg-white rounded-lg overflow-hidden shadow-sm">
                        <img src="{{ asset('imgs/destaques/1.png') }}" alt="Roupas em Destaque" class="w-full object-cover h-[700px]"> 
                        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-gray-500 to-transparent p-4">
                            <h5 class="text-lg font-semibold text-white">
                            <p class="text-sm text-white mt-2">R$ 89,90</p>
                            <p class="text-sm text-white mt-2">Casaco de couro moderno e minimalista.</p>
                        </div>
                    </div>

                    <div class="relative bg-white rounded-lg overflow-hidden shadow-sm">
                        <img src="{{ asset('imgs/destaques/2.png') }}" alt="Roupas em Destaque" class="w-full object-cover h-[700px]"> 
                        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-gray-500 to-transparent p-4">
                            <h5 class="text-lg font-semibold text-white">
                            <p class="text-sm text-white mt-2">R$ 229,99</p>
                            <p class="text-sm text-white mt-2">Terno elegante de alta qualidade, ideal para ocasiões formais.</p>
                        </div>
                    </div>

                    <div class="relative bg-white rounded-lg overflow-hidden shadow-sm">
                        <img src="{{ asset('imgs/destaques/3.png') }}" alt="Roupas em Destaque" class="w-full object-cover h-[700px]"> 
                        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-gray-500 to-transparent p-4">
                            <h5 class="text-lg font-semibold text-white">
                            <p class="text-sm text-white mt-2">R$ 29,90</p>
                        <p class="text-sm text-white mt-2">Camisa de algodão confortável com um macacão jeans preto estiloso.</p>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
        
        
        
</div>
    
@endsection


<style>.scrollbar-thin{scrollbar-width:thin}.scrollbar-thumb-gray-500::-webkit-scrollbar-thumb{background-color:#6b7280;border-radius:10px}.scrollbar-track-gray-300::-webkit-scrollbar-track{background:#d1d5db;border-radius:10px}.scrollbar-thin::-webkit-scrollbar{width:8px}.scrollbar-thin::-webkit-scrollbar-track{background:#f3f4f6}.scrollbar-thin::-webkit-scrollbar-thumb{background-color:#6b7280;border-radius:10px}.scrollbar-hidden::-webkit-scrollbar{display:none}.scrollbar-hidden{scrollbar-width:none;overflow:auto}</style>