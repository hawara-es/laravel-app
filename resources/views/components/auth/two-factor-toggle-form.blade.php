@if ( ! $twoFactorIsEnabled())
<details id="{{ $getBagId('help') }}">
    <summary>Your account does not have two factor authentication enabled.</summary>

    <p>
        This means that when you login you will be asked an email address and a password.
        Once you provide the correct credentails your session is started.
    </p>

    <p>
        You can enhance the security of your account by enabling two factor authentication.
        While enabling it you'll be shown a QR code.
        Use it to configure a "One Time Password" application.
    </p>

    <p>Choose the one that you prefer. For instance, you could use:</p>

    <ul>
        <li><a href="https://getaegis.app">Aegis</a> for Android</li>
        <li><a href="https://apps.apple.com/es/app/freeotp-authenticator/id872559395">FreeOTP</a> for iPhone</li>
    </ul>

    <p>
        After typing your email and password you'll be asked a unique code.
        The application you chose will tell you what code to introduce every time.
    </p>
</details>

<x-form class="auth-two-factor-toggle-form" legend="Do you want to enable Two Factor authentication?" action-route="two-factor.enable" method="POST" aria-describedby="{{ $getBagId('help') }}">

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    <x-form.submit heroicon="shield-check" label="Enable" />

</x-form>
@else
<details id="{{ $getBagId('help') }}">
    <summary>Your account has two factor authentication enabled.</summary>

    <p>
        This means that when you login you will be asked an email address and a password,
        and ffter typing your email and password you'll be asked a unique code.
        Your "One-Time-Code" application will tell you what code to introduce every time.
    </p>
</details>

<x-form class="auth-two-factor-toggle-form" legend="Do you want to disable Two Factor authentication?" action-route="two-factor.enable" verb="DELETE" aria-describedby="{{ $getBagId('help') }}">

    <x-form.errors :errors="$errors" :ids="$getBagIds()" />

    <x-form.submit heroicon="shield-exclamation" label="Disable" />

</x-form>
@endif
