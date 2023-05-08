<x-app-layout>
    <x-slot name="header">
        Strage
    </x-slot>
       <h1>ES_Storage</h1>
       
        <div class='comp'>
            @foreach ($companies as $comp)
                <div class='comp'>
                    <h2 class='title'>
                        <a href="/companies/{{ $comp->id }}">{{ $comp->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
</x-app-layout>
