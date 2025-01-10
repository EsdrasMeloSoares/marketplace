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
                            alt="Produto" 
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <p class="mt-2 text-center text-sm font-semibold text-gray-800">{{ $categoria->name }}</p>
                </div>
                @endforeach

                
            </div>
        </div>
      </div>
      
      <!-- Estilos para rolagem customizada -->
      <style>
        /* Barra de rolagem fina, visível e com cor personalizada */
        .scrollbar-thin {
            scrollbar-width: thin;
        }
      
        .scrollbar-thumb-gray-500::-webkit-scrollbar-thumb {
            background-color: #6b7280; /* cor de fundo do thumb */
            border-radius: 10px;
        }
      
        .scrollbar-track-gray-300::-webkit-scrollbar-track {
            background: #d1d5db; /* cor do fundo da track */
            border-radius: 10px;
        }
      
        .scrollbar-thin::-webkit-scrollbar {
            width: 8px;
        }
      
        .scrollbar-thin::-webkit-scrollbar-track {
            background: #f3f4f6; /* cor de fundo da track */
        }
      
        .scrollbar-thin::-webkit-scrollbar-thumb {
            background-color: #6b7280;
            border-radius: 10px;
        }
      
        .scrollbar-hidden::-webkit-scrollbar {
              display: none;
          }
      
          /* Para o Firefox */
          .scrollbar-hidden {
              scrollbar-width: none; /* Esconde a barra de rolagem */
          }
      
          /* Para a área de rolagem (permite rolagem, mas sem barra visível) */
          .scrollbar-hidden {
              overflow: auto;
          }
      </style>
    
</div>
@endsection