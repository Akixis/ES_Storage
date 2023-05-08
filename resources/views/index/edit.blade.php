<x-app-layout>
    <x-slot name="header">
        Entry Sheet
    </x-slot>
       <h1 class="title">edit</h1>
    <div class="content">
        <form action="/posts/{{ $sheet->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='epost[title]' value="{{ $sheet->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='epost[text]' value="{{ $sheet->text }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</x-app-layout>