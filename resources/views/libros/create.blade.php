<x-app-layout>
    <div class="flex">
        <form class="mx-auto" action="{{ route('libros.store') }}" method="POST">
            @csrf
            <x-input-label>Titulo</x-input-label>
            <x-text-input name='titulo'/>
            <x-input-label>Autor</x-input-label>
            <x-text-input name='autor'/>
            <x-input-label>Numero de paginas</x-input-label>
            <x-text-input name='paginas'/>
            <x-input-label>Fecha de publicacion</x-input-label>
            <x-text-input type="date" name='publicacion'/>
            <button type="submit">Enviar</button>
        </form>
    </div>
</x-app-layout>
