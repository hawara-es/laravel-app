@if (auth()->user() && auth()->user()->two_factor_secret)
    <h2>Recovery codes</h2>
    <ul>
    @foreach (auth()->user()->recoveryCodes() as $code)
        <li>{{ $code }}</li>
    @endforeach
    </ul>
@endif
