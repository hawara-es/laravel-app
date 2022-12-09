@if ($twoFactorIsEnabled())

@if( ! $twoFactorIsConfirmed())
<section id="{{ $getBagId('help') }}">
    <p>
        To finish enabling Two Factor Authentication for your account,
        check your One-Time-Password application for an access code
        and type it below.
    </p>
</section>
<x-form class="auth-two-factor-confirm" legend="Confirm with an Access Code" action-route="two-factor.web-confirm" verb="POST">

    <x-form.errors :errors="$errors" :ids="$getBagIds(['code'])" />

    <x-form.input :id="$getBagId('code')" label="Type your access code" type="text" name="code" />

    <x-form.submit heroicon="arrow-right-on-rectangle" label="Login" />

</x-form>
@endif

@if ($twoFactorIsConfirmed())
<section id="{{ $getBagId('help') }}">
    <p>
        Your account has two factor authentication enabled.
    </p>
</section>
@endif

@endif
