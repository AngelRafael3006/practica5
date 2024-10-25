@extends('plantilla/plantilla2')

@section('contenido1')
    @include('carreras/tablahtml')
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
            <h1>Insertando FRM carreras</h1>
            <form action="{{ route('carreras.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM carreras</h1>
            <form action="{{ route('carreras.update', $carrera->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM carreras</h1>
            <form action="{{ route('carreras.destroy', $carrera->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="idcarrera" class="col-4 col-form-label">ID de la carrera</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idcarrera" id="idcarrera" placeholder="ID de la carrera"
                value="{{ @old('idcarrera', $carrera->idcarrera) }} " {{ $des }} />
                @error('idcarrera')
                    <p>Error en el id del carrera: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombrecarrera" class="col-4 col-form-label">Nombre del carrera</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrecarrera" id="nombrecarrera" placeholder="Nombre de la carrera"
                    value="{{ @old('nombrecarrera', $carrera->nombrecarrera) }} " {{ $des }} />
                @error('nombrecarrera')
                    <p>Error en el nombre del carrera: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombremediano" class="col-4 col-form-label">Nombre mediano</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombremediano" id="nombremediano" placeholder="Apellido paterno"
                    value="{{ @old('nombremediano', $carrera->nombremediano) }} " {{ $des }} />
                @error('nombremediano')
                    <p>Error en el Nombre mediano: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombrecorto" class="col-4 col-form-label">Nombre corto</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrecorto" id="nombrecorto" placeholder="Nombre corto"
                    value="{{ @old('nombrecorto', $carrera->nombrecorto) }} " {{ $des }} />
                @error('tipo')
                    <p>Error en el nombre corto: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="depto_id" class="col-4 col-form-label">ID depto</label>
            <div class="col-8">
                <input type="text" class="form-control" name="depto_id" id="depto_id" placeholder="depto_id"
                    value="{{ @old('depto_id', $carrera->depto_id) }} " {{ $des }} />
                @error('tipo')
                    <p>Error en el depto_id: {{ $message }}</p>
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
