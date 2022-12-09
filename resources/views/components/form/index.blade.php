{{-- src/Views/Components/Form.php --}}

<form {{ $attributes->merge([
    'class' => 'form',
]) }}
    method="{{ $verb }}"
    action="{{ $action }}">

    <fieldset {{ $getBag('fieldset') }}>
        @csrf

        @if ($_method)
            @method($_method)
        @endif

        @if ($legend)
            <legend>{{ $legend }}</legend>
        @endif

        {{ $slot }}
    </fieldset>

</form>