<nav {{ $attributes->merge([
    'class' => 'footer-menu menu-nav',
]) }}>
    {{ $slot }}

    <a href="/" class="nav-item">{{ config('app.name') }}</a>
</nav>