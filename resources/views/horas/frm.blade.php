@extends('plantilla/plantilla2')

@section('contenido1')
    @include('horas/tablahtml')
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
            <h1>Insertando FRM horas</h1>
            <form action="{{ route('horas.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM horas</h1>
            <form action="{{ route('horas.update', $hora->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM horas</h1>
            <form action="{{ route('horas.destroy', $hora->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="iddepto" class="col-4 col-form-label">ID del hora</label>
            <div class="col-8">
                <input type="text" class="form-control" name="iddepto" id="iddepto" placeholder="ID del departamento"
                value="{{ @old('iddepto', $hora->iddepto) }} " {{ $des }} />
                @error('iddepto')
                    <p>Error en el id del hora: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombredepto" class="col-4 col-form-label">Nombre del hora</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombredepto" id="nombredepto" placeholder="Nombre del hora"
                    value="{{ @old('nombredepto', $hora->nombredepto) }} " {{ $des }} />
                @error('nombredepto')
                    <p>Error en el nombre del hora: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombremediano" class="col-4 col-form-label">Nombre mediano</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombremediano" id="nombremediano" placeholder="Apellido paterno"
                    value="{{ @old('nombremediano', $hora->nombremediano) }} " {{ $des }} />
                @error('nombremediano')
                    <p>Error en el Nombre mediano: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombrecorto" class="col-4 col-form-label">Nombre corto</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrecorto" id="nombrecorto" placeholder="Nombre corto"
                    value="{{ @old('nombrecorto', $hora->nombrecorto) }} " {{ $des }} />
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
