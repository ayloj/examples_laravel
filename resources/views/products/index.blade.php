@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Listado de Productos
                            <a href="{{route('products.add')}}" class="btn btn-success btn-sm float-right">Nuevo producto</a>
                        </div>
                        <div class="card-body">
                            @if(session('info'))
                                {{session('info')}}
                            @endif

                            <table class="table table-hover table-sm">
                                <thead>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Acción</th>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="javascript: document.getElementById('delete-{{$product->id}}').submit()" class="btn btn-danger btn-sm">Eliminar</a>
                                            <form id="delete-{{$product->id}}" action="{{route('products.delete', $product->id)}}"  method="post">
                                                {{method_field('delete')}}
                                                {{csrf_field()}}
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            Bienvenido {{ auth()->user()->name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
