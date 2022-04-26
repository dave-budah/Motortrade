<div class="col-md-3">
    <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
         title="Click to view more">
        <a href="{{ route('posts.show', $post) }}">
            @if($post->image())
            <img src="{{ asset('storage/' . $post->image()) }}" alt="{{ $post->title() }}">
            @else
                <img src="{{ asset('images/tyre-a.jpg') }}" alt="{{ $post->title() }}">
            @endif
        </a>

{{--        <h5 class="new small ps-2">NEW</h5>--}}
        <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
            <h5 class="product-name">{{ $post->title() }}</h5>
            <p class="price">${{ $post->price() }}</p>
        </div>
    </div>
</div>

