<x-app-layout>
    <div class="flex">
        <form class="mx-auto" action="{{ route('ejemplares.store') }}" method="POST">
            @csrf
            <x-input-label>ISBN</x-input-label>
            <input type="text" name="isbn" id="isbn" class="form-control" required>
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
    </div>
</x-app-layout>
