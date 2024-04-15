@props(['method' => 'post'])

<form {{$attributes}} method="post" enctype="multipart/form-data">
    @csrf
    @method($method)
    {{$slot}}
</form>
