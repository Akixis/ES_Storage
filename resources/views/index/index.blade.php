<x-app-layout>
    <x-slot name="header">
        Strage
    </x-slot>
        <h1>ES_Storage</h1>
        
        <div class='primary'>
            @foreach ($inds as $ind)
                <div class='ind'>
                    <h2 class='title'>
                        <a href="/industries/{{ $ind->id }}">{{ $ind->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</x-app-layout>