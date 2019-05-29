@extends('layouts.main')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edición de productos
                </div>
                <div class="card-body">
                    <form action="{{route('product.update', $product->id)}}" method="post">
                        {{ method_field('put') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <input type="text" class="form-control" name="description" value="{{$product->description}}">
                        </div>
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="number" class="form-control" name="price" value="{{$product->price}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
                <div class="card-footer">
                    Bienvenido {{ auth()->user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection