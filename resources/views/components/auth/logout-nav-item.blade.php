@auth
    <x-form
        action-route="logout"
        method="POST"
        class="auth-logout">

        <x-form.submit {{ $attributes->merge([
                'class' => 'nav-item',
            ]) }}
            heroicon="arrow-left-on-rectangle"
            tabindex="0"
            label="Logout" />

    </x-form>
@endauth