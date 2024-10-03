@props([
  'label' => null,
  'name' => null,
  'type' => 'text',
  'placeholder' => 'Texte',
  'required' => true,
])

@if($name && $label)
    <div {{ $attributes->merge(['class' => "p-2"]) }}>
        <label for="{{ $name }}" class="">
          {{ $label }}
        </label>

        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
               placeholder="{{ $placeholder }}" @required($required) />
    </div>
@endif
