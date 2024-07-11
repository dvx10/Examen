@extends('layout')

@section('titulo', 'Listado | ' .$servicio->nombre)


@section('content')
    <table class="table table-striped">
        <tr>
            <th>Alumno</th>
            <th>{{$servicio->nombre}}</th>
            <!-- <a href="{{route('servicios.edit',$servicio)}}">editar</a> -->
        </tr>
        <tr>
            <td>Curso</td>
            <td>{{$servicio->curso}}</td>
        </tr>
        <tr>
            <td >Nota 1</td>
            <td>{{$servicio->nota1}}</td>
        </tr>
        <tr>
            <td>Nota 2</td>
            <td>{{$servicio->nota2}}</td>
        </tr>
        <tr>
            <td>Promedio</td>
            <td>{{$servicio->promedio}}</td>
        </tr>
        <tr>
            <td>Condición</td>
            <td>{{$servicio->condicion}}</td>
        </tr>
        <tr>
            <td>Fecha de registro</td>
            <td>{{$servicio->fechareg}}</td>
        </tr>
        <tr>
            <td>{{$servicio->created_at->diffForHumans()}}</td>
        </tr>

    </table>
@endsection