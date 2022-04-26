<x-base-layout>
    @section('title', "MTA Wheels | $post->title")
    @section('keywords')
    @foreach($post->tags() as $tag)
            {{ $tag->name() }}
    @endforeach
    @endsection
    @section('description')
        {{ $post->title() }}
    @endsection
    @section('metaImage')
        {{ asset('storage/' . $post->image) }}
    @endsection
    <section class="section py-5" style="margin-top: 8rem; min-height: 80vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="image-holder">
                                <img src="{{ asset('storage/' . $post->image()) }}" alt="{{ $post->title() }}" width="100%">
                            </div>
                        </div>
                        <div class="col-md-7 product-specs">
                            <h4 class="product-detail-name">{{ $post->title() }}</h4>
                            <hr>
                            <h5 class="fw-bold sizes">Profile: @foreach($post->tags() as $tag)<span class="text-black-50 fw-bold"> {{$tag->name()}}"</span>@endforeach</h5>
                            <hr>
                            <h5 class="fw-bold sizes">Radius:<span class="text-black-50 fw-bold"> @foreach($post->radii() as $radius)<span class="text-black-50 fw-bold"> {{$radius->name()}}"</span>@endforeach</span></h5>
                            <hr>
                            <h5 class="fw-bold sizes">Width:<span class="text-black-50 fw-bold"> @foreach($post->widths() as $width)<span class="text-black-50 fw-bold"> {{$width->name()}}"</span>@endforeach</span></h5>
                            <hr>
                            <h5 class="fw-bold">Prize:<span class="text-danger fw-bold"> $ {{ $post->price() }}</span></h5>
                            <hr>
                            <h5 class="fw-bold">Dealer:<span class="text-black-50 fw-bold">{{ $post->author()->name() }}</span></h5>
                            <hr>
                            <div class="text-center my-3 social-title">
                                <h2>Share to social media</h2>
                            </div>
{{--                            Social Media Links --}}
                            <x-social.links :post="$post" url="{{ Request::url() }}"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
</x-base-layout>
