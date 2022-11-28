<x-html {{ $attributes->merge([
    'class' => 'layout-clear',
]) }}>

    <x-auth.nav />

    <main>
        {{ $slot }}
    </main>

    <footer>
        <a href="#">Aviso legal</a>
    </footer>

</x-html>
