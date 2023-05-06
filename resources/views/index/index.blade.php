<x-app-layout>
    <x-slot name="header">
        Strage
    </x-slot>
        <h1>ES_Storage</h1>
        <a href='/posts/escreate'>+File</a>
        <div class='primary'>
            @foreach ($inds as $ind)
                <div class='ind'>
                    <h2 class='title'>
                        <a href="/industries/{{ $ind->id }}">{{ $ind->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
</x-app-layout>