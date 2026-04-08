<x-layout>
    @push('styles')
        <style>
            body {
                /* El navegador buscará en: tu-sitio.com/images/blur-background.jpg */
                /* background-image:
                    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5)),
                    url('/images/blur-background.jpg');
                background-size: cover; */
                    background-color: rgb(13, 13, 13);

            }
        </style>
    @endpush

    <div class="flex items-center justify-center min-h-[calc(100vh-178px)]">

        <div class="text-center max-w-2xl px-6">

            <h1 class="text-9xl font-bold text-white mb-6">
                Box
            </h1>

            <p class="text-gray-300 text-lg mb-8">
                Guarda tus ideas, estructura tus proyectos y nunca vuelvas a olvidar un
                detalle importante. Empieza a organizar tu vida digital hoy mismo.
            </p>

            <div class="flex justify-center gap-4">
                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                    <a href="{{ route('register') }}">Empezar ahora</a>
                </button>
                <button
                    class="bg-transparent border border-white text-white hover:bg-white hover:text-gray-900 font-semibold py-3 px-6 rounded-lg transition-colors">
                    <a href="">Saber más</a>
                </button>
            </div>

        </div>

    </div>

</x-layout>
