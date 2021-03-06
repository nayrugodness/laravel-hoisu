@extends('layouts.app');

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

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
            <form method="POST" enctype="multipart/form-data" action="{{ route('recetas.store') }}">
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
                
                <div class="form-group">
                    <label for="categoria">
                        Categoria
                    </label>
                    <select name="categoria"
                            class="form-control"
                            id="categoria">
                            <option value=""><-- Selecione una categoria --></option>
                        @foreach ($categorias as $id => $categoria)
                            <option value="{{ $id }}"
                                {{ old('categoria' == $id ? 'selected' : '')}}
                                {{ $categoria }}>
                            </option>
                        @endforeach
                    </select>
                    @error('categoria')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>

                        </span>
                    @enderror   
                </div>
                <div class="form-group mt-3">
                    <label for="preparacion">
                        Preparaci??n
                    </label>
                    <input id="preparacion" type="hidden" name="preparacion" value="{{ old('preparacion') }}">
                    <trix-editor input="preparacion"></trix-editor>
                </div>

                <div class="form-group mt-3">
                    <label for="ingredientes">
                        ingredientes
                    </label>
                    <input id="ingredientes" type="hidden" name="ingredientes" value="{{ old('ingredientes') }}">
                    <trix-editor input="ingredientes"></trix-editor>
                </div>

                <div class="form-group mt-3">
                    <label for="imagen">
                        Imagen
                    </label>
                    <input id="imagen" type="file" name="imagen" value="{{ old('imagen') }}">
                    @error('imagen')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection