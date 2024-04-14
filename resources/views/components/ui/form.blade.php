@props(['method' => 'post'])

<form {{$attributes}} method="post">
    @csrf
    @method($method)
    {{$slot}}
</form>
