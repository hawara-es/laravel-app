@if (
    /* A user is logged in */
    Auth::user() &&
    /* ... and has two factor enabled */
    Auth::user()->two_factor_secret &&
    /* ... but has not completed two factor confirmation */
    !Auth::user()->two_factor_confirmed_at)
    <x-form
        class="auth-two-factor-confirm"
        legend="Confirm Two Factor Authentication with an Access Code"
        action-route="two-factor.web-confirm"
        verb="POST">

        <x-form.errors :errors="$errors" :ids="$getBagIds(['code'])" />

        <x-form.input
            :id="$getBagId('code')"
            label="Type your access code"
            type="text"
            name="code" />

        <x-form.submit
            heroicon="arrow-right-on-rectangle"
            label="Login" />

    </x-form>
@else
    Your Two Factor Authentication set up has been enabled successfully.
@endif