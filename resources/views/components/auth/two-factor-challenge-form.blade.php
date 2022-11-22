<x-form
    class="auth-two-factor-challenge"
    legend="Authenticate with an Access Code"
    action-route="two-factor.login"
    verb="POST">

    <x-form.errors />

    <x-form.input
        label="Type your access code"
        type="text"
        name="code" />

    <x-form.submit
        heroicon="arrow-right-on-rectangle"
        label="Login" />

</x-form>

{{--

    TODO:
    These two forms should be separated
    by some sort of tab system.

--}}

<x-form
    class="auth-two-factor-challenge"
    legend="Authenticate with a Recovery Code"
    action-route="two-factor.login"
    verb="POST">

    <x-form.errors />

    <x-form.input
        label="Use a recovery code"
        type="text"
        name="recovery_code" />

    <x-form.submit
        heroicon="arrow-right-on-rectangle"
        label="Login" />

</x-form>
