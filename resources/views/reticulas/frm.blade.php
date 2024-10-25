@extends('plantilla/plantilla2')

@section('contenido1')
    @include('reticulas/tablahtml')
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
            <h1>Insertando FRM reticulas</h1>
            <form action="{{ route('reticulas.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM reticulas</h1>
            <form action="{{ route('reticulas.update', $reticula->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM reticulas</h1>
            <form action="{{ route('reticulas.destroy', $reticula->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="idreticula" class="col-4 col-form-label">ID de la reticula</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idreticula" id="idreticula" placeholder="ID de la reticula"
                value="{{ @old('idreticula', $reticula->idreticula) }} " {{ $des }} />
                @error('idreticula')
                    <p>Error en el id del reticula: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="descripcion" class="col-4 col-form-label">Descripcion</label>
            <div class="col-8">
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion"
                    value="{{ @old('descripcion', $reticula->descripcion) }} " {{ $des }} />
                @error('descripcion')
                    <p>Error en la descripcion: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fechaenvigor" class="col-4 col-form-label">Fecha en vigor</label>
            <div class="col-8">
                <input type="text" class="form-control" name="fechaenvigor" id="fechaenvigor" placeholder="Fecha en vigor"
                    value="{{ @old('fechaenvigor', $reticula->fechaenvigor) }} " {{ $des }} />
                @error('fechaenvigor')
                    <p>Error en la fecha en vigor: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="carrera_id" class="col-4 col-form-label">ID carrera</label>
            <div class="col-8">
                <input type="text" class="form-control" name="carrera_id" id="carrera_id" placeholder="id carrera"
                    value="{{ @old('carrera_id', $reticula->carrera_id) }} " {{ $des }} />
                @error('carrera_id')
                    <p>Error en el id carrera: {{ $message }}</p>
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
