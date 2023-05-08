<x-app-layout>
    <x-slot name="header">
        Entry Sheet
    </x-slot>
        <a href="/categories/{{ $sheet->category->id }}">{{ $sheet->category->name }}</a>
       <h1 class="title">
            {{ $sheet->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $sheet->text }}</p>    
            </div>
        </div>
        <div class="edit">
            <a href="/posts/{{ $sheet->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
</x-app-layout>

