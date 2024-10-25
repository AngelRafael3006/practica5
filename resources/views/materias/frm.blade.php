@extends('plantilla/plantilla2')

@section('contenido1')
    @include('materias/tablahtml')
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
            <h1>Insertando FRM materias</h1>
            <form action="{{ route('materias.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM materias</h1>
            <form action="{{ route('materias.update', $materia->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM materias</h1>
            <form action="{{ route('materias.destroy', $materia->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="idmateria" class="col-4 col-form-label">ID del materia</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idmateria" id="idmateria" placeholder="ID del departamento"
                value="{{ @old('idmateria', $materia->idmateria) }} " {{ $des }} />
                @error('idmateria')
                    <p>Error en el id del materia: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombremateria" class="col-4 col-form-label">Nombre del materia</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombremateria" id="nombremateria" placeholder="Nombre del materia"
                    value="{{ @old('nombremateria', $materia->nombremateria) }} " {{ $des }} />
                @error('nombremateria')
                    <p>Error en el nombre del materia: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nivel" class="col-4 col-form-label">Nivel</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nivel" id="nivel" placeholder="Nivel"
                    value="{{ @old('nivel', $materia->nivel) }} " {{ $des }} />
                @error('nivel')
                    <p>Error en el Nivel: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombremediano" class="col-4 col-form-label">Nombre Mediano</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombremediano" id="nombremediano" placeholder="Nombre mediano"
                    value="{{ @old('nombremediano', $materia->nombremediano) }} " {{ $des }} />
                @error('nombremediano')
                    <p>Error en el nombre mediano: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombrecorto" class="col-4 col-form-label">Nombre corto</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrecorto" id="nombrecorto" placeholder="Nombre corto"
                    value="{{ @old('nombrecorto', $materia->nombrecorto) }} " {{ $des }} />
                @error('nombrecorto')
                    <p>Error en el nombre corto: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="modalidad" class="col-4 col-form-label">Modalidad</label>
            <div class="col-8">
                <input type="text" class="form-control" name="modalidad" id="modalidad" placeholder="Modalidad"
                    value="{{ @old('modalidad', $materia->modalidad) }} " {{ $des }} />
                @error('modalidad')
                    <p>Error en la modalidad: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="reticula_id" class="col-4 col-form-label">Id reticula</label>
            <div class="col-8">
                <input type="text" class="form-control" name="reticula_id" id="reticula_id" placeholder="Id reticula"
                    value="{{ @old('reticula_id', $materia->reticula_id) }} " {{ $des }} />
                @error('reticula_id')
                    <p>Error en la reticula: {{ $message }}</p>
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
