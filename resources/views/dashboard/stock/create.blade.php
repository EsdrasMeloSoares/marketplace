@extends('layouts.admin')

@section('content')
@include('components.flash-message')

<div class="bg-gray-800 p-4 mt-3 rounded-lg shadow-md col-span-1 md:col-span-2">
    <div class="bg-gray-800 p-4 mt-3 rounded-lg shadow-md col-span-1 md:col-span-2">
        <form class="w-full" method="POST" action="{{ route('stock.store') }}" enctype="multipart/form-data">
            @csrf    

            <div id="image-wrapper" class="flex mb-6 bg-gray-700 rounded-md w-full p-4 space-x-4">
    <div class="image-container w-1/5 px-2 mb-6" id="input-container-1">
        <label for="image-input-1" class="w-full border-dashed cursor-pointer h-40 flex flex-col items-center justify-center bg-gray-700 text-white border border-gray-600 rounded-lg relative overflow-hidden">
            <div id="preview-container-1" class="w-full h-full flex items-center justify-center">
                <svg id="image-svg-1" width="64px" height="64px" viewBox="-3.6 -3.6 31.20 31.20" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff" stroke-width="0.00024000000000000003">
                   <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect x="0" fill="none" width="24" height="24"></rect>
                                    <g>
                                        <path d="M23 4v2h-3v3h-2V6h-3V4h3V1h2v3h3zm-8.5 7c.828 0 1.5-.672 1.5-1.5S15.328 8 14.5 8 13 8.672 13 9.5s.672 1.5 1.5 1.5zm3.5 3.234l-.513-.57c-.794-.885-2.18-.885-2.976 0l-.655.73L9 9l-3 3.333V6h7V4H6c-1.105 0-2 .895-2 2v12c0 1.105.895 2 2 2h12c1.105 0 2-.895 2-2v-7h-2v3.234z"></path>
                                    </g>
                                </g>
                </svg>
                <span id="image-text-1" class="text-sm mt-2">Adicionar Imagem</span>
            </div>
            <input id="image-input-1" name="image_1" class="hidden" type="file" accept="image/*" onchange="previewImage(event, 1)">
        </label>
    </div>
    
    <!-- Input 2 initially hidden -->
    <div class="image-container w-1/5 px-2 mb-6 hidden" id="input-container-2">
        <label for="image-input-2" class="w-full border-dashed cursor-pointer h-40 flex flex-col items-center justify-center bg-gray-700 text-white border border-gray-600 rounded-lg relative overflow-hidden">
            <div id="preview-container-2" class="w-full h-full flex items-center justify-center">
                <svg id="image-svg-2" width="64px" height="64px" viewBox="-3.6 -3.6 31.20 31.20" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff" stroke-width="0.00024000000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect x="0" fill="none" width="24" height="24"></rect>
                                    <g>
                                        <path d="M23 4v2h-3v3h-2V6h-3V4h3V1h2v3h3zm-8.5 7c.828 0 1.5-.672 1.5-1.5S15.328 8 14.5 8 13 8.672 13 9.5s.672 1.5 1.5 1.5zm3.5 3.234l-.513-.57c-.794-.885-2.18-.885-2.976 0l-.655.73L9 9l-3 3.333V6h7V4H6c-1.105 0-2 .895-2 2v12c0 1.105.895 2 2 2h12c1.105 0 2-.895 2-2v-7h-2v3.234z"></path>
                                    </g>
                                </g>
                </svg>
                <span id="image-text-2" class="text-sm mt-2">Adicionar Imagem </span>
            </div>
            <input id="image-input-2" name="image_2" class="hidden" type="file" accept="image/*" onchange="previewImage(event, 2)">
        </label>
    </div>
    
    <!-- Input 3 initially hidden -->
    <div class="image-container w-1/5 px-2 mb-6 hidden" id="input-container-3">
        <label for="image-input-3" class="w-full border-dashed cursor-pointer h-40 flex flex-col items-center justify-center bg-gray-700 text-white border border-gray-600 rounded-lg relative overflow-hidden">
            <div id="preview-container-3" class="w-full h-full flex items-center justify-center">
                <svg id="image-svg-3" width="64px" height="64px" viewBox="-3.6 -3.6 31.20 31.20" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff" stroke-width="0.00024000000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect x="0" fill="none" width="24" height="24"></rect>
                                    <g>
                                        <path d="M23 4v2h-3v3h-2V6h-3V4h3V1h2v3h3zm-8.5 7c.828 0 1.5-.672 1.5-1.5S15.328 8 14.5 8 13 8.672 13 9.5s.672 1.5 1.5 1.5zm3.5 3.234l-.513-.57c-.794-.885-2.18-.885-2.976 0l-.655.73L9 9l-3 3.333V6h7V4H6c-1.105 0-2 .895-2 2v12c0 1.105.895 2 2 2h12c1.105 0 2-.895 2-2v-7h-2v3.234z"></path>
                                    </g>
                                </g>
                </svg>
                <span id="image-text-3" class="text-sm mt-2">Adicionar Imagem</span>
            </div>
            <input id="image-input-3" name="image_3" class="hidden" type="file" accept="image/*" onchange="previewImage(event, 3)">
        </label>
    </div>
    
    <!-- Input 4 initially hidden -->
    <div class="image-container w-1/5 px-2 mb-6 hidden" id="input-container-4">
        <label for="image-input-4" class="w-full border-dashed cursor-pointer h-40 flex flex-col items-center justify-center bg-gray-700 text-white border border-gray-600 rounded-lg relative overflow-hidden">
            <div id="preview-container-4" class="w-full h-full flex items-center justify-center">
                <svg id="image-svg-4" width="64px" height="64px" viewBox="-3.6 -3.6 31.20 31.20" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff" stroke-width="0.00024000000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect x="0" fill="none" width="24" height="24"></rect>
                                    <g>
                                        <path d="M23 4v2h-3v3h-2V6h-3V4h3V1h2v3h3zm-8.5 7c.828 0 1.5-.672 1.5-1.5S15.328 8 14.5 8 13 8.672 13 9.5s.672 1.5 1.5 1.5zm3.5 3.234l-.513-.57c-.794-.885-2.18-.885-2.976 0l-.655.73L9 9l-3 3.333V6h7V4H6c-1.105 0-2 .895-2 2v12c0 1.105.895 2 2 2h12c1.105 0 2-.895 2-2v-7h-2v3.234z"></path>
                                    </g>
                                </g>
                </svg>
                <span id="image-text-4" class="text-sm mt-2">Adicionar Imagem</span>
            </div>
            <input id="image-input-4" name="image_4" class="hidden" type="file" accept="image/*" onchange="previewImage(event, 4)">
        </label>
    </div>

    <!-- Input 5 initially hidden -->
    <div class="image-container w-1/5 px-2 mb-6 hidden" id="input-container-5">
        <label for="image-input-5" class="w-full border-dashed cursor-pointer h-40 flex flex-col items-center justify-center bg-gray-700 text-white border border-gray-600 rounded-lg relative overflow-hidden">
            <div id="preview-container-5" class="w-full h-full flex items-center justify-center">
                <svg id="image-svg-5" width="64px" height="64px" viewBox="-3.6 -3.6 31.20 31.20" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff" stroke-width="0.00024000000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect x="0" fill="none" width="24" height="24"></rect>
                                    <g>
                                        <path d="M23 4v2h-3v3h-2V6h-3V4h3V1h2v3h3zm-8.5 7c.828 0 1.5-.672 1.5-1.5S15.328 8 14.5 8 13 8.672 13 9.5s.672 1.5 1.5 1.5zm3.5 3.234l-.513-.57c-.794-.885-2.18-.885-2.976 0l-.655.73L9 9l-3 3.333V6h7V4H6c-1.105 0-2 .895-2 2v12c0 1.105.895 2 2 2h12c1.105 0 2-.895 2-2v-7h-2v3.234z"></path>
                                    </g>
                                </g>
                </svg>
                <span id="image-text-5" class="text-sm mt-2">Adicionar Imagem</span>
            </div>
            <input id="image-input-5" name="image_5" class="hidden" type="file" accept="image/*" onchange="previewImage(event, 5)">
        </label>
    </div>
