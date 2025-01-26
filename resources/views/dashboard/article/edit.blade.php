@extends('dashboard.master')
@section('titulo','Artículos')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1 class="mb-4">Modificar Artículo</h1>
    <form action="{{ url('dashboard/article/'.$article->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="code" class="col-sm-2 col-form-label">Codigo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="code" id="code" value="{{$article->code}}" placeholder="Ingresa el codigo del producto">
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" value="{{$article->name}}" placeholder="Ingresa el nombre del producto">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="Category" class="col-sm-2 col-form-label">Categoría</label>
        <div class="col-sm-10">
            <select name="category" id="category" class="form-selec" required>
                <option value="">Seleccionar Categoría</option>
                @foreach($category as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="Sale_Price" class="col-sm-2 col-form-label">Precio Venta</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Sale_Price" id="Sale_Price" value="{{$article->Sale_Price}}" placeholder="Ingresa el precio de venta">
        </div>
    </div>

    <div class="form-group row">
        <label for="stock" class="col-sm-2 col-form-label">Cantidad disponible(Stock)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="stock" id="stcok" value="{{$article->stcok}}" placeholder="Ingresa la cantidad disponible">
        </div>
    </div>

    <div class="form-group row">
        <label for="description">Descripción</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="description" id="description">{{$article->description}}</textarea>
        </div> 
    </div>

    <div class="form-group row">
        <label for="state">Estado</label>
        <div class="col-sm-10">
            <select class="form-control" name="state" id="state">
                <option value="1" {{$person->state == 1 ? 'selected':''}}>Activo</option>
                <option value="0" {{$person->state == 0 ? 'selected':''}}>Inactivo</option>
            </select>
        </div>
    </div>
    
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class= "btn btn-success">Actualizar</button>
            <a href="{{url('dashboard/article')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
    </form>
</div>


@endsection