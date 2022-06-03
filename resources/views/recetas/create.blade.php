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

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="POST" action="{{ route('recetas.store') }}" novalidate>
                @csrf
                <div class="form-group">
                    <label for="titulo">
                        Titulo receta
                    </label>
                    <input
                        type="text"
                        name="titulo"
                        class="form-control"
                        id="titulo"
                        placeholder="Titulo receta">
                </div>
                <div class="form-group" >
                    <input 
                        type="submit"
                        class="btn btn-primary"
                        value="Agregar receta">
                </div>
            </form>
        </div>
    </div>

@endsection