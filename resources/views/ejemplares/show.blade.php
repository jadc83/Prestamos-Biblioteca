<x-app-layout>
    <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Detalle del Ejemplar</h2>

        <div class="mt-6 bg-gray-100 p-4 rounded-lg shadow-md">
            <p class="text-lg font-medium text-gray-700 dark:text-gray-300">
                <strong>Título del Libro:</strong> {{ $ejemplar->libro->titulo }}
            </p>
            <p class="text-lg font-medium text-gray-700 dark:text-gray-300">
                <strong>Autor del Libro:</strong> {{ $ejemplar->libro->autor }}
            </p>
        </div>

        <div class="mt-6">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Préstamos:</h3>
            @foreach ($ejemplar->prestamos as $prestamo)
                <div class="mb-6 p-4 bg-gray-50 rounded-lg shadow-sm">
                    <p class="text-md text-gray-700 dark:text-gray-200">
                        <strong>Socio:</strong> {{ substr($prestamo->socio->codigo, 0, 6) }} /
                        {{ $prestamo->socio->nombre }} {{ $prestamo->socio->apellidos }} /
                        {{ $prestamo->socio->telefono }}
                    </p>
                    <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        <p><strong>Fecha de inicio:</strong> {{ $prestamo->inicio_prestamo }}</p>
                        <p><strong>Fecha de devolución:</strong> {{ $prestamo->fin_prestamo }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            <a href="{{ route('ejemplares.index') }}" class="text-blue-500 hover:underline">Volver al Listado</a>
        </div>
    </div>
</x-app-layout>
