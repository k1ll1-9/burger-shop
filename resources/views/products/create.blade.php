@extends('layouts.main')

@section('content_header')
    <h1>Добавить продукт</h1>
@stop

@section('content-body')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <x-ui.form action="{{route('products.store')}}"
                           method="post"
                           class="col-4">
                    <div class="form-group">
                        <x-ui.input type="text"
                                    name="title"
                                    placeholder="Наименование"/>
                    </div>
                    <div class="form-group">
                        <x-ui.checkbox name="active" label="Активен"/>
                    </div>
                    <div class="form-group">
                        <x-ui.input type="number"
                                    name="sort"
                                    placeholder="Сортировка"/>
                    </div>
                    <div class="form-group">
                        <x-ui.textarea rows="5"
                                       name="description"
                                       placeholder="Описание продукта"/>
                    </div>
                    <div class="form-group">
                        <x-ui.file :name="'image'"
                                   placeholder="Выберите изображение"/>
                    </div>
                    <div class="form-group">
                        <x-ui.input type="number"
                                    name="price"
                                    placeholder="Цена"/>
                    </div>
                    <div class="form-group">
                        <x-ui.multiselect :name="'categories'"
                                          placeholder="Выберите категорию"
                                          :categories="$categories"/>
                    </div>
                    <div class="form-group">
                        <x-ui.checkbox name="special" label="Спецтовар"/>
                    </div>
                    <div class="form-group">
                        <x-ui.buttons.submit/>
                    </div>
                </x-ui.form>
            </div>
        </div>
    </section>

@endsection

