@extends('layout')

@section('titulo', 'Ingresar Alumno')

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger ">
            <strong>Datos incorrectos:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">Ingresar datos del alumno</th>
        </tr>
        <form action="{{ route('servicios.store') }}" method="POST" onsubmit="calcularPromedioYCondicion(event)">
            {{ csrf_field() }}
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" value="{{ old('nombre') }}"></td>
            </tr>
            <tr>
                <td>Curso</td>
                <td><input type="text" name="curso" value="{{ old('curso') }}"></td>
            </tr>
            <tr>
                <td>Nota 1</td>
                <td><input type="text" id="nota1" name="nota1" value="{{ old('nota1') }}"></td>
            </tr>
            <tr>
                <td>Nota 2</td>
                <td><input type="text" id="nota2" name="nota2" value="{{ old('nota2') }}"></td>
            </tr>
            <input type="hidden" id="promedio" name="promedio">
            <input type="hidden" id="condicion" name="condicion">
            <input type="hidden" id="fechareg" name="fechareg">
            <tr>
                <td colspan="2"><button type="submit">guardar</button></td>
            </tr>
        </form>
    </table>

    <script>
        function calcularPromedioYCondicion(event) {
            event.preventDefault(); // Evita que el formulario se envíe inmediatamente

            const nota1 = parseFloat(document.getElementById('nota1').value);
            const nota2 = parseFloat(document.getElementById('nota2').value);

            if (isNaN(nota1) || isNaN(nota2)) {
                alert("Por favor, ingresa valores válidos para las notas.");
                return;
            }

            const promedio = (nota1 + nota2) / 2;
            const condicion = promedio >= 14 ? 'aprobado' : 'desaprobado';

            document.getElementById('promedio').value = promedio.toFixed(2);
            document.getElementById('condicion').value = condicion;

            const fechaActual = new Date().toISOString().split('T')[0]; // Obtiene la fecha actual en formato YYYY-MM-DD
            document.getElementById('fechareg').value = fechaActual;

            event.target.submit(); // Envía el formulario con los valores calculados
        }
    </script>

@endsection



