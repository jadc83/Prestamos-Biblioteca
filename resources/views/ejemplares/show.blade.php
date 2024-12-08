<x-app-layout>
    <div class="p-6 bg-white shadow-md sm:rounded-lg">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Detalle del Ejemplar</h2>
        <div class="bg-gray-100 p-6 rounded-lg shadow">
            <p class="text-lg text-gray-800">
                <strong class="font-semibold">Título del Libro:</strong>
                <div>{{ $ejemplar->libro->titulo }}</div>
            </p>
            <p class="text-lg text-gray-800 mt-2">
                <strong class="font-semibold">Autor del Libro:</strong>
                <div>{{ $ejemplar->libro->autor }}</div>
            </p>
        </div>
        <div class="mt-8">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Historial de Préstamos</h3>
            @foreach ($ejemplar->prestamos as $prestamo)
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mb-4 shadow-sm">
                    <p class="text-gray-700">
                        <strong class="font-semibold">Socio:</strong>
                        {{ substr($prestamo->socio->codigo, 0, 6) }} /
                        {{ $prestamo->socio->nombre }} {{ $prestamo->socio->apellidos }} /
                        {{ $prestamo->socio->telefono }}
                    </p>
                    <div class="mt-2 text-sm text-gray-600 reverse">
                        <p><strong>ISBN:</strong>
                            @if($prestamo->ejemplares()->first())
                                {{ $prestamo->ejemplares()->first()->isbn }}
                                {{ $prestamo->ejemplares()->first()->libro->titulo }}

                            @else
                                No hay ejemplar disponible.
                            @endif
                        </p>
                        <p><strong>Fecha de inicio:</strong> {{ $prestamo->inicio_prestamo }}</p>
                        <p><strong>Fecha de devolución:</strong> {{ $prestamo->fin_prestamo }}</p>
                        <p>
                            <strong>Estado:</strong>
                            @if ($prestamo->devuelto != null)
                                <div class="text-green-600 font-semibold">Devuelto</div>
                            @else
                                <div class="text-red-600 font-semibold">Pendiente</div>
                            @endif
                        </p>
                        <form action="{{route('prestamos.devolver', $prestamo)}}" method="post">
                            @csrf
                            <button type="submit">Devolver</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-6">
            <a href="{{ route('ejemplares.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                Volver al Listado
            </a>
        </div>
    </div>
</x-app-layout>
