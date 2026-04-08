<x-layout>

    @push('styles')
        <style>
            body {
                background-color: rgb(13, 13, 13);
            }
        </style>
    @endpush

    <div class="min-h-screen p-4 md:p-8">
        
        {{-- VISTA PARA USUARIOS NO AUTENTICADOS --}}
        @guest
            <div class="flex items-center justify-center h-[80vh]">
                <div class="bg-[#1e1e1e] p-8 rounded-xl shadow-lg border border-gray-800 text-center max-w-md w-full">
                    <svg class="w-16 h-16 text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    <h2 class="text-2xl font-bold text-white mb-2">Acceso Denegado</h2>
                    <p class="text-gray-400 mb-6">Hola, si lees esto es que no estás autenticado. Por favor, inicia sesión para ver tus tareas.</p>
                    <a href="{{ route('login') }}" class="inline-block w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg transition-colors">
                        Ir a Iniciar Sesión
                    </a>
                </div>
            </div>
        @endguest

        {{-- VISTA PARA USUARIOS AUTENTICADOS --}}
        @auth
            <div class="max-w-6xl mx-auto space-y-8">
                
                <div class="bg-[#1e1e1e] p-6 rounded-xl shadow-sm border border-gray-800 flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-white">Bienvenido, {{ $user->first_name }} {{ $user->last_name }} 😸</h1>
                        <p class="text-gray-400 text-sm mt-1">Gestiona tus tareas y tu cuenta desde aquí.</p>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <a href="{{ route('profile.index') }}" class="px-4 py-2 bg-[#2a2a2a] hover:bg-gray-700 text-white text-sm font-medium rounded-lg transition-colors border border-gray-700">
                            Perfil del usuario
                        </a>

                        <form action="{{ route('login.destroy') }}" method="POST" class="m-0">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-red-500/10 hover:bg-red-500/20 text-red-500 text-sm font-medium rounded-lg transition-colors border border-red-500/20">
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                </div>

                <div class="bg-[#1e1e1e] rounded-xl shadow-sm border border-gray-800 overflow-hidden">
                    
                    <div class="p-6 border-b border-gray-800 flex justify-between items-center">
                        <h2 class="text-xl font-semibold text-white">Mis Tareas</h2>
                        <a href="{{ route('task.create') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-all shadow-[0_0_10px_rgba(37,99,235,0.2)] hover:shadow-[0_0_15px_rgba(37,99,235,0.4)] flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            Crear una tarea
                        </a>
                    </div>

                    <ul class="divide-y divide-gray-800 m-0 p-0">
                        @forelse ($Tasks as $task)
                            <li class="p-4 hover:bg-[#252525] transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4 group">
                                
                                <div class="text-white font-medium text-lg w-full sm:w-auto truncate pr-4">
                                    {{ $task->title }}
                                </div>
                                
                                <div class="flex items-center gap-2 flex-shrink-0 w-full sm:w-auto justify-end">
                                    
                                    <a href="/task/{{ $task->id }}/show" class="px-3 py-1.5 bg-emerald-500/10 hover:bg-emerald-500/20 text-emerald-500 rounded text-xs font-medium transition-colors border border-emerald-500/20">
                                        Ver
                                    </a>
                                    
                                    <a href="/task/{{ $task->id }}/edit" class="px-3 py-1.5 bg-amber-500/10 hover:bg-amber-500/20 text-amber-500 rounded text-xs font-medium transition-colors border border-amber-500/20">
                                        Editar
                                    </a>

                                    <form action="{{ route('task.destroy', $task) }}" method="GET" class="m-0 inline-block" onsubmit="return confirm('¿Estás seguro de eliminar esta tarea?');">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="px-3 py-1.5 bg-red-500/10 hover:bg-red-500/20 text-red-500 rounded text-xs font-medium transition-colors border border-red-500/20">
                                            Eliminar
                                        </button>
                                    </form>

                                </div>
                            </li>
                        @empty
                            <li class="p-8 text-center text-gray-500">
                                No tienes tareas creadas aún. ¡Empieza creando una!
                            </li>
                        @endforelse
                    </ul>

                </div>

            </div>
        @endauth

    </div>
</x-layout>