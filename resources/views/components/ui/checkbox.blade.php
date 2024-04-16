@props([
    'label',
    'checked' => false
    ])

<div class="icheck-success d-inline">
    <input {{$attributes->merge([
    'type' => "checkbox" ,
    'id' =>$attributes['name'],
    'checked' => $checked,
])}}>
    <label for="{{$attributes['name']}}">{{$label}}</label>
</div>
