<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

@livewireStyles

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>

<div class="relative h-screen overflow-hidden bg-indigo-900">
    <img src="storage/image/caracas.jpg" class="absolute object-cover w-full h-full"/>
    <div class="absolute inset-0 bg-black opacity-25">
    </div>
    <header class="absolute top-0 left-0 right-0 z-20">
        <nav class="container px-6 py-4 mx-auto md:px-12">
            <div class="items-center justify-center md:flex">
                <div class="flex items-center justify-between">
                    <div class="md:hidden">
                        <button class="text-white focus:outline-none">
                            <svg class="w-12 h-12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                @if (Route::has('login'))
                <div class="items-center hidden md:flex">
                 @auth
                <a href="{{ route('profile.show') }}" class="mx-3 text-lg text-white uppercase cursor-pointer hover:text-gray-300">Mi Perfil</a>

                 @else
                <a href="{{ route('login') }}" class="mx-3 text-lg text-white uppercase cursor-pointer hover:text-gray-300">Iniciar Sesion</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="mx-3 text-lg text-white uppercase cursor-pointer hover:text-gray-300">Registrarse</a>
                @endif

                </div>
                @endauth
                @endif
            </div>
        </nav>
    </header>
    <div class="container relative z-10 flex items-center px-6 py-32 mx-auto md:px-12 xl:py-40">
        <div class="relative z-10 flex flex-col items-center w-full">
            <h1 class="mt-4 font-extrabold leading-tight text-center text-white text-7xl sm:text-8xl">
                CRUD DE PRODUCTOS
            </h1>
            <a href="{{route('productos.index')}}" class="block px-4 py-3 mt-10 text-lg font-bold text-white uppercase bg-gray-800 hover:bg-gray-900">
                Iniciar
            </a>
        </div>
    </div>
</div>
