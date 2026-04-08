<x-layout>

    @push('styles')
        <style>
            body {
                background-color: rgb(13, 13, 13);
            }
        </style>
    @endpush

    <div class="min-h-[calc(100vh-178px)] flex items-center justify-center p-4">
        
        <div class="bg-[#1e1e1e] p-8 rounded-xl shadow-lg w-full max-w-lg border border-gray-800">
            
            <div class="mb-8 text-center">
                <h1 class="text-3xl font-bold text-white">Crear Cuenta</h1>  
                <p class="text-gray-400 text-sm mt-2">Completa tus datos para registrarte</p>
            </div>

            <form action="{{ route('register.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-300 mb-2">Nombre</label>
                        <input 
                            name="first_name" 
                            id="first_name" 
                            type="text" 
                            value="{{ old('first_name') }}"
                            class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                            placeholder="Tu nombre"
                        >
                        @error('first_name')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-300 mb-2">Apellido</label>
                        <input 
                            name="last_name" 
                            id="last_name" 
                            type="text" 
                            value="{{ old('last_name') }}"
                            class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                            placeholder="Tu apellido"
                        >
                        @error('last_name')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Correo Electrónico</label>
                    <input 
                        name="email" 
                        id="email" 
                        type="email" 
                        value="{{ old('email') }}"
                        class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                        placeholder="tu@correo.com"
                    >
                    @error('email')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Contraseña</label>
                    <input 
                        name="password" 
                        id="password" 
                        type="password" 
                        class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                        placeholder="••••••••"
                    >
                    @error('password')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">Confirme su Contraseña</label>
                    <input 
                        name="password_confirmation" 
                        id="password_confirmation" 
                        type="password" 
                        class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                        placeholder="••••••••"
                    >
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg transition-all duration-300 ease-in-out hover:shadow-[0_0_15px_rgba(37,99,235,0.4)] mt-2"
                >
                    Registrar
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-400">
                    ¿Ya tienes una cuenta? 
                    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-400 hover:underline transition-colors font-medium">
                        Inicia sesión aquí
                    </a>
                </p>
            </div>

        </div>
    </div>

</x-layout>