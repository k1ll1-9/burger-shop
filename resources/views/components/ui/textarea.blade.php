<textarea {{$attributes->class([
    'rows' => 3,
    'form-control',
    'is-invalid' => $errors->get('name')
])}} >{{$attributes['value']}}</textarea>
