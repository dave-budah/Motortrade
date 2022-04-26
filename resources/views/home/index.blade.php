<x-base-layout>
    <!-- Hero Slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('images/hero-a.jpg') }}" class="d-block w-100" alt="...">
                <div class="cover">
                    <div class="carousel-caption d-md-block">
                        <h5>Welcome to Motor Trade Africa</h5>
                        <p class="mb-4">Find the best tyre dealers in one  place</p>
                        <a href="#" class="button my-4">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/hero-b.jpg') }}" class="d-block w-100" alt="...">
                <div class="cover">
                    <div class="carousel-caption d-md-block">
                        <h5>Best tyre dealership</h5>
                        <p class="mb-4">Some representative placeholder content for the second slide.</p>
                        <a href="#" class="button my-4">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/hero-c.jpg') }}" class="d-block w-100" alt="...">
                <div class="cover">
                    <div class="carousel-caption d-md-block">
                        <h5>Wheel related accessories</h5>
                        <p class="mb-4">Some representative placeholder content for the third slide.</p>
                        <a href="#" class="button my-4">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Slider -->
    <style>

    </style>
    <!-- Search fields -->
    <section id="search-section" class="py-5">
        <div class="container">
            <div class="col-md-12 col-sm-12 mx-auto">
                <div class="row">
                    <div class="col-md-8">
                        <div class="search-img">
                            <img src="{{ asset('images/sydewall.jpg') }}" alt="">
                            <form class="search-fields" id="tyre-search">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <select class="form-select" id="width">
                                            <option selected>205</option>
                                            <option value="2">220</option>
                                            <option value="1">225</option>
                                            <option value="3">230</option>
                                            <option value="4">235</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <select class="form-select" id="profile">
                                            <option selected>205</option>
                                            <option value="2">220</option>
                                            <option value="1">225</option>
                                            <option value="3">230</option>
                                            <option value="4">235</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <select class="form-select" id="wheel-size">
                                            <option selected>205</option>
                                            <option value="2">220</option>
                                            <option value="1">225</option>
                                            <option value="3">230</option>
                                            <option value="4">235</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <select class="form-select" id="speed">
                                            <option selected>205</option>
                                            <option value="2">220</option>
                                            <option value="1">225</option>
                                            <option value="3">230</option>
                                            <option value="4">235</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="">Find my tyres</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row mt-lg-5" id="lower-search-fields">
                            <!--                Tyre by vehicle-->
                                <div class="search-card">
                                    <form action="#" id="tyre-by-vehicle" class="text-center">
                                        <div class="d-flex justify-content-center align-items-center mb-2">
                                            <img src="{{ asset('images/tyre-rim.png') }}" alt="" width="40">
                                            <h5 class="default-h-four ms-3">Tyres by vehicle</h5>
                                        </div>

                                        <select class="form-select" aria-label="sort" id="vehicle-year">
                                            <option selected>Year:</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="4">5</option>
                                        </select>

                                        <select class="form-select" aria-label="sort" id="vehicle-make">
                                            <option selected>Make:</option>
                                            <option value="1">Sedan</option>
                                            <option value="2">Coupe</option>
                                            <option value="3">Station wagon</option>
                                            <option value="4">Hatchback</option>
                                            <option value="4">SUV</option>
                                        </select>

                                        <select class="form-select" aria-label="sort" id="vehicle-model">
                                            <option selected>Model:</option>
                                            <option value="1">Model</option>
                                            <option value="2">Model b</option>
                                            <option value="3">Model c</option>
                                            <option value="4">Model d</option>
                                            <option value="4">Model e</option>
                                        </select>

                                        <select class="form-select" aria-label="sort" id="vehicle-brand">
                                            <option selected>Brand:</option>
                                            <option value="1">Brand</option>
                                            <option value="2">Brand b</option>
                                            <option value="3">Model c</option>
                                            <option value="4">Brand d</option>
                                            <option value="4">Brand e</option>
                                        </select>

                                        <button class="compare btn">Compare now</button>
                                    </form>
                                </div>
                            </div>
                            <!--                Rim by vehicle -->
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Search fields -->

    <!-- Start Latest posts -->

    <section class="featured py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="bg-light d-block text-center mb-5 p-2">
                        <div class="d-flex justify-content-between flex-md-row flex-sm-column align-items-center">
                            <h4 class="default-h-four">Tyres</h4>
                            <select class="form-select" aria-label="sort" id="sort">
                                <option selected style="font-size: .8rem">Sort by:</option>
                                <option value="1">Most relevant</option>
                                <option value="2">A-Z</option>
                                <option value="3">Z-A</option>
                                <option value="4">Lowest price</option>
                                <option value="4">Highest price</option>
                            </select>
                        </div>
                    </div>

                    <!--        Products -->
                        <livewire:home.latest-post />

                    <!--        Products -->
                </div>
            </div>
        </div>
    </section>
    <!-- Start Latest posts -->


</x-base-layout>
