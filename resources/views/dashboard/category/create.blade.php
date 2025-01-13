@extends('layouts.admin')

@section('content')
@include('components.flash-message')

<div class="bg-gray-800 p-4 mt-3 rounded-lg shadow-md col-span-1 md:col-span-2">
    <form class="w-full" method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
        @csrf   

        <div class="flex items-start gap-4 mb-12">
            <div id="image-wrapper" class="flex bg-gray-700 rounded-md w-[145px] p-4">
                <div class="image-container" id="input-container-1">
                    <label for="image-input-1" class="w-28 h-28 cursor-pointer flex flex-col items-center justify-center bg-gray-700 text-white border border-gray-600 rounded-full relative overflow-hidden">
                        <div id="preview-container-1" class="w-full h-full flex items-center justify-center">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-76.8 -76.8 665.60 665.60" xml:space="preserve" width="64px" height="64px" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path style="fill:#e3e3e3;" d="M512,0h-40v16h24v32h16V0z M432,0h-40v16h40V0z M352,0h-40v16h40V0z M272,0h-40v16h40V0z M192,0h-40 v16h40V0z M112,0H72v16h40V0z M32,0H0v16h32V0z M16,48H0v40h16V48z M16,128H0v40h16V128z M16,208H0v40h16V208z M16,288H0v40h16V288z M16,368H0v40h16V368z M16,448H0v40h16V448z M56,496H16v16h40V496z M136,496H96v16h40V496z M216,496h-40v16h40V496z M296,496h-40v16 h40V496z M376,496h-40v16h40V496z M456,496h-40v16h40V496z M512,488h-16v8l0,0v16h16V488z M512,408h-16v40h16V408z M512,328h-16v40 h16V328z M512,248h-16v40h16V248z M512,168h-16v40h16V168z M512,88h-16v40h16V88z"></path>
                                    <g>
                                        <rect x="244" y="175.976" style="fill:#e3e3e3;" width="24" height="160.08"></rect>
                                        <rect x="175.976" y="244" style="fill:#e3e3e3;" width="160.08" height="24"></rect>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <input id="image-input-1" name="image_1" class="hidden" type="file" accept="image/*" onchange="previewImage(event, 1)">
                    </label>
                </div>
            </div>
        </div>
        

            <div class="flex-1">
                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="name">
                    Adicione uma imagem ao criar categorias para exibição na página inicial.
                </label>
                <input class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-600" id="name" name="name" type="text" placeholder="Nome da Categoria">
                <button type="submit" class="w-full bg-blue-500 mt-1 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Registrar Categoria
                </button>
            </div>
        </div>
        <div class="flex justify-center mt-6">
            
        </div>
    </form>
</div>

<script>
    function previewImage(event, index) {
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const previewContainer = document.getElementById(`preview-container-${index}`);

            const imgElement = document.createElement("img");
            imgElement.src = e.target.result;
            imgElement.classList.add("w-full", "h-full", "object-cover");

            previewContainer.innerHTML = "";
            previewContainer.appendChild(imgElement);
        };

        reader.readAsDataURL(file);
    }
}

</script>
@endsection


