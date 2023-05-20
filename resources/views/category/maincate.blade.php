<x-app-layout>
    <x-slot name="header">
        Categories
    </x-slot>
       <h1>ES_Storage</h1>
        <div class='sheets'>
            @foreach ($categories as $category)
               <div class='category'>
                    <h2 class='title'>
                        <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
        <a href="/dashboard">back</a>
</x-app-layout>