</div>

<script>
    function previewImage(event, inputId) {
        const previewContainer = document.getElementById(`preview-container-${inputId}`);
        const imageSvg = document.getElementById(`image-svg-${inputId}`);
        const imageText = document.getElementById(`image-text-${inputId}`);
        const file = event.target.files[0];
        
        // Hide the current input's svg and text when an image is selected
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('object-cover', 'w-full', 'h-full', 'rounded-lg');
                previewContainer.innerHTML = '';
                previewContainer.appendChild(img);
                
                // Hide the SVG and text
                imageSvg.style.display = 'none';
                imageText.style.display = 'none';
                
                // Show the next input container
                const nextInputContainer = document.getElementById(`input-container-${inputId + 1}`);
                if (nextInputContainer) {
                    nextInputContainer.classList.remove('hidden');
                }
            }
            
            reader.readAsDataURL(file);
        }
    }
</script>

            




            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="product_name">
                        Nome do Produto
                    </label>
                    <input class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-600" id="product_name" name="product_name" type="text">
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="categories">
                        Categoria
                    </label>
                    <select name="categories" class="block appearance-none w-full bg-gray-700 border border-gray-600 text-white py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-gray-600" id="categories">
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
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
                
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="stock">
                        Estoque
                    </label>
                    <div class="flex items-center">
                        <button type="button" class="bg-red-600 hover:bg-red-700 text-white py-3 px-4 rounded-l" id="decrease-btn">-</button>
                        <input type="number" id="stock-input" name="stock" value="0" class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 py-3 px-4 leading-tight focus:outline-none focus:bg-gray-600" min="0">
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

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="comment">
                        Descrição
                    </label>
                    <textarea class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-600" id="comment" name="comment" placeholder="Descrição do seu Produto"></textarea>
                </div>
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
