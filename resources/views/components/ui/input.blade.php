<input {{$attributes->class([
    'form-control',
    'is-invalid' => $errors->get('name')
])}}
>

@error($attributes['name'])
<div class="invalid-feedback fs-2">
    {{ $message }}
</div>
@enderror
