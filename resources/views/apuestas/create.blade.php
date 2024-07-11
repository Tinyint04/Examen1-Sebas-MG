<!-- resources/views/apuestas/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Crear Apuesta</h1>
    <form action="{{ route('apuestas.store') }}" method="POST">
        @csrf
        <div>
            <label for="id_juego">Juego</label>
            <select name="id_juego" id="id_juego" required>
                @foreach ($juegos as $juego)
                    <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" required>
        </div>
        <div>
            <label for="monto">Monto</label>
            <input type="number" name="monto" id="monto" required>
        </div>
        <button type="submit">Crear</button>
    </form>
@endsection
