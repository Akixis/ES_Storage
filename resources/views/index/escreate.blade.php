<x-app-layout>
    <x-slot name="header">
        Strage
    </x-slot>
         <h1>Blog Name</h1>
        <form action="/esposts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="epost[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>Text</h2>
                <textarea name="epost[text]" placeholder="私の強みは..."></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/dashboard">戻る</a>
        </div>
</x-app-layout>
