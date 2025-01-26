@extends('dashboard.master')
@section('titulo','NuevaPersona')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <form action="{{route('person.store')}}" method="post">
    @csrf

    <div class="form-group row">
        <label for="type">Tipo Cliente</label>
        <div class="col-sm-10">
            <select class="form-control" name="type" id="type">
                <option value="1">Natural</option>
                <option value="2">Jurídico</option>
                <option value="3">Empresa</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="First_Name" class="col-sm-2 col-form-label">Nombres</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="First_Name" id="First_Name" placeholder="Nombres">
        </div>
    </div>
    <div class="form-group row">
        <label for="Last_Name" class="col-sm-2 col-form-label">Apellidos</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Apellidos">
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Type">Tipo de Documento</label>
        <div class="col-sm-10">
            <select class="form-control" name="Document_Type" id="Document_Type">
                <option value="1">CC</option>
                <option value="2">TI</option>
                <option value="3">TE</option>
                <option value="4">CE</option>
                <option value="5">NIT</option>
                <option value="6">PAS</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Number">Número del Documento</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="Document_Number" id="Document_Number"></textarea>
        </div> 
    </div>
    <div class="form-group row">
        <label for="Adress">Contraseña</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="Adress" id="Adress"></textarea>
        </div> 
    </div>
    <div class="form-group row">
        <label for="Phone">Número de Teléfono</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="Phone" id="Phone"></textarea>
        </div> 
    </div>
    <div class="form-group row">
        <label for="Email">Correo</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="Email" id="Email"></textarea>
        </div> 
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class= "btn btn-success">Registrar</button>
            <a href="{{url('dashboard/category')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>

    </form>
</div>


@endsection