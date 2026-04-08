<x-layout>

    @push('styles')
        <style>
            body {
                background-color: rgb(13, 13, 13);
            }
        </style>
    @endpush

    <div class="min-h-[calc(100vh-280px)] flex items-center justify-center">
        
        <div class="bg-[#1e1e1e] p-8 rounded-xl shadow-lg w-full max-w-dvh border border-gray-800">
            
            <div class="mb-8 text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-500/10 mb-4">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                </div>
                <h1 class="text-3xl font-bold text-white">Crear Nueva Tarea</h1>  
                <p class="text-gray-400 text-sm mt-2">Añade los detalles de lo que necesitas hacer</p>
            </div>

            <form action="{{ route('task.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-300 mb-2">Título de la tarea</label>
                    <input 
                        name="title" 
                        id="title" 
                        type="text" 
                        value="{{ old('title') }}"
                        class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
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
                        class="w-full bg-[#2a2a2a] text-white border border-gray-700 rounded-lg px-4 py-4 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors resize-none"
                        placeholder="Describe los pasos, notas o requerimientos..."
                    >{{ old('content') }}</textarea>
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
                        class="w-full sm:w-2/3 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg transition-all duration-300 ease-in-out hover:shadow-[0_0_15px_rgba(37,99,235,0.4)]"
                    >
                        Crear Tarea
                    </button>
                </div>
            </form>

        </div>
    </div>

</x-layout>