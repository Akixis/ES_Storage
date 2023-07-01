<x-app-layout>
    <x-slot name="header">
        Strage
    </x-slot>
       <h1>ES_Storage</h1>
       <a href='/posts/ccreate/{{$types->id}}'>+Folder</a>
        <div class='comp'>
            @foreach($companies as $comp)
                <div class='comp2'>
                    <h2 class='title'>
                        <a href="/companies/{{ $comp->id }}">{{ $comp->title }}</a>
                    </h2>
                </div>
                <form action="/cposts/{{ $comp->id }}" id="form_{{ $comp->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="cdeletePost({{ $comp->id }})">delete</button> 
                </form>
            @endforeach
        </div>
        <div class="footer">
            <a href="/industries/{{$types->id}}">back</a>
        </div>
        <script>
        function cdeletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
</x-app-layout>
