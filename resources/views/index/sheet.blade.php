<x-app-layout>
    <x-slot name="header">
        Entry Sheet
    </x-slot>
       <h1>ES_Storage</h1>
       <a href='/posts/escreate/{{$company->id}}'>+File</a>
        <div class='sheets'>
            @foreach ($sheets as $sheet)
                <div class='sheet'>
                    <a href="/categories/{{ $sheet->category->id }}">{{ $sheet->category->name }}</a>
                    <h2 class='title'>
                        <a href="/posts/{{$sheet->id}}">{{ $sheet->title }}</a>
                    </h2>
                </div>
                <form action="/posts/{{ $sheet->id }}" id="form_{{ $sheet->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $sheet->id }})">delete</button> 
                </form>
            @endforeach
        </div>
         <div class="footer">
            <a href="/types/{{$company->type_id}}">back</a>
        </div>
        <div class='paginate'>
            {{ $sheets->links() }}
        </div>
        <script>
        function deletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
</x-app-layout>