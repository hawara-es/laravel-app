@auth
    <x-form
        class="auth-logout in-line"
        action-route="logout"
        method="POST">

        <x-form.submit
            heroicon="arrow-left-on-rectangle"
            class="button-as-link"
            label="Logout" />

    </x-form>
@endauth