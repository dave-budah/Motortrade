<nav id="dashboard-nav">
    <div class="nav-header">
        <div class="logo">
            <img src="{{ asset('images/logo/selvig.png') }}" alt="logo">
        </div>
        <div class="logo-name">
            <h5>Selvig Tech</h5>
        </div>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li class="">
                <a href="/admin/dashboard">
                    <span class="fas fa-th"></span>
                    <span class="link-name">Dashboard</span>
                </a>
            </li>
            @if(auth()->user()->isAdmin() || auth()->user()->isSuperadmin())
            <li class="">
                <a href="{{ route('admin.users.index') }}" :active="request()->route('admin.users.index')">
                    <span class="fas fa-users"></span>
                    <span class="link-name">Users</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('admin.writers.index') }}" :active="request()->route('admin.writers.index')">
                    <span class="fas fa-user-edit"></span>
                    <span class="link-name">Dealers</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('admin.tags.index') }}" :active="request()->route('admin.tags.index')">
                    <span class="fas fa-user-edit"></span>
                    <span class="link-name">Tags</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('admin.brands.index') }}" :active="request()->route('admin.brands.index')">
                    <span class="fas fa-user-edit"></span>
                    <span class="link-name">Tires Brands</span>
                </a>
            </li>
                <li class="">
                    <a href="{{ route('admin.widths.index') }}" :active="request()->route('admin.widths.index')">
                        <span class="fas fa-user-edit"></span>
                        <span class="link-name">Tires Widths</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('admin.radii.index') }}" :active="request()->route('admin.radii.index')">
                        <span class="fas fa-user-edit"></span>
                        <span class="link-name">Tires Radii</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('admin.vehicles.index') }}" :active="request()->route('admin.vehicles.index')">
                        <span class="fas fa-user-edit"></span>
                        <span class="link-name">Tire Vehicles</span>
                    </a>
                </li>
           @endif
            @if(auth()->user()->isDealer() || auth()->user()->isWriter())
            <li class="">
                <a href="{{ route('admin.posts.writer') }}" :active="request()->routeIs('admin.posts.writer')">
                    <span class="fas fa-comments"></span>
                    <span class="link-name">Posts</span>
                </a>
            </li>
            @else
            <li class="">
                <a href="{{ route('admin.posts.index') }}" :active="request()->routeIs('admin.posts.index')">
                    <span class="fas fa-comments"></span>
                    <span class="link-name">Posts</span>
                </a>
            </li>
            @endif

        </ul>


{{--        Authentication Box  and Theme Selector --}}
        <ul class="logout-mode">
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <span class="fas fa-sign-out-alt"></span>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
            </form>

            <li class="mode">
                <a href="">
                    <span class="fas fa-moon"></span>
                    <span class="fas fa-sun"></span>
                </a>

                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
</nav>
