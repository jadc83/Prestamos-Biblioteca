<x-app-layout>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <x-input-label>Titulo</x-input-label>
        <x-text-input name='titulo'/>
        <x-input-label>ISBN</x-input-label>
        <x-text-input name='isbn'/>
        <x-input-label>Autor</x-input-label>
        <x-text-input name='autor'/>
        <x-input-label>Numero de paginas</x-input-label>
        <x-text-input name='paginas'/>
        <x-input-label>Fecha de publicacion</x-input-label>
        <x-text-input type="date" name='publicacion'/>
        <button type="submit">Enviar</button>
    </form>
</x-app-layout>
