<header class="w-full">
    <div class="flex flex-col md:flex-row justify-between items-center p-4 md:p-8 lg:px-36 gap-4">

        <div class="bg-white border-0 rounded-md text-[#1e1e1e] text-center shadow-sm overflow-hidden flex w-full md:w-auto">
            <nav class="w-full">
                <ul class="flex m-0 p-0 h-full w-full justify-center md:justify-start">
                    
                    <li class="flex flex-1 md:flex-none">
                        {{-- LÓGICA DINÁMICA PARA EL ENLACE DE INICIO --}}
                        @auth
                            <a href="{{ route('home.index') }}"
                                class="flex-1 flex justify-center items-center w-full px-4 py-3 md:px-6 md:py-4 font-medium transition-all duration-300 ease-in-out hover:bg-blue-600 hover:text-white text-sm md:text-base">
                                Inicio
                            </a>
                        @else
                            <a href="/"
                                class="flex-1 flex justify-center items-center w-full px-4 py-3 md:px-6 md:py-4 font-medium transition-all duration-300 ease-in-out hover:bg-blue-600 hover:text-white text-sm md:text-base">
                                Inicio
                            </a>
                        @endauth
                    </li>
                    
                    {{-- LA DIRECTIVA AHORA ENVUELVE TODO EL <li> --}}
                    @guest
                        <li class="flex flex-1 md:flex-none border-l border-gray-100 md:border-none">
                            <a href="https://github.com/jesusAlfonzo/todo-app" target="_blank" rel="noopener noreferrer"
                                class="flex-1 flex justify-center items-center w-full px-4 py-3 md:px-6 md:py-4 font-medium transition-all duration-300 ease-in-out hover:bg-blue-600 hover:text-white text-sm md:text-base">
                                GitHub
                            </a>
                        </li>
                    @endguest
                    
                </ul>
            </nav>
        </div>

        <div class="bg-white border-0 rounded-md text-[#1e1e1e] text-center shadow-sm overflow-hidden flex w-full md:w-auto">
            <nav class="w-full">
                <ul class="flex m-0 p-0 h-full w-full justify-center md:justify-end">

                    {{-- VISIBLE SOLO PARA USUARIOS NO AUTENTICADOS --}}
                    @guest
                        <li class="flex flex-1 md:flex-none">
                            <a href="{{ route('login') }}"
                                class="flex-1 flex justify-center items-center w-full px-4 py-3 md:px-6 md:py-4 font-medium transition-all duration-300 ease-in-out hover:bg-blue-600 hover:text-white text-sm md:text-base">
                                Iniciar Sesion
                            </a>
                        </li>
                        <li class="flex flex-1 md:flex-none border-l border-gray-100 md:border-none">
                            <a href="{{ route('register') }}"
                                class="flex-1 flex justify-center items-center w-full px-4 py-3 md:px-6 md:py-4 font-medium transition-all duration-300 ease-in-out hover:bg-blue-600 hover:text-white text-sm md:text-base">
                                Registrarse
                            </a>
                        </li>
                    @endguest

                    {{-- VISIBLE SOLO PARA USUARIOS AUTENTICADOS --}}
                    @auth
                        <li class="flex flex-1 md:flex-none">
                            <a href="{{ route('profile.index') }}"
                                class="flex-1 flex justify-center items-center w-full px-4 py-3 md:px-6 md:py-4 font-medium transition-all duration-300 ease-in-out hover:bg-blue-600 hover:text-white text-sm md:text-base">
                                Mi Perfil
                            </a>
                        </li>
                        <li class="flex flex-1 md:flex-none border-l border-gray-100 md:border-none">
                            <form action="{{ route('login.destroy') }}" method="POST" class="flex m-0 h-full w-full">
                                @csrf
                                <button type="submit"
                                    class="flex-1 w-full flex justify-center items-center px-4 py-3 md:px-6 md:py-4 font-medium transition-all duration-300 ease-in-out hover:bg-red-600 hover:text-white cursor-pointer text-sm md:text-base">
                                    Cerrar Sesión
                                </button>
                            </form>
                        </li>
                    @endauth

                </ul>
            </nav>
        </div>
        
    </div>
</header>