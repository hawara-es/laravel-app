<nav {{ $attributes->merge([
    'class' => 'global-menu menu-nav',
]) }}>
    {{ $slot }}

    <x-auth.nav />
</nav>