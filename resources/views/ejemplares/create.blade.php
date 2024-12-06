<x-app-layout>
    <form action="{{ route('ejemplares.store') }}" method="POST">
        @csrf
        <x-input-label>Ejemplar del libro: </x-input-label>
        <select name="libro_id">
            @foreach ($libros as $libro)
                <option value="{{ $libro->id }}" {{ old('libro_id') == $libro->id ? 'selected' : '' }}>
                    {{ $libro->titulo }}
                </option>
            @endforeach
        </select>
        <button type="submit">Enviar</button>
    </form>
</x-app-layout>
