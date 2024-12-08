<x-app-layout>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="p-6 bg-gray-200 h-full shadow-md rounded-lg flex-col">
            @foreach ($top as $puesto)
            {{$puesto->prestamos_count}}
            @endforeach
        </div>

        <form class="mx-auto" action="{{ route('prestamos.store') }}" method="post">
            @csrf

            <label for="socio">Socio:</label>
            <select id="socio" name="socio_id">
                @foreach ($socios as $socio)
                    <option value="{{ $socio->id }}">{{ $socio->nombre }} {{ $socio->apellidos }}</option>
                @endforeach
            </select>

            <label for="ejemplar">Ejemplar:</label>
            <select id="ejemplar" name="ejemplar_id">
                @foreach ($ejemplares as $ejemplar)
                    <option value="{{ $ejemplar->id }}">
                        {{ $ejemplar->isbn }} {{ $ejemplar->libro->titulo }}
                    </option>
                @endforeach
            </select>

            <button class="p-4 bg-blue-600 rounded-xl ml-2 text-white" type="submit">Nuevo prestamo</button>
        </form>
    </div>
</x-app-layout>
