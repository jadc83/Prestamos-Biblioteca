<x-app-layout>
    <div class="flex flex-col mx-auto p-4">
        <ul class="space-y-4">
            @foreach ($libros as $libro)
                <li class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold text-blue-600">{{ $libro->titulo }}</h2>
                    <p class="text-gray-500">{{ $libro->autor }}</p>

                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-gray-800">Ejemplares</h3>
                        <ul class="space-y-2 mt-2">
                            @foreach ($libro->ejemplares as $ejemplar)
                                <li class="bg-gray-50 p-4 rounded-lg shadow-sm">
                                    <p class="text-sm text-gray-600">ISBN: {{ $ejemplar->isbn }}</p>
                                    <p class="text-sm text-gray-600">{{ $ejemplar->libro->titulo }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="flex text-white w-1/12">
        <form class="mx-auto" action="{{ route('libros.create') }}" method="GET">
            @csrf
            <button class="bg-blue-600 rounded-xl p-4" type="submit">Nuevo libro</button>
        </form>
    </div>

</x-app-layout>
