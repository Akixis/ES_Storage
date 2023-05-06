<x-app-layout>
    <x-slot name="header">
        Indutries2
    </x-slot>
         <h1>ES_Storage</h1>
        <div class='types'>
            @foreach ($types as $type)
                <div class='type'>
                    <h2 class='title'>{{ $type->title }}</h2>
                </div>
            @endforeach
        </div>
</x-app-layout>