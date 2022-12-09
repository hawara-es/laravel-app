@auth
    <x-form
        action-route="logout"
        method="POST"
        class="auth-logout-nav-item">

        <x-form.submit {{ $attributes->merge([
                'class' => 'framed nav-item',
                'tabindex' => 0,
            ]) }}
            heroicon="arrow-left-on-rectangle"
            label="Logout" />

    </x-form>
@endauth