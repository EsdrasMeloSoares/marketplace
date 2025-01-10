<header class="bg-white shadow">
    <div class="container mx-auto px-2 flex items-center justify-between">
        <div class="flex items-center w-full space-x-4">
            <div class="flex items-center p-4">
                <a href="/">
                    
                    <img src="{{ asset('imgs/logo/logo-removed.png')}}" alt="Logo" class="w-20 h-16">
                </a>
            </div>
            <div class="flex-grow mx-2 w-full md:w-auto flex items-center">
                <input 
                    type="text" 
                    placeholder="Procure por produtos..." 
                    class="w-full px-3 py-1 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <div class="flex items-center space-x-4 mt-4 md:mt-0 hidden md:flex">
            <div class="text-center p-2">
                <button class="p-2 rounded-full hover:bg-gray-200">
                    <svg width="32px" height="32px" viewBox="-4.8 -4.8 33.60 33.60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="#000000" stroke-width="1.5"></path>
                        <path opacity="0.5" d="M8 12H8.009M11.991 12H12M15.991 12H16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                @if(Auth::check())
                <p class="text-sm">Dashboard</p>
            @else
                <p class="text-sm">Atendimento</p>
            @endif
            </div>

            <div class="text-center p-4">
                <button class="p-2 rounded-full hover:bg-gray-200">
                    <svg width="32px" height="32px" viewBox="-4.8 -4.8 33.60 33.60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3H3.26835C3.74213 3 3.97943 3 4.17267 3.08548C4.34304 3.16084 4.48871 3.28218 4.59375 3.43604C4.71269 3.61026 4.75564 3.8429 4.84137 4.30727L7.00004 16L17.4218 16C17.875 16 18.1023 16 18.29 15.9199C18.4559 15.8492 18.5989 15.7346 18.7051 15.5889C18.8252 15.4242 18.8761 15.2037 18.9777 14.7631L18.9785 14.76L20.5477 7.95996L20.5481 7.95854C20.7023 7.29016 20.7796 6.95515 20.6947 6.69238C20.6202 6.46182 20.4635 6.26634 20.2556 6.14192C20.0184 6 19.6758 6 18.9887 6H5.5M18 21C17.4477 21 17 20.5523 17 20C17 19.4477 17.4477 19 18 19C18.5523 19 19 19.4477 19 20C19 20.5523 18.5523 21 18 21ZM8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20C9 20.5523 8.55228 21 8 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <p class="text-sm">Carrinho</p>
            </div>

            <div class="text-center p-2">
                <button class="p-2 rounded-full hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="32px" height="32px" viewBox="-4.8 -4.8 33.60 33.60">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"></path>
                    </svg>
                </button>
            @if(Auth::check())
                <p class="text-sm">{{ Auth::user()->name }}</p>
            @else
                <p class="text-sm">Entrar</p>
            @endif
            </div>
        </div>

        <div class="flex md:hidden">
            <button class="p-2 rounded-full hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="32px" height="32px" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</header>