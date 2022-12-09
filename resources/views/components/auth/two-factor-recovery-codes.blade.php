@if ($twoFactorIsEnabled())
<section class="auth-two-factor-recovery-codes">
    <h3>Recovery codes</h3>

    <p>
        Store a copy of these codes in a safe place. They will let you access your account
        even when your "One-Time-Password" application is not available.
    </p>

    <p>
        Every time you use one of them, your QR and recovery codes are reset. Forcing you to
        reconfigure your "One-Time-Password" application.
    </p>

    <textarea
        class="recovery-codes"
        rows="8"
        spellcheck="false">{{ join("\n", $twoFactorRecoveryCodes()) }}</textarea>
</section>
@endif
