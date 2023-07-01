<x-app-layout>
    <x-slot name="header">
        Indutries
    </x-slot>
         <h1>ES_Storage</h1>
        <div class='types'>
            @foreach ($types as $type)
                <div class='type'>
                    <h2 class='title'>
                        <a href="/types/{{ $type->id }}">{{ $type->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
        <div class="footer">
            <a href="/inds">back</a>
        </div>
</x-app-layout>