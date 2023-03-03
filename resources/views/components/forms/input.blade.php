@props([ 'name', 'value','required','autofocus'])

<input 

    name="{{ $name }}" 
    {{ isset($value) ? 'value='.old($name, $value).'':''}} 
    {{ isset($required) ? 'required' : '' }} 
    {{ isset($autofocus) ? 'autofocus' : '' }} 
    {{ $attributes->merge(['class' => 'block mt-1 w-full']) }}
/>
