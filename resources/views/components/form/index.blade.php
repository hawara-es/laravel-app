{{-- src/Views/Components/Form.php --}}

<form {{ $attributes->merge([
    'class' => 'form',
]) }}
    method="{{ $verb }}"
    action="{{ $action }}"
    aria-labelledby="legend_{{ $getBag('fieldset')->get('id') }}">

    <fieldset {{ $getBag('fieldset') }}>
        @csrf

        @if ($_method)
            @method($_method)
        @endif

        @if ($legend)
            <legend id="legend_{{ $getBag('fieldset')->get('id') }}">{{ $legend }}</legend>
        @endif

        {{ $slot }}
    </fieldset>

</form>