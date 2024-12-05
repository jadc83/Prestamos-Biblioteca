<x-app-layout>
    <div class="p-4 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Detalle del Ejemplar</h2>

        <div class="mt-4">
            <p><strong>Título del Libro:</strong> {{ $ejemplar->libro->titulo }}</p>
            <p><strong>Autor del Libro:</strong> {{ $ejemplar->libro->autor }}</p>
        </div>

        <div class="mt-4">
            <h3>Préstamos:</h3>
            @foreach ($ejemplar->prestamos as $prestamo)
            <div class="inline">
                <p>{{$prestamo->socio->nombre}} {{$prestamo->socio->apellidos}}/  {{$prestamo->socio->codigo}} / {{$prestamo->socio->telefono}}</p>
            </div>

                <p>Fecha de inicio:  {{ $prestamo->inicio_prestamo }}</p>
                <p>Fecha de devolucion:  {{ $prestamo->fin_prestamo }}</p>
            @endforeach
        </div>

        <div class="mt-4">
            <a href="{{ route('ejemplares.index') }}" class="text-blue-500 underline">Volver al Listado</a>
        </div>
    </div>
</x-app-layout>
