@props([
  'label' => null,
  'name' => null,
  'type' => 'text',
  'placeholder' => 'Texte',
  'required' => true,
])

@if($name && $label)
    <div {{ $attributes->merge(['class' => "relative w-full flex items-center my-4"]) }}>
        <label for="{{ $name }}" class="absolute items-center top-0 h-full text-gray w-[56px] flex items-center left-3">
          {{ $label }}
        </label>

        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="pl-[72px] w-full bg-primary"
               placeholder="{{ $placeholder }}" @required($required) />
    </div>
@endif
