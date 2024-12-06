<x-app-layout>
    <div class="p-6 bg-white dark:bg-gray-800 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-4">Lista de ejemplares</h2>

        <table class="min-w-full table-auto bg-gray-50 dark:bg-gray-700 rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-200 dark:bg-gray-600 text-gray-800 dark:text-white">
                    <th class="py-3 px-6 text-left">Título del Libro</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 dark:text-gray-200">
                @foreach ($ejemplares as $ejemplar)
                    <tr class="border-b border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <td class="py-3 px-6">
                            <a href="{{ route('ejemplares.show', $ejemplar) }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                                {{ $ejemplar->libro->titulo }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
