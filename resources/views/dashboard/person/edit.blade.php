@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1 class="mb-4">Modificar Información del Cliente</h1>
    <form action="{{ url('dashboard/person/'.$person->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="type">Tipo Cliente</label>
        <div class="col-sm-10">
            <select class="form-control" name="type" id="type">
                <option value="1" {{$person->type == 1 ? 'selected':''}}>Natural</option>
                <option value="2" {{$person->type == 2 ? 'selected':''}}>Jurídico</option>
                <option value="3" {{$person->type == 3 ? 'selected':''}}>Empresa</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="First_Name" class="col-sm-2 col-form-label">Nombres</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="First_Name" id="First_Name" value="{{$person->First_Name}}" placeholder="Nombres">
        </div>
    </div>
    <div class="form-group row">
        <label for="Last_Name" class="col-sm-2 col-form-label">Apellidos</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{$person->Last_Name}}" placeholder="Apellidos">
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Type">Tipo de Documento</label>
        <div class="col-sm-10">
            <select class="form-control" name="Document_Type" id="Document_Type">
                <option value="1" {{$person->Document_Type == 1 ? 'selected':''}}>CC</option>
                <option value="2" {{$person->Document_Type == 2 ? 'selected':''}}>TI</option>
                <option value="3" {{$person->Document_Type == 3 ? 'selected':''}}>TE</option>
                <option value="4" {{$person->Document_Type == 4 ? 'selected':''}}>CE</option>
                <option value="5" {{$person->Document_Type == 5 ? 'selected':''}}>NIT</option>
                <option value="6" {{$person->Document_Type == 6 ? 'selected':''}}>PAS</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Number">Número del Documento</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="Document_Number" id="Document_Number">{{$person->Document_Number}}</textarea>
        </div> 
    </div>
    <div class="form-group row">
        <label for="Adress">Contraseña</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="Adress" id="Adress">{{$person->Adress}}</textarea>
        </div> 
    </div>
    <div class="form-group row">
        <label for="Phone">Número de Teléfono</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="Phone" id="Phone">{{$person->Phone}}</textarea>
        </div> 
    </div>
    <div class="form-group row">
        <label for="Email">Correo</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="Email" id="Email">{{$person->Email}}</textarea>
        </div> 
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class= "btn btn-success">Actualizar</button>
            <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
    </form>
</div>


@endsection