{{-- app/Views/Components/Form/Input.php --}}

<div
    {{ $getBag('fieldset')
        ->merge([
            'class' => 'form-input-'.$attributes->get('type'),
            'aria-labelledby' => 'label_'.$getBag('input')->get('id'),
        ]) }}>

    <label {{ $getBag('label')
        ->merge([
            'for' => $getBag('input')->get('id'),
            'id' => 'label_'.$getBag('input')->get('id'),
        ]) }}>

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
</div>
