@extends('layouts.main')

@section('content_header')
    <h1 class="my-3 ml-3">Категории</h1>
@stop

@section('content-body')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th style="width: 10%"></th>
                                    <th style="width: 10%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $id => $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>
                                            <a href="{{ route('categories.show',$category->id) }}">{{$category->name}}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('categories.edit',$category->id)}}"
                                               class="btn btn-success">
                                                Редактировать
                                            </a>
                                        </td>
                                        <td>
                                            <x-ui.buttons.delete :id="$category->id" :model="'categories'"/>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('categories.create')}}" class="btn btn-success">Добавить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

