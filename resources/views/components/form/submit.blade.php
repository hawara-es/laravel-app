@php
    if (!isset($heroicon)) { $heroicon = ''; }
    if (!isset($label)) { $label = ''; }
@endphp

<button type="submit"
    {{ $attributes->merge([
        'class' => 'form-submit',
    ])}}>

    {{-- <x-icons.heroicon name="{{ $heroicon }}" /> --}}

    <span>{{ $label }}</span>
</button>