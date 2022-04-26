<x-base-layout>
    <section class="featured py-5" style="margin-top: 8rem; min-height: 80vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <!--        Products -->
                    <div class="row my-3">
                        @foreach($brands as $brand)
                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="{{ route('brands.show', $brand) }}">
                                    <img src="{{ asset('images/tyre-a.jpg') }}" alt="">
                                </a>

{{--                                <h5 class="new small ps-2">NEW</h5>--}}
                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">{{ $brand->name() }}</h5>
                                    <p class="price"></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--        Products -->
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
