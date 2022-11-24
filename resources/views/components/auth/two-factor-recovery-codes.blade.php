@if (auth()->user() && auth()->user()->two_factor_secret)
    <ul>
    @foreach (auth()->user()->recoveryCodes() as $code)
        <li>{{ $code }}</li>
    @endforeach
    </ul>
@endif
