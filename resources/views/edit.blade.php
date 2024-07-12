@extends('layout')

@section('titulo', 'Editar Servicio')


@section('content')
    <table class="table table-striped">
        <tr>
            <th colspan="4">Editar Servicio</th>
        </tr>
        @if ($errors->any())
            <div class="alert alert-danger alert-fixed-bottom">
                <strong>Datos incorrectos:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('servicios.update',$servicio)}}" method="post">
            @csrf @method('PUT')
            <tr>
                <td>Titulo</td>
                <td><input type="text" name="titulo"  value="{{ old( 'titulo', $servicio->titulo) }}"></td>
            </tr>
            <tr>
                <td>Descripcion</td>
                <td><input type="text" name="descripcion" value="{{ old( 'descripcion', $servicio->descripcion) }}"></td>
            </tr>
            <tr>
                <td colspan="2"><button>Editar</button></td>
            </tr>

        </form>

    </table>
@endsection