@auth
    <x-form
        action-route="logout"
        method="post"
        class="auth-logout-form">

        <x-form.submit {{ $attributes->merge([
                'class' => 'framed',
                'tabindex' => 0,
            ]) }}
            heroicon="arrow-left-on-rectangle"
            label="Logout" />

    </x-form>
@endauth