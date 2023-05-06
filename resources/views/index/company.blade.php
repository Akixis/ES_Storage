<x-app-layout>
    <x-slot name="header">
        Strage
    </x-slot>
       <h1>ES_Storage</h1>
       <a href='/posts/escreate'>+File</a>
        <div class='comps'>
            @foreach ($comps as $comp)
                <div class='comp'>
                    <h2 class='title'>{{ $comp->title }}</h2>
                </div>
            @endforeach
        </div>
</x-app-layout>
