@if (auth()->user() && auth()->user()->two_factor_secret)
    <x-form
        class="auth-two-factor-toggle"
        legend="Two factor authentication is currently enabled"
        action-route="two-factor.enable"
        verb="DELETE">

        <x-form.errors :errors="$errors" :ids="$getBagIds()" />

        <x-form.submit
            heroicon="shield-exclamation"
            label="Disable" />

    </x-form>
@else
    <x-form
        class="auth-two-factor-toggle"
        legend="Two factor authentication isn't currently enabled"
        action-route="two-factor.enable"
        method="POST">

        <x-form.errors :errors="$errors" :ids="$getBagIds()" />

        <x-form.submit
            heroicon="shield-check"
            label="Enable" />

    </x-form>
@endif