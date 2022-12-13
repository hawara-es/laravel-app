@if (Route::has('login'))
    @auth
        @if (Route::has('dashboard') && !Request::is('dashboard'))
            <a class="nav-item" href="{{ route('dashboard') }}" tabindex="0">Dashboard</a>
        @endif

        @if (Route::has('user-profile') && !Request::is('user/profile'))
            <a class="nav-item" href="{{ route('user-profile') }}" tabindex="0">Profile</a>
        @endif

        <x-auth.logout-form class="nav-item" />
    @else
        @if (Route::has('login') && !Request::is('login'))
            <a class="nav-item" href="{{ route('login') }}" tabindex="0">Log in</a>
        @endif

        @if (Route::has('register') && !Request::is('register'))
            <a class="nav-item" href="{{ route('register') }}" tabindex="0">Register</a>
        @endif
    @endauth
@endif
