@extends('layouts.main')

@section('content_header')
    <h1>Редактировать категорию</h1>
@stop

@section('content-body')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <x-ui.form action="{{route('categories.update', $category->id)}}" method="put">
                    <div class="form-group">
                        <x-ui.input
                            type="text"
                            name="name"
                            value="{{$category->name}}"
                        />
                    </div>
                    <div class="form-group">
                        <x-ui.buttons.submit value="Сохранить"/>
                    </div>
                </x-ui.form>
            </div>
        </div>
    </section>

@endsection

