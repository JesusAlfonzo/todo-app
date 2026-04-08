<x-layout>

    @push('styles')
        <style>
            body {
                background-color: rgb(13, 13, 13);
            }
        </style>
    @endpush

    <div class="min-h-[calc(100vh-280px)] flex items-center justify-center py-10 p-4">

        <div class="bg-[#1e1e1e] p-8 rounded-xl shadow-lg w-full max-w-2xl border border-gray-800 h-fit">

            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-8 pb-4 border-b border-gray-800 gap-4">
                <h1 class="text-2xl font-bold text-white flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Detalle de la tarea
                </h1>

                <a href="{{ route('home.index') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 text-sm bg-[#2a2a2a] px-4 py-2 rounded-lg border border-gray-700 hover:bg-gray-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Volver a mis tareas
                </a>
            </div>

            <div class="space-y-6">

                <div>
                    <h2 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Título de la tarea</h2>
                    <p class="text-xl font-medium text-white break-words">{{ $task->title }}</p>
                </div>

                <div class="w-full overflow-hidden">
                    <h2 class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Contenido / Detalles</h2>
                    
                    <div class="w-full bg-[#2a2a2a] p-5 rounded-lg border border-gray-700 text-gray-300 break-words min-h-[150px] leading-relaxed">
                        {!! nl2br(e($task->content)) !!}
                    </div>
                </div>

            </div> <div class="mt-8 pt-6 border-t border-gray-800 flex justify-end gap-3">
                <a href="/task/{{ $task->id }}/edit" class="px-4 py-2 bg-amber-500/10 hover:bg-amber-500/20 text-amber-500 rounded-lg text-sm font-medium transition-colors border border-amber-500/20 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Editar
                </a>

                <form action="{{ route('task.destroy', $task) }}" method="GET" class="m-0" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta tarea de forma permanente?');">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-red-500/10 hover:bg-red-500/20 text-red-500 rounded-lg text-sm font-medium transition-colors border border-red-500/20 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Eliminar
                    </button>
                </form>
            </div>

        </div> </div> </x-layout>