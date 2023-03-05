
@props([ 'name', 'value','required','autofocus'])

<textarea 
    name="{{ $name }}" 
    {{ !empty($required) ? 'required' : '' }} 
    {{ !empty($autofocus) ? 'autofocus' : '' }} 
    {{ $attributes->merge(['class' => 'block mt-1 w-full']) }}
>
{{ !empty($value) ? old($name, $value):''}} 
</textarea>
