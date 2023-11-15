<div class="card mb-3">
    {{-- <img src="..." class="card-img-top" alt="..."> --}}
    <div class="card-body">
        <h5 class="card-title">{{ $post['title'] }}</h5>
        <p class="card-text">{{ $post['description'] }}</p>
        <button class="btn btn-primary" wire:click="testing()">Test</button>
        <p>{{ $test }}</p>
    </div>
</div>
