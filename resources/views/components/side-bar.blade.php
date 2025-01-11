<div class="w-64 bg-gray-800 p-5 fixed h-full top-0 left-0">
    <img src="{{ asset('imgs/logo/logo-removed.png') }}" class="w-12 h-12 mr-2 mb-4" alt="Logo">
    <ul>
        {{-- Categórias do Painel --}}
        <li class="mb-4"> 
            <span class="text-gray-400 uppercase text-sm">Painel</span>
            <ul class="ml-4 mt-2">
                <li class="mb-2 flex items-center hover:bg-gray-700 p-2 rounded-sm">
                    <a href="{{ route('dashboard.index') }}" class="text-gray-300 hover:text-white flex-grow">Início</a>
                    <svg fill="#000000" width="25px" height="25px" viewBox="-3.6 -3.6 31.20 31.20" id="dashboard" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="secondary" d="M22,4V7a2,2,0,0,1-2,2H15a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h5A2,2,0,0,1,22,4ZM9,15H4a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2H9a2,2,0,0,0,2-2V17A2,2,0,0,0,9,15Z" style="fill: #d4d4d4;"></path><path id="primary" d="M11,4v7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V4A2,2,0,0,1,4,2H9A2,2,0,0,1,11,4Zm9,7H15a2,2,0,0,0-2,2v7a2,2,0,0,0,2,2h5a2,2,0,0,0,2-2V13A2,2,0,0,0,20,11Z" style="fill: #ffffff;"></path></g></svg>
                </li>
            </ul>
        </li>
        <li class="mb-4">
            <span class="text-gray-400 uppercase text-sm">Produtos</span>
            <ul class="ml-4 mt-2">
                <li class="mb-2 flex items-center hover:bg-gray-700 p-2 rounded-sm">
                    <a href="{{ route('category') }}" class="text-gray-300 hover:text-white flex-grow">Categoria</a>
                    <svg width="28px" height="28px" viewBox="-3.6 -3.6 31.20 31.20" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;stroke:#dedede;stroke-miterlimit:10;stroke-width:0.9600000000000002;}</style></defs><path class="cls-1" d="M20.76,18.68H3.24A1.74,1.74,0,0,1,1.5,16.94h0a1.76,1.76,0,0,1,1-1.59L12,11.05l9.48,4.3a1.76,1.76,0,0,1,1,1.59h0A1.74,1.74,0,0,1,20.76,18.68Z"></path><path class="cls-1" d="M12,11.05v-.26a2.53,2.53,0,0,1,1.13-2,1.91,1.91,0,1,0-3-1.54"></path></g></svg>
                </li>
                <li class="mb-2 flex items-center hover:bg-gray-700 p-2 rounded-sm">
                    <a href="{{ route('stock') }}" class="text-gray-300 hover:text-white flex-grow">Estoque</a>
                    <svg width="28px" height="28px" viewBox="-3.6 -3.6 31.20 31.20" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.024"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.42229 20.6181C10.1779 21.5395 11.0557 22.0001 12 22.0001V12.0001L2.63802 7.07275C2.62423 7.09491 2.6107 7.11727 2.5974 7.13986C2 8.15436 2 9.41678 2 11.9416V12.0586C2 14.5834 2 15.8459 2.5974 16.8604C3.19479 17.8749 4.27063 18.4395 6.42229 19.5686L8.42229 20.6181Z" fill="#a3a3a3"></path> <path opacity="0.7" d="M17.5774 4.43152L15.5774 3.38197C13.8218 2.46066 12.944 2 11.9997 2C11.0554 2 10.1776 2.46066 8.42197 3.38197L6.42197 4.43152C4.31821 5.53552 3.24291 6.09982 2.6377 7.07264L11.9997 12L21.3617 7.07264C20.7564 6.09982 19.6811 5.53552 17.5774 4.43152Z" fill="#a3a3a3"></path> <path opacity="0.5" d="M21.4026 7.13986C21.3893 7.11727 21.3758 7.09491 21.362 7.07275L12 12.0001V22.0001C12.9443 22.0001 13.8221 21.5395 15.5777 20.6181L17.5777 19.5686C19.7294 18.4395 20.8052 17.8749 21.4026 16.8604C22 15.8459 22 14.5834 22 12.0586V11.9416C22 9.41678 22 8.15436 21.4026 7.13986Z" fill="#a3a3a3"></path> <path d="M6.32334 4.48382C6.35617 4.46658 6.38926 4.44922 6.42261 4.43172L7.91614 3.64795L17.0169 8.65338L21.0406 6.64152C21.1783 6.79745 21.298 6.96175 21.4029 7.13994C21.5525 7.39396 21.6646 7.66352 21.7487 7.96455L17.7503 9.96373V13.0002C17.7503 13.4144 17.4145 13.7502 17.0003 13.7502C16.5861 13.7502 16.2503 13.4144 16.2503 13.0002V10.7137L12.7503 12.4637V21.9042C12.4934 21.9682 12.2492 22.0002 12.0003 22.0002C11.7515 22.0002 11.5072 21.9682 11.2503 21.9042V12.4637L2.25195 7.96455C2.33601 7.66352 2.44813 7.39396 2.59771 7.13994C2.70264 6.96175 2.82232 6.79745 2.96001 6.64152L12.0003 11.1617L15.3865 9.46857L6.32334 4.48382Z" fill="#a3a3a3"></path> </g></svg>
                </li>
            </ul>
        </li>
    </ul>
</div>
