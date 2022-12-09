<x-menu.nav {{ $attributes->merge([
    'class' => 'global-menu',
]) }}>
    {{ $slot }}

    <x-auth.nav-items />
</x-menu.nav>