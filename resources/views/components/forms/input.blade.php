@props([ 'name', 'value','required','autofocus'])

<input 

    name="{{ $name }}" 
    {{ !empty($value) ? 'value='.old($name, $value).'':''}} 
    {{ !empty($required) ? 'required' : '' }} 
    {{ !empty($autofocus) ? 'autofocus' : '' }} 
    {{ $attributes->merge(['class' => 'block mt-1 w-full']) }}
/>
