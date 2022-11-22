{{-- app/Views/Components/Form/Input.php --}}

<fieldset
    {{ $getBag('fieldset')
        ->merge(['class' => "form-input-" . $attributes->get('type')]) }}>

    <label {{ $getBag('label')
        ->merge(['for' => $attributes->get('id')]) }}>

        {{ $attributes->get('label') }}
    </label>

    @if($attributes->get('type') == 'textarea')
        <textarea {{ $attributes
            ->merge($getBagAsArray('input'))
            ->except(['label']) }}></textarea>
    @else
        <input {{ $attributes
            ->merge($getBagAsArray('input'))
            ->except(['label']) }}>
    @endif
</fieldset>
