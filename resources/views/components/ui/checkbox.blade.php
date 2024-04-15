@props(['label'])

<div class="icheck-success d-inline">
    <input {{$attributes}} type="checkbox" id="{{$attributes['name']}}">
    <label for="{{$attributes['name']}}">{{$label}}</label>
</div>
