<x-app-layout>
    <x-slot name="header">
        Strage
    </x-slot>
        <p>ES_Storage</p>
        
        <div>
            @foreach ($inds as $ind)
                <div class='ind'>
                    <h2 class='title'>
                        <a href="/industries/{{ $ind->id }}">{{ $ind->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
        
</x-app-layout>