<x-app-layout>
    <x-slot name="header">
        Add Campany
    </x-slot>
         <h1>Reference</h1>
        <form action="/csposts" method="POST">
            @csrf
            <input type="hidden" name="cpost[type_id]" value="{{$type->id}}"/>
            <h2 class='title'>
                        <a>{{ $type->title }}</a>
            </h2>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="cpost[title]" placeholder="社名" value="{{ old('cpost.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('cpost.title') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/types/{{$type->id}}">back</a>
        </div>
</x-app-layout>
