@if (auth()->user() && auth()->user()->two_factor_secret)
    <h2>QR Code</h2>
    {!! auth()->user()->twoFactorQrCodeSvg() !!}
@endif
