<x-app-layout>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="p-6 bg-gray-200 h-full shadow-md rounded-lg">
        <table class="min-w-full table-auto bg-gray-50 dark:bg-gray-700 rounded-lg overflow-hidden">
            <thead>
                <tr class="text-gray-800">
                    <th class="py-3 px-6 text-left">Listado de ejemplares</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 dark:text-gray-200">
                @foreach ($ejemplares as $ejemplar)
                    <tr class="border-b border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <td class="py-3 px-6">
                            <a href="{{ route('ejemplares.show', $ejemplar) }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                                {{ $ejemplar->isbn }}
                                {{ $ejemplar->libro->titulo }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form class="mx-auto mt-2" action="{{ route('ejemplares.create') }}" method="GET">
            @csrf
            <button class="bg-blue-600 rounded-xl p-4 text-white" type="submit">Crear Ejemplar</button>
        </form>
    </div>
</x-app-layout>
