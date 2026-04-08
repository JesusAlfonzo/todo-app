<x-layout>

    @push('styles')
        <style>
            body {
                background-color: rgb(13, 13, 13);
            }
        </style>
    @endpush

    <div class="min-h-[calc(100vh-178px)] flex items-center justify-center p-4">
        
        <div class="bg-[#1e1e1e] p-8 rounded-xl shadow-lg w-full max-w-md border border-gray-800">
            
            <div class="mb-8 text-center">
                <h1 class="text-3xl font-bold text-white">Iniciar Sesión</h1>  
                <p class="text-gray-400 text-sm mt-2">Ingresa tus credenciales para continuar</p>
            </div>

            <form action="{{ route('login.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Correo Electrónico</label>
                    <input 
                        name="email" 
                        id="email" 
                        type="email" 
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

                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        id="remember" 
                        name="remember" 
                        value="yes" 
                        class="w-4 h-4 rounded bg-[#2a2a2a] border-gray-700 text-blue-600 focus:ring-blue-500 focus:ring-offset-[#1e1e1e]"
                    >
                    <label for="remember" class="ml-2 text-sm text-gray-300 select-none cursor-pointer">
                        Recordarme
                    </label>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg transition-all duration-300 ease-in-out hover:shadow-[0_0_15px_rgba(37,99,235,0.4)]"
                >
                    Entrar a mi cuenta
                </button>
            </form>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-400">
                    Si no estás registrado, 
                    <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-400 hover:underline transition-colors font-medium">
                        haz clic aquí
                    </a>
                </p>
            </div>
        </div>
    </div>

</x-layout>