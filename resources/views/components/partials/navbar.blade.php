
<div class="container mb-0 pt-1" id="topbar">
    <div class="d-flex justify-content-evenly topbar py-1 mb-0">
        <a href="#" class="d-none d-sm-none d-md-block topbar-phone-link">
            <i class="fa fa-phone"></i>
            +263 77 000 000
        </a>
        <a href="#" class="d-none d-sm-none d-md-block topbar-phone-link">
            <i class="fa-brands fa-whatsapp fw-bold"></i>
            +263 77 000 000
        </a>

        <div class="input-group mb-1 search-group">
            <input type="text" class="form-control bg-transparent" placeholder="Search..." aria-label="search field"
                   aria-describedby="basic-search">
            <span class="input-group-text" id="basic-search"><i class="fa fa-search"></i></span>
        </div>

        <div class="social d-flex flex-row justify-content-evenly">
            <a href="#" class="d-none d-sm-none d-md-block topbar-phone-link mx-4"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="d-none d-sm-none d-md-block topbar-phone-link mx-4"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="d-none d-sm-none d-md-block topbar-phone-link mx-4"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>

    </div>
</div>

<div class="bg-light mt-0">
    <div class="container py-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="/">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Wheels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tyres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" tabindex="-1">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" tabindex="-1">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>



@bukStyles(true)
@livewireStyles
