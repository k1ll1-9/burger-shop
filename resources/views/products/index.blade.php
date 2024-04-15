@extends('layouts.main')

@section('content_header')
    <h1 class="my-3 ml-3">Продукты</h1>
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
                                    <th>Сортировка</th>
                                    <th>Название</th>
                                    <th>Активен</th>
                                    <th>Цена</th>
                                    <th>Специальное</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $id => $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->sort}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->active}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->special}}</td>
                                        <td>
                                            <a href="{{ route('categories.show',$product->id) }}">{{$product->name}}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('categories.edit',$product->id)}}"
                                               class="btn btn-success">
                                                Редактировать
                                            </a>
                                        </td>
                                        <td>
                                            <x-ui.buttons.delete :id="$product->id" :model="'categories'"/>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('products.create')}}" class="btn btn-success">Добавить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

