<x-layout>

    @push('styles')
        <style>
            body {
                background-color: rgb(13, 13, 13);
            }
        </style>
    @endpush

    <div class="min-h-[calc(100vh-280px)] flex items-center justify-center py-12 p-4">
        
        <div class="bg-[#1e1e1e] p-8 rounded-xl shadow-lg w-full max-w-dvh border border-gray-800">
            
            <div class="mb-8 text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-amber-500/10 mb-4">
                    <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-white">Editar Tarea</h1>  
                <p class="text-gray-400 text-sm mt-2">Modifica los detalles de tu tarea</p>
            </div>

            <form action="/task/{{ $task->id }}" method="POST" class="space-y-6">
                @method('PUT')
                @csrf
                
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-300 mb-2">Título de la tarea</label>
                    <input 
                        name="title" 
                        id="title" 
                        type="text" 
                        value="{{ old('title', $task->title) }}"
                        class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-2.5 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors"
                        placeholder="Ej: Terminar reporte mensual"
                    >
                    @error('title')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-300 mb-2">Contenido o detalles</label>
                    <textarea 
                        name="content" 
                        id="content" 
                        rows="6"
                        class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-2.5 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-colors resize-none"
                        placeholder="Describe los pasos, notas o requerimientos..."
                    >{{ old('content', $task->content) }}</textarea>
                    @error('content')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-2">
                    <a href="{{ route('home.index') }}" class="w-full sm:w-1/3 text-center px-4 py-2.5 bg-[#2a2a2a] hover:bg-gray-700 border border-gray-700 text-white font-medium rounded-lg transition-colors">
                        Cancelar
                    </a>
                    
                    <button 
                        type="submit" 
                        class="w-full sm:w-2/3 bg-amber-600 hover:bg-amber-700 text-white font-medium py-2.5 px-4 rounded-lg transition-all duration-300 ease-in-out hover:shadow-[0_0_15px_rgba(217,119,6,0.4)]"
                    >
                        Guardar Cambios
                    </button>
                </div>
            </form>

        </div>
    </div>

</x-layout>