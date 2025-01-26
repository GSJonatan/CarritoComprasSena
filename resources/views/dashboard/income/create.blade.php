@extends('dashboard.master')
@section('titulo','Nuevo Ingreso')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <form action="{{route('income.store')}}" method="post">
    @csrf
    <div class="form-group row">
        <label for="receipt_type" class="col-sm-2 col-form-label">Tipo Recibo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="receipt_type" id="receipt_type" >
        </div>
    </div>

    <div class="form-group row">
        <label for="receipt_series" class="col-sm-2 col-form-label">Serie del Resivo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa el serial del recibo">
        </div>
    </div>

    <div class="form-group row">
        <label for="receipt_number" class="col-sm-2 col-form-label">Número del Resivo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="receipt_number" id="receipt_number">
        </div>
    </div>

    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Fecha de realización</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="date" id="date">
        </div>
    </div>
    <div class="form-group row">
        <label for="tax" class="col-sm-2 col-form-label">Impuesto (Tax)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="tax" id="tax" placeholder="Ingresa el % de impuesto">
        </div>
    </div>

    <div class="form-group row">
        <label for="total" class="col-sm-2 col-form-label">Total</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="total" id="total" placeholder="Ingresa el total del ingreso">
        </div>
    </div>

    <div class="form-group row">
        <label for="status">Estado</label>
        <div class="col-sm-10">
            <select class="form-control" name="status" id="status">
                <option value="1">Aprovado</option>
                <option value="0">Rechazado</option>
            </select>
        </div>
    </div>

    
    {{-- <div class="form-group row">
        <label for="Category" class="col-sm-2 col-form-label">Categoría</label>
        <div class="col-sm-10">
            <select name="category" id="category" class="form-selec" required>
                <option value="">Seleccionar Categoría</option>
                @foreach($category as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div> --}} 
   
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class= "btn btn-success">Registrar</button>
            <a href="{{url('dashboard/income')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>

    </form>
</div>


@endsection