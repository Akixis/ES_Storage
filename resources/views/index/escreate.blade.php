<x-app-layout>
    <x-slot name="header">
        Strage
    </x-slot>
         <h1>Blog Name</h1>
        <form action="/esposts" method="POST">
            @csrf
            <input type="hidden" name="epost[company_id]" value="{{$company->id}}"/>
            <input type="hidden" name="epost[favo]" value="0"/>
            <div class="category">
            <h2>Category</h2>
                <select name="epost[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="epost[title]" placeholder="タイトル" value="{{ old('epost.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('epost.title') }}</p>
            </div>
            <div class="body">
                <h2>Text</h2>
                <textarea name="epost[text]" placeholder="私の強みは...">{{ old('epost.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('epost.body') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/companies/{{$company->id}}">back</a>
        </div>
</x-app-layout>
