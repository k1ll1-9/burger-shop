@extends('layouts.main')

@section('content_header')
    <h1>Добавить категорию</h1>
@stop

@section('content-body')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <x-ui.form action="{{route('categories.store')}}" method="post">
                    <div class="form-group">
                        <x-ui.input
                            type="text"
                            name="name"
                            placeholder="Наименование"
                        />
                    </div>
                    <div class="form-group">
                        <x-ui.buttons.submit/>
                    </div>
                </x-ui.form>
            </div>
        </div>
    </section>

@endsection

