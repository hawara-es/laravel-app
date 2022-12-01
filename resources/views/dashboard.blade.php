<x-layout.admin>
    <h1>This is your <span class="accented">home</span></h1>

    <h2><span class="accented">Security</span> settings</h2>

    <h3><span class="accented">Two Factor</span> authentication</h3>

    <h4>Activate or deactivate</h4>
    <x-auth.two-factor-toggle-form />

    @if (Auth::user() && Auth::user()->two_factor_secret)
        @if (session('status') == 'two-factor-authentication-enabled')
            <aside>
                Please finish configuring two factor authentication below.
            </aside>
        @endif

        <h4>QR code</h4>
        <x-auth.two-factor-qr-code />

        <h4>Confirm your Set up</h4>
        <x-auth.two-factor-confirm-form />

        <h4>Recovery codes</h4>
        <x-auth.two-factor-recovery-codes />
    @endif
</x-layout.admin>