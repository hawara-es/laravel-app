@if (isset($errors) && $errors->any())

<aside class="form-errors">
    <header>{{ __('There are some issues with your submission') }}</header>
    <ul>
    @foreach ($errors->getBag('default')->keys() as $key)
        @foreach ($errors->getBag('default')->get($key) as $message)
            @if (array_key_exists($key, $ids))
                <li role="alert">
                    <a href="#{{ $ids[$key] }}">{{ $message }}</a>
                </li>
            @endif
        @endforeach
    @endforeach
    </ul>
</aside>

@endif
