@props([
    'placeholder',
    'name'
])

<div class="input-group">
    <div class="custom-file">
        <input type="file" name="{{$name}}" class="custom-file-input" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">{{$placeholder}}</label>
    </div>
</div>
@once
    @push('css')
        <style>
            .custom-file-input:lang(en) ~ .custom-file-label::after {
                content: 'Выбрать';
            }
        </style>
    @endpush
@endonce


