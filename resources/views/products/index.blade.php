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
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Сортировка</th>
                                    <th class="text-center">Название</th>
                                    <th class="text-center">Активен</th>
                                    <th class="text-center">Цена</th>
                                    <th class="text-center">Специальное</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $id => $product)
                                    <tr>
                                        <td class="text-center">{{$product->id}}</td>
                                        <td class="text-center">{{$product->sort}}</td>
                                        <td class="text-center">{{$product->title}}</td>
                                        <td class="text-center">{{$product->active ? "Да" : "Нет"}}</td>
                                        <td class="text-center">{{$product->price}}</td>
                                        <td class="text-center">{{$product->special ? "Да" : "Нет"}}</td>
                                        <td>
                                            <a href="{{ route('products.edit',$product->id)}}"
                                               class="btn btn-success">
                                                Редактировать
                                            </a>
                                        </td>
                                        <td>
                                            <x-ui.buttons.delete :id="$product->id"
                                                                 model="products"
                                                                 message="Продукт будет удален"/>
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

