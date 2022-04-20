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
            <div class="col-md-6 col-sm-12 mx-auto">
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
            <div class="row mt-lg-5" id="lower-search-fields">
                <!--                Tyre by vehicle-->
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <div class="search-card">
                        <form action="#" id="rim-by-vehicle" class="text-center">
                            <div class="d-flex justify-content-center align-items-center mb-2">
                                <img src="{{ asset('images/rim-png.png') }}" alt="" width="40">
                                <h5 class="default-h-four ms-3">Wheels by vehicle</h5>
                            </div>
                            <select class="form-select" aria-label="sort" id="year">
                                <option selected>Year:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select>

                            <select class="form-select" aria-label="sort" id="make">
                                <option selected>Make:</option>
                                <option value="1">Sedan</option>
                                <option value="2">Coupe</option>
                                <option value="3">Station wagon</option>
                                <option value="4">Hatchback</option>
                                <option value="4">SUV</option>
                            </select>

                            <select class="form-select" aria-label="sort" id="model">
                                <option selected>Model:</option>
                                <option value="1">Model</option>
                                <option value="2">Model b</option>
                                <option value="3">Model c</option>
                                <option value="4">Model d</option>
                                <option value="4">Model e</option>
                            </select>

                            <button class="compare btn">Compare now</button>
                        </form>
                    </div>
                </div>
                <!--                Rim by size -->
                <div class="col-md-4">
                    <div class="search-card">
                        <form action="#" id="rim-by-size" class="text-center">
                            <div class="d-flex justify-content-center align-items-center mb-2">
                                <img src="{{ asset('images/rim-png.png') }}" alt="" width="40">
                                <h5 class="default-h-four ms-3">Wheels by vehicle</h5>
                            </div>

                            <select class="form-select" aria-label="sort" id="first-size">
                                <option selected>Size:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select>

                            <select class="form-select" aria-label="sort" id="second-size">
                                <option selected>Size:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                            </select>

                            <select class="form-select" aria-label="sort" id="model">
                                <option selected>Model:</option>
                                <option value="1">Model</option>
                                <option value="2">Model b</option>
                                <option value="3">Model c</option>
                                <option value="4">Model d</option>
                                <option value="4">Model e</option>
                            </select>

                            <button class="compare btn">Compare now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Search fields -->

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
                    <div class="row my-3">
                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('images/tyre-a.jpg') }}" alt="">
                                </a>

                                <h5 class="new small ps-2">NEW</h5>
                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('images/tyre-b.jpg') }}" alt="">
                                </a>

                                <h5 class="new small ps-2">NEW</h5>
                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('images/tyre-c.png') }}" alt="">
                                </a>

                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('images/tyre-d.jpg') }}" alt="">
                                </a>

                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('images/tyre-e.png') }}" alt="">
                                </a>

                                <h5 class="new small ps-2">NEW</h5>
                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('images/tyre-e.png') }}" alt="">
                                </a>

                                <h5 class="new small ps-2">NEW</h5>
                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 w-100 text-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 mx-auto">
                                    <button class="page">
                                        <i class="fa fa-arrow-left"></i>
                                    </button>
                                    <span class="page">1</span>
                                    <span class="page">2</span>
                                    <span class="page">3</span>
                                    <button class="page">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--        Products -->
                </div>
            </div>
        </div>
    </section>

    <section class="featured py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="bg-light d-block text-center mb-5 p-2">
                        <div class="d-flex justify-content-between flex-md-row flex-sm-column align-items-center">
                            <h4 class="default-h-four">Rims</h4>
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
                    <div class="row my-4">
                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('storage/static/rim-d.jpg') }}" alt="">
                                </a>

                                <h5 class="new small ps-2">NEW</h5>
                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('storage/static/rim-b.jpg') }}" alt="">
                                </a>

                                <h5 class="new small ps-2">NEW</h5>
                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('storage/static/rim-c.jpg') }}" alt="">
                                </a>

                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('storage/static/rim-d.jpg') }}" alt="">
                                </a>
                                <h5 class="new small ps-2">NEW</h5>
                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('images/rim-a.jpg') }}" alt="">
                                </a>

                                <h5 class="new small ps-2">NEW</h5>
                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                 title="Click to view more">
                                <a href="">
                                    <img src="{{ asset('images/rim-b.jpg') }}" alt="">
                                </a>

                                <div class="product-detail d-flex justify-content-center align-items-center p-4 flex-column">
                                    <h5 class="product-name">Lorem ipsum dolor</h5>
                                    <p class="price">$57.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 w-100 text-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 mx-auto">
                                    <button class="page">
                                        <i class="fa fa-arrow-left"></i>
                                    </button>
                                    <span class="page">1</span>
                                    <span class="page">2</span>
                                    <span class="page">3</span>
                                    <button class="page">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--        Products -->
                </div>
            </div>
        </div>
    </section>

</x-base-layout>
