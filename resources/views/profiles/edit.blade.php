<x-layout>

    @push('styles')
        <style>
            body {
                background-color: rgb(13, 13, 13);
            }
        </style>
    @endpush

    <div class="min-h-[calc(100vh-280px)] py-12 flex items-center justify-center p-4">
        
        <div class="bg-[#1e1e1e] p-8 rounded-xl shadow-lg w-full max-w-lg border border-gray-800">
            
            <div class="mb-8 text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-500/10 mb-4">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-white">Editar Perfil</h1>  
                <p class="text-gray-400 text-sm mt-2">Actualiza tu información personal</p>
            </div>

            <form action="/profile/{{ $user->id }}" method="POST" class="space-y-6">
                @method('PUT')
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-300 mb-2">Nombre</label>
                        <input 
                            name="first_name" 
                            id="first_name" 
                            type="text" 
                            value="{{ old('first_name', $user->first_name) }}"
                            class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
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
                            value="{{ old('last_name', $user->last_name) }}"
                            class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                        >
                        @error('last_name')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    
                    <a href="{{ route('profile.index') }}" class="w-full sm:w-1/3 text-center px-4 py-2.5 bg-[#2a2a2a] hover:bg-gray-700 border border-gray-700 text-white font-medium rounded-lg transition-colors flex items-center justify-center">
                        Cancelar
                    </a>
                    
                    <button 
                        type="submit" 
                        class="w-full sm:w-2/3 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg transition-all duration-300 ease-in-out hover:shadow-[0_0_15px_rgba(37,99,235,0.4)] flex items-center justify-center gap-2"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Guardar Cambios
                    </button>
                    
                </div>
            </form>

        </div>
    </div>

</x-layout>