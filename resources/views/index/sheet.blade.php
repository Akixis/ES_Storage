<x-app-layout>
    <x-slot name="header">
        Entry Sheet
    </x-slot>
       <h1>ES_Storage</h1>
       <a href='/posts/escreate'>+File</a>
        <div class='sheets'>
            @foreach ($sheets as $sheet)
                <div class='sheet'>
                    <a href="/categories/{{ $sheet->category->id }}">{{ $sheet->category->name }}</a>
                    <h2 class='title'>
                        <a href="/posts/{{$sheet->id}}">{{ $sheet->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $sheets->links() }}
        </div>
</x-app-layout>