@props([
    'placeholder',
    'options',
    'selected' => [],
    'name'
])
<div class="select2-olive">
    <select class="select2"
            name="{{$name}}[]"
            multiple="multiple"
            data-placeholder="{{$placeholder}}"
            data-dropdown-css-class="select2-olive" style="width: 100%;">
        @foreach($options as $category)
            <option value="{{$category->id}}" {{in_array($category->id,$selected) ? 'selected' : ''}}>
                {{$category->name}}
            </option>
        @endforeach
    </select>
</div>
@once
    @push('js')
        <script>
            $(function () {
                $('.select2').select2()
            })

        </script>
    @endpush
    @push('css')
        <style>
            .select2-search__field {
                height: 24px !important;
                border: none !important;
            }

            .select2-selection__choice__remove {
                border: none !important;
            }
        </style>
    @endpush
@endonce
