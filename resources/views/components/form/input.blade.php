{{-- app/Views/Components/Form/Input.php --}}

@php
    $label = $attributes->get('label');

    if (!$attributes->get('id')) {
        $attributes->setAttributes(
            $attributes
                ->merge(['id' => $getBag('input')->get('id')])
                ->except(['label'])
                ->getAttributes()
        );
    }
@endphp

<fieldset
    {{ $getBag('fieldset')
        ->merge(['class' => "form-input-" . $attributes->get('type')]) }}>

    <label {{ $getBag('label')
        ->merge(['for' => $attributes->get('id')]) }}>

        {{ $label }}
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
