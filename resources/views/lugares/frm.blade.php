@extends('plantilla/plantilla2')

@section('contenido1')
    @include('lugares/tablahtml')
@endsection

@section('contenido2')
    <div class="container">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
        @if ($accion == 'C')
            <h1>Insertando FRM lugares</h1>
            <form action="{{ route('lugares.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM lugares</h1>
            <form action="{{ route('lugares.update', $lugar->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM lugares</h1>
            <form action="{{ route('lugares.destroy', $lugar->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="nombrelugar" class="col-4 col-form-label">Nombre del lugar</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrelugar" id="nombrelugar" placeholder="Nombre del lugar"
                    value="{{ @old('nombrelugar', $lugar->nombrelugar) }} " {{ $des }} />
                @error('nombrelugar')
                    <p>Error en el nombre del lugar: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombrecorto" class="col-4 col-form-label">Nombre corto</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrecorto" id="nombrecorto" placeholder="Nombre corto"
                    value="{{ @old('nombrecorto', $lugar->nombrecorto) }} " {{ $des }} />
                @error('tipo')
                    <p>Error en el nombre corto: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">
                    {{ $txtbtn }}
                </button>
            </div>
        </div>
        </form>
    </div>
@endsection
