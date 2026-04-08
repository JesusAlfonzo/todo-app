<x-layout>

    @push('styles')
        <style>
            body {
                background-color: rgb(13, 13, 13);
            }
        </style>
    @endpush

    <div class="min-h-[calc(100vh-280px)] flex items-center justify-center pt-12 pb-24 px-4">
        
        <div class="bg-[#1e1e1e] rounded-xl shadow-lg border border-gray-800 overflow-hidden">
            
            <div class="bg-[#2a2a2a] px-8 py-6 border-b border-gray-800 flex items-center gap-4">
                <div class="w-16 h-16 rounded-full bg-blue-500/20 flex items-center justify-center border border-blue-500/30">
                    <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-white">Mi Perfil</h1>
                    <p class="text-gray-400 text-sm">Gestiona tu información personal y cuenta</p>
                </div>
            </div>

            <div class="p-8 space-y-8">
                
                <div>
                    <h2 class="text-lg font-semibold text-white mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Información del Usuario
                    </h2>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 bg-[#252525] p-6 rounded-lg border border-gray-700/50">
                        <div>
                            <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Nombre</span>
                            <span class="block text-lg font-medium text-gray-200">{{ $user->first_name }}</span>
                        </div>
                        
                        <div>
                            <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Apellido</span>
                            <span class="block text-lg font-medium text-gray-200">{{ $user->last_name }}</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="bg-[#252525] px-8 py-5 border-t border-gray-800 flex flex-col sm:flex-row justify-between items-center gap-4">
                
                <a href="/profile/{{ $user->id }}/edit" class="w-full sm:w-auto px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm font-medium transition-all shadow-[0_0_10px_rgba(37,99,235,0.2)] hover:shadow-[0_0_15px_rgba(37,99,235,0.4)] flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    Editar Información
                </a>

                <form action="{{ route('profile.destroy', $user) }}" method="GET" class="w-full sm:w-auto m-0" onsubmit="return confirm('¡ADVERTENCIA! ¿Estás totalmente seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.');">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="w-full sm:w-auto px-6 py-2.5 bg-transparent border border-red-500/50 hover:bg-red-500 hover:text-white text-red-500 rounded-lg text-sm font-medium transition-colors flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        Eliminar Cuenta
                    </button>
                </form>

            </div>

        </div>
    </div>

</x-layout>