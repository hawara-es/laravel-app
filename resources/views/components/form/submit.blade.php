@php
    if (!isset($heroicon)) { $heroicon = ''; }
    if (!isset($label)) { $label = ''; }
@endphp

<button type="submit"
    {{ $attributes->merge([
        'class' => 'form-submit',
        'tabindex' => 0,
    ])}}>

    {{-- <x-icons.heroicon name="{{ $heroicon }}" /> --}}

    <span>{{ $label }}</span>
</button>