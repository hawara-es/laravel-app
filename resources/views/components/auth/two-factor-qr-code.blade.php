@if ($twoFactorIsEnabled())
<section class="auth-two-factor-qr-code">
    <h3>QR Code</h3>
    <p>Use this QR code to configure your "One-Time-Password" application.</p>
    {!! $twoFactorQrCode() !!}
</section>
@endif
