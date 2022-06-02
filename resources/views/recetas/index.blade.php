@extends('layouts.app');

@section('content')
    <h1>Recetas</h1>

    @foreach ( $recetas as $recetas )
        <li>{{ $recetas }}</li>
    @endforeach

    <h2>Categorias</h2>
    @foreach ( $categorias as $categorias )
        <li>{{ $categorias }}</li>
    @endforeach
@endsection