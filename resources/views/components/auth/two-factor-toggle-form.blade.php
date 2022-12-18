@if ( ! $twoFactorIsEnabled())
<section id="{{ $getBagId('help') }}">
    <h3>Your account does not have two factor authentication enabled.</h3>

    <p>
        Your account does not have two factor authentication enabled. When login
        into this site, you will be asked to type your basic credentials. Usually
        those will be your username or email address, and a password.
    </p>

    <p>
        You can enhance the security of your account by enabling a second password.
        Once activated, in order to log into your account, an extra "One-Time-Password"
        will be needed.
    </p>

    <p>
        Check out: <a href="https://getaegis.app">Aegis</a> if you use Android,
        or <a href="https://apps.apple.com/es/app/freeotp-authenticator/id872559395">FreeOTP</a> if you use iPhone.
    </p>
</section>

<x-form
    legend="Do you want to enable Two Factor authentication?"
    action-route="two-factor.enable"
    method="POST"
{{ $attributes->merge([
    'class' => 'auth-two-factor-toggle-form',
    'aria-describedby' => $getBagId('help'),
]) }}>

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    @if ( ! $confirmPasswordIsEnabled() or $passwordIsConfirmed() )
    <x-form.submit heroicon="shield-check" label="Enable" />
    @endif

    @if ( $confirmPasswordIsEnabled() and ! $passwordIsConfirmed() )
    <p>
        In order to enable Two Factor Authentication, you will have
        to confirm your password.
    </p>

    <x-form.submit heroicon="shield-check" label="Confirm password" />
    @endif
</x-form>
@endif

@if ($twoFactorIsEnabled())
<section id="{{ $getBagId('help') }}">
    <h3>Your account has two factor authentication enabled.</h3>

    <p>
        The security of your account has been improved by enabling a authentication
        of two factors. Apart from your basic credentials, you'll be asked a second
        code. Use the QR code below to configure your One Time Password
        application.
    </p>
</section>

<x-form
    legend="Do you want to disable Two Factor authentication?"
    action-route="two-factor.enable"
    method="POST"
    verb="DELETE"
{{ $attributes->merge([
    'class' => 'auth-two-factor-toggle-form',
    'aria-describedby' => $getBagId('help'),
]) }}>

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    <x-form.submit heroicon="shield-exclamation" label="Disable" />

</x-form>
@endif
