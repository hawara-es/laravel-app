<x-html {{ $attributes->merge([
    'class' => 'layout-clear',
]) }}>

    <x-auth.nav class="global-menu top-anchor" aria-label="Global menu" />

    <main role="main" aria-label="Main content">
        {{ $slot }}
    </main>

    <footer role="footer" aria-label="Website footer">
        <a href="#">Aviso legal</a>
    </footer>

</x-html>
