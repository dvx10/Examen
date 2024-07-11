@extends('layout')

@section('titulo', 'Listado')


@section('content')
    <!-- <h2>Servicios</h2> -->

    <table class="table table-striped">
        
        <tr>
            <th>Lista de Alumnos</th>
        </tr>
        
        @if($alumnos)
            @foreach ($alumnos as $item)
            <tr>
                <td  collspan="4"><a href="{{ route('servicios.show',$item) }}">{{ $item->nombre }}</a></td>
            </tr>
                
            @endforeach
        @else
            <tr colspan="4">nada</tr>
        @endif
        
    </table>


    
@endsection
