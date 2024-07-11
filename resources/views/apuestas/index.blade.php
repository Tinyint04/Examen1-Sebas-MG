@extends('Componentes.app')

@section('content')
    <div class="container">
        <!DOCTYPE html>
        <html>

        <head>
            <title>Apuestas</title>
        </head>

        <body>
            <h1>Lista de Apuestas</h1>
            <!-- Link to create a new bet -->
            <a href="{{ route('apuestas.create') }}" class="btn btn-primary mb-3">Crear Nueva Apuesta</a>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Juego</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                </tr>
                @foreach ($apuestas as $apuesta)
                    <tr>
                        <td>{{ $apuesta->id }}</td>
                        <td>{{ $apuesta->juego->nombre }}</td>
                        <td>{{ $apuesta->fecha }}</td>
                        <td>{{ $apuesta->monto }}</td>
                    </tr>
                @endforeach
            </table>
        </body>

        </html>



    </div>
@endsection
