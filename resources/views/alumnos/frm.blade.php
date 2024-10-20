@extends('plantilla/plantilla2')

@section('contenido1')
    @include('alumnos/tablahtml')
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
            <h1>Insertando FRM alumnos</h1>
            <form action="{{ route('alumnos.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM Alumnos</h1>
            <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM Alumnos</h1>
            <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="noctrl" class="col-4 col-form-label">NoCtrl del alumno</label>
            <div class="col-8">
                <input type="text" class="form-control" name="noctrl" id="noctrl" placeholder="Numero de control del alumno"
                value="{{ @old('noctrl', $alumno->noctrl) }} " {{ $des }} />
                @error('noctrl')
                    <p>Error en el No control del alumno: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre del alumno</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del alumno"
                    value="{{ @old('nombre', $alumno->nombre) }} " {{ $des }} />
                @error('nombre')
                    <p>Error en el nombre del alumno: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellidop" class="col-4 col-form-label">Apellido paterno</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidop" id="apellidop" placeholder="Apellido paterno"
                    value="{{ @old('apellidop', $alumno->apellidop) }} " {{ $des }} />
                @error('apellidop')
                    <p>Error en el apellido paterno: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tipo" class="col-4 col-form-label">Apellido materno</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidom" id="apellidom" placeholder="Apellido materno"
                    value="{{ @old('apellidom', $alumno->apellidom) }} " {{ $des }} />
                @error('tipo')
                    <p>Error en el apellido materno: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="sexo" class="col-4 col-form-label">Sexo</label>
            <div class="col-8">
                <input type="text" class="form-control" name="sexo" id="sexo" placeholder="Sexo del alumno"
                    value="{{ @old('sexo', $alumno->sexo) }} " {{ $des }} />
                @error('tipo')
                    <p>Error en el sexo del alumno: {{ $message }}</p>
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
