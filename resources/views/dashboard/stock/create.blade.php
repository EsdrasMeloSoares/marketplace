@extends('layouts.admin')

@section('content')
@if(session('success') || $errors->any())
    <div class="p-4 rounded-lg mb-4 shadow-md {{ session('success') ? 'bg-green-500 text-white' : 'bg-red-800 text-white' }}">
        {{ session('success') ?? $errors->first() }}
    </div>
@endif

<div class="flex justify-center items-center">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-2xl">
        <form class="w-full" method="POST" action="{{ route('dashboard.stock.store') }}" enctype="multipart/form-data">
            @csrf
            
            <!-- Nome do Produto e Categoria -->
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="product_name">
                        Nome do Produto
                    </label>
                    <input class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-600" id="product_name" name="product_name" type="text" placeholder="Camisa Lacoste">
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="categories">
                        Categoria
                    </label>
                    <select name="categories" class="block appearance-none w-full bg-gray-700 border border-gray-600 text-white py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-gray-600" id="categories">
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ strtoupper($categorie->name) }}</option>
                        @endforeach
                    </select>
                    <p class="text-blue-600 text-xs italic mt-2"><a href="#">Criar nova categoria</a></p>
                </div>
            </div>

            <!-- Preço e Estoque -->
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="price">
                        Preço
                    </label>
                    <input name="price" class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-600" id="price" type="text" oninput="formatCurrency(this)" />
                    
                    
                </div>

                <script>
                    function formatCurrency(input) {
                        let value = input.value;
                
                        // Remove caracteres não numéricos (exceto ponto)
                        value = value.replace(/\D/g, '');
                
                        // Adiciona separador de milhar (ponto) e ponto como separador decimal
                        if (value.length > 2) {
                            // Coloca o ponto antes dos dois últimos dígitos
                            value = value.replace(/(\d)(\d{2})$/, '$1.$2');
                        }
                
                        if (value.length > 6) {
                            // Coloca o ponto a cada 3 dígitos antes do ponto decimal
                            value = value.replace(/(\d)(\d{3})(\d{3})$/, '$1.$2.$3');
                        }
                
                        if (value.length > 9) {
                            value = value.replace(/(\d)(\d{3})(\d{3})(\d{3})$/, '$1.$2.$3.$4');
                        }
                
                        // Atualiza o valor do input
                        input.value = value;
                    }
                </script>
                
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="stock">
                        Estoque
                    </label>
                    <div class="flex items-center">
                        <button type="button" class="bg-red-600 hover:bg-red-700 text-white py-3 px-4 rounded-l" id="decrease-btn">-</button>
                        <input type="number" id="stock-input" name="stock" value="0" class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-600" min="0">
                        <button type="button" class="bg-green-600 hover:bg-green-700 text-white py-3 px-4 rounded-r" id="increase-btn">+</button>
                    </div>
                </div>
            </div>

            <!-- Tamanhos -->
            <div class="mb-6">
                <span class="block uppercase tracking-wide text-white text-xs font-bold mb-2">Tamanhos</span>
                <div>
                    <label class="inline-flex items-center text-white">
                        <input type="checkbox" name="checkboxes[]" value="PP" class="hidden peer">
                        <span class="peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2 w-20 h-12 flex items-center justify-center bg-gray-700 text-gray-300 border-2 border-gray-600 rounded cursor-pointer">PP</span>
                    </label>
                    <label class="inline-flex items-center text-white">
                        <input type="checkbox" name="checkboxes[]" value="P" class="hidden peer">
                        <span class="peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2 w-20 h-12 flex items-center justify-center bg-gray-700 text-gray-300 border-2 border-gray-600 rounded cursor-pointer">P</span>
                    </label>
                    <label class="inline-flex items-center text-white">
                        <input type="checkbox" name="checkboxes[]" value="M" class="hidden peer">
                        <span class="peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2 w-20 h-12 flex items-center justify-center bg-gray-700 text-gray-300 border-2 border-gray-600 rounded cursor-pointer">M</span>
                    </label>
                    <label class="inline-flex items-center text-white">
                        <input type="checkbox" name="checkboxes[]" value="G" class="hidden peer">
                        <span class="peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2 w-20 h-12 flex items-center justify-center bg-gray-700 text-gray-300 border-2 border-gray-600 rounded cursor-pointer">G</span>
                    </label>
                    <label class="inline-flex items-center text-white">
                        <input type="checkbox" name="checkboxes[]" value="GG" class="hidden peer">
                        <span class="peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2 w-20 h-12 flex items-center justify-center bg-gray-700 text-gray-300 border-2 border-gray-600 rounded cursor-pointer">GG</span>
                    </label>
                    <label class="inline-flex items-center text-white">
                        <input type="checkbox" name="checkboxes[]" value="XGG" class="hidden peer">
                        <span class="peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2 w-20 h-12 flex items-center justify-center bg-gray-700 text-gray-300 border-2 border-gray-600 rounded cursor-pointer">XGG</span>
                    </label>
                </div>
            </div>

            

            <!-- Comentário -->
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="comment">
                        Descrição
                    </label>
                    <textarea class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-600" id="comment" name="comment" placeholder="Escreva seu comentário aqui..."></textarea>
                </div>
            </div>

            <!-- Botão de Envio -->
            <div class="flex justify-center mt-6">
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Registrar Produto
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('increase-btn').addEventListener('click', () => {
        let stockInput = document.getElementById('stock-input');
        stockInput.value = parseInt(stockInput.value) + 1;
    });

    document.getElementById('decrease-btn').addEventListener('click', () => {
        let stockInput = document.getElementById('stock-input');
        if (parseInt(stockInput.value) > 0) {
            stockInput.value = parseInt(stockInput.value) - 1;
        }
    });
</script>

@endsection
