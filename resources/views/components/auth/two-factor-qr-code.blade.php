@if ($twoFactorIsEnabled())
<section {{ $attributes->merge([
    'class' => 'auth-two-factor-qr-code',
]) }}>
    <div class="description">
        <h3>QR Code</h3>
        <p>Use this QR code to configure your "One-Time-Password" application.</p>
    </div>
    <div class="code">
        {!! $twoFactorQrCode() !!}
    </div>
</section>
@endif
