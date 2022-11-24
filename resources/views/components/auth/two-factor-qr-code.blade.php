@if (auth()->user() && auth()->user()->two_factor_secret)
    {!! auth()->user()->twoFactorQrCodeSvg() !!}
@endif
