<nav {{ $attributes->merge([
    'class' => 'auth-nav',
]) }}>
    <a href="{{ route('welcome') }}">Welcome</a>
    @if (Route::has('login'))
        @auth
            <a href="{{ route('home') }}">Home</a>
            <x-auth.logout />
        @else
            <a href="{{ route('login') }}">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    @endif
</nav>