@extends('plantilla/plantilla2')

@section('contenido1')
    @include('edificios/tablahtml')
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
            <h1>Insertando FRM edificios</h1>
            <form action="{{ route('edificios.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM edificios</h1>
            <form action="{{ route('edificios.update', $edificio->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM edificios</h1>
            <form action="{{ route('edificios.destroy', $edificio->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="nombreedificio" class="col-4 col-form-label">Nombre del edificio</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreedificio" id="nombreedificio" placeholder="Nombre del edificio"
                    value="{{ @old('nombreedificio', $edificio->nombreedificio) }} " {{ $des }} />
                @error('nombreedificio')
                    <p>Error en el nombre del edificio: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombrecorto" class="col-4 col-form-label">Nombre corto</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrecorto" id="nombrecorto" placeholder="Nombre corto"
                    value="{{ @old('nombrecorto', $edificio->nombrecorto) }} " {{ $des }} />
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
