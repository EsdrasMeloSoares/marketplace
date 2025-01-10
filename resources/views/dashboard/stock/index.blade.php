@extends('layouts.admin')

@section('content')
@if(session('success') || $errors->any())
    <div id="alert-message" class="p-4 rounded-lg mb-4 shadow-md {{ session('success') ? 'bg-green-500 text-white' : 'bg-red-800 text-white' }}">
        {{ session('success') ?? $errors->first() }}
    </div>
@endif
<div class="bg-gray-800 p-4 rounded-lg shadow-md col-span-1 md:col-span-2">
    <a href="{{ route('dashboard.stock.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Adicionar Produto</a>
</div>

<div class="bg-gray-800 p-4 mt-3 rounded-lg shadow-md col-span-1 md:col-span-2">
    <table class="min-w-full bg-gray-800 text-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-700 text-left">#</th>
                <th class="py-2 px-4 border-b border-gray-700 text-left">Produto</th>
                <th class="py-2 px-4 border-b border-gray-700 text-left">Estoque</th>
                <th class="py-2 px-4 border-b border-gray-700 text-left">Categoria</th>
                <th class="py-2 px-4 border-b border-gray-700 text-left">Valor</th>
                <th class="py-2 px-4 border-b border-gray-700 text-left">Tamanhos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $produto)
            <tr class="hover:bg-gray-700">
                <td class="py-2 px-4 border-b border-gray-700">{{ $produto->id }}</td>
                <td class="py-2 px-4 border-b border-gray-700">{{ $produto->name }}</td>
                <td class="py-2 px-4 border-b border-gray-700">
                    <div class="flex items-center ">
                        <button class="bg-red-600 hover:bg-red-700 text-white py-1 px-2 rounded-l">-</button>
                        <span class="py-1 px-2 bg-gray-600">{{ $produto->stock }}</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white py-1 px-2 rounded-r">+</button>
                    </div>
                </td>
                <td class="py-2 px-4 border-b border-gray-700">{{ optional($produto->category)->name ? strtoupper($produto->category->name) : 'Categoria não encontrada' }}</td>


                <td class="py-2 px-4 border-b border-gray-700">R$ {{ number_format($produto->price, 2, ',', '.') }}</td>
                
                <!-- Aqui ajustamos os tamanhos para ficarem mais próximos -->
                <td class="py-2 px-4 border-b border-gray-700 flex flex-wrap space-x-1">
                    @foreach (json_decode($produto->tamanhos) as $tamanho)
                        <span class="bg-blue-700 text-white py-1 px-2 rounded">{{ $tamanho }}</span>
                    @endforeach
                </td>

                <td class="py-2 px-4 border-b border-gray-700 text-center">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded mr-2">Editar</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">Deletar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>

@endsection

<script>
    // Espera 5 segundos e então oculta a mensagem
    setTimeout(function() {
        const alertMessage = document.getElementById('alert-message');
        if (alertMessage) {
            alertMessage.classList.add('opacity-0'); // Adiciona a classe para desvanecer
            alertMessage.classList.add('transition-opacity'); // Adiciona a transição de opacidade

            // Remove o elemento do DOM após a animação
            setTimeout(function() {
                alertMessage.style.display = 'none';
            }, 500); // O tempo de espera é um pouco menor que a animação de desvanecimento
        }
    }, 5000);
</script>