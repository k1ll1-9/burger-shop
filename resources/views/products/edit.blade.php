@extends('layouts.main')

@section('content_header')
    <h1>Редактировать продукт</h1>
@stop

@section('content-body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <x-ui.form action="{{route('products.update',$product->id)}}"
                           method="put"
                           class="col-4">
                    <div class="form-group">
                        <x-ui.input type="text"
                                    name="title"
                                    value="{{old('title') ?? $product->title}}"
                                    placeholder="Наименование"/>
                    </div>
                    <div class="form-group">
                        <x-ui.checkbox name="active"
                                       :checked="(bool)$product->active"
                                       label="Активен"/>
                    </div>
                    <div class="form-group">
                        <x-ui.input type="number"
                                    name="sort"
                                    value="{{$product->sort ?? old('sort')}}"
                                    placeholder="Сортировка"/>
                    </div>
                    <div class="form-group">
                        <x-ui.textarea rows="5"
                                       name="description"
                                       value="{{$product->description ?? old('description')}}"
                                       placeholder="Описание продукта"/>
                    </div>
                    <div class="form-group">
                        <x-ui.file :name="'image'"
                                   placeholder="Выберите изображение"/>
                    </div>
                    <div class="form-group">
                        <x-ui.input type="number"
                                    name="price"
                                    value="{{$product->price ?? old('price')}}"
                                    placeholder="Цена"/>
                    </div>
                    <div class="form-group">
                        <x-ui.multiselect :name="'categories'"
                                          placeholder="Выберите категорию"
                                          :options="$categories"
                                          :selected="old('categories') ?? array_map(fn($el) =>  $el->id ,$product->categories->all())"/>
                    </div>
                    <div class="form-group">
                        <x-ui.checkbox name="special"
                                       label="Спецтовар"
                                       :checked="(bool)$product->special"/>
                    </div>
                    <div class="form-group">
                        <x-ui.buttons.submit value="Сохранить"/>
                    </div>
                </x-ui.form>
            </div>
        </div>
    </section>

@endsection

