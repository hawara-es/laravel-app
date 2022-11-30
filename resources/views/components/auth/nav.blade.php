<x-menu.nav {{ $attributes->merge([
    'class' => 'auth-nav',
    'aria-label' => 'Authentication menu'
]) }}>
    @if (Route::has('login'))
        @auth
            @if (!Request::is('dashboard'))
                <a class="nav-item" href="{{ route('dashboard') }}" tabindex="0">Dashboard</a>
            @endif

            <x-auth.logout-nav-item />
        @else
            <a class="nav-item" href="{{ route('login') }}" tabindex="0">Log in</a>

            @if (Route::has('register'))
                <a class="nav-item" href="{{ route('register') }}" tabindex="0">Register</a>
            @endif
        @endauth
    @endif
</x-menu.nav>