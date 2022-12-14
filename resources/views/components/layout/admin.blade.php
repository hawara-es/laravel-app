<x-html {{ $attributes->merge([
    'class' => 'layout-admin',
]) }}>

    <x-menu.global aria-label="Global menu" />

    <x-menu.nav class="app-menu" aria-label="Application menu" />

    <main class="main" aria-label="Page content">
        {{ $slot }}
    </main>

    <footer class="footer">
        <x-menu.footer class="bottom-anchor" aria-label="Footer menu" />
    </footer>

</x-html>
