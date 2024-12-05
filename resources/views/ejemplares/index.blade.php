<x-app-layout>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <tbody>
            @foreach ($ejemplares as $ejemplar)
                <a href="{{route('ejemplares.show', $ejemplar)}}">{{$ejemplar->libro->titulo}}</a>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
