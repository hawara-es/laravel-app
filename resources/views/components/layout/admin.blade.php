<x-html {{ $attributes->merge([
    'class' => 'layout-admin',
]) }}>

    <x-menu.global class="global-menu top-anchor" aria-label="Global menu" />

    <nav class="app-menu" aria-label="Application menu"></nav>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <a href="#">Aviso legal</a>
    </footer>

</x-html>
