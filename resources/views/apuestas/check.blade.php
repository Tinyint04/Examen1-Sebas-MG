<!-- resources/views/apuestas/comparar.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Comparación de Dinero entre Juegos de Cartas y No Cartas</h1>
    <p>Total dinero en juegos de cartas: {{ $totalCartas }}</p>
    <p>Total dinero en juegos que no son de cartas: {{ $totalNoCartas }}</p>
    <p>El dinero total es mayor en los juegos de {{ $mayor }}.</p>
@endsection
