<x-html {{ $attributes->merge([
    'class' => 'layout-clear',
]) }}>

    <x-menu.global class="top-anchor" aria-label="Global menu" />

    <main class="main" role="main" aria-label="Main content">
        {{ $slot }}
    </main>

    <footer class="footer" role="footer" aria-label="Website footer">
        <x-menu.footer class="bottom-anchor" aria-label="Footer menu" />
    </footer>

</x-html>
