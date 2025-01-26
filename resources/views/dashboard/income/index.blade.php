@extends('dashboard.master')
@section('titulo','Ingreso')
@include('layouts/navigation')
@section('contenido')
<main>
    <div class="container py-4">
    <h1>Listado de Ingresos</h1>
    <br>
    <a href="{{url('dashboard/income/create')}}" class="btn btn-primary btn-sm">Nueva Ingreso</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id ingreso</th>
                <th>Id provedor</th>
                <th>Id usuario</th> 
                <th>Tipo recibo</th>
                <th>Serie recibo</th>
                <th>Número recibo</th>
                <th>Fecha</th>
                <th>Impuesto</th>
                <th>Total</th>
                <th>Estado</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($income as $income)
            <tr>
                <td scope="row">{{$income->id}}</td>
                <td>{{$income->person?->name}}</td>
                <td>{{$income->user?->name}}</td>
                <td>{{$income->receipt_type}}</td>
                <td>{{$income->receipt_series}}</td>
                <td>{{$income->receipt_number}}</td>
                <td>{{$income->date}}</td>  
                <td>{{$income->tax}}</td>
                <td>{{$income->total}}</td>
                <td>{{$income->status}}</td>
                <td>{{$income->created_at}}</td>
                <td>{{$income->update_at}}</td>

                <td><a href="{{url('dashboard/income/'.$income->id.'/edit')}}" class="bi bi-pencil"></a></td>
                <td>
                    <form action="{{url('dashboard/income/'.$income->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
                    </form>
                </td>

            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</main>
@endsection