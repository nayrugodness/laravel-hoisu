@extends('layouts.app');

@section('botones')
    <a class="btn btn-primary mr-2 text-white">
        Crear receta
    </a>
@endsection

@section('botones')
    <a href="{{ route('recetas.index') }}" class="btn btn-primary mr-2 text-white">
        Administra tus recetas
    </a>
@endsection

@section('content')
    <h2 class="text-center mb-5">Crea tus recetas</h2>



@endsection