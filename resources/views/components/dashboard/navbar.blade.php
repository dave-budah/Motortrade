<div class="top">
    <span class="fas fa-bars sidebar-toggle"></span>

    <div class="search-box">
        <input type="text" placeholder="Search..">
        <span class="fas fa-search"></span>
    </div>

    <a href="" class="user-detail">
        <span class="username">{{ Auth::user()->name }}</span>
        <img src="{{ asset('images/logo/placeholder.png') }}" alt="">
    </a>
</div>
