@extends('plantilla/plantilla2')

@section('contenido1')
    @include('periodos/tablahtml')
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
            <h1>Insertando FRM periodos</h1>
            <form action="{{ route('periodos.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM periodos</h1>
            <form action="{{ route('periodos.update', $periodo->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM periodos</h1>
            <form action="{{ route('periodos.destroy', $periodo->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="idperiodo" class="col-4 col-form-label">ID del periodo</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idperiodo" id="idperiodo" placeholder="ID del departamento"
                value="{{ @old('idperiodo', $periodo->idperiodo) }} " {{ $des }} />
                @error('idperiodo')
                    <p>Error en el id del periodo: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="periodo" class="col-4 col-form-label">Periodo</label>
            <div class="col-8">
                <input type="text" class="form-control" name="periodo" id="periodo" placeholder="Nombre del periodo"
                    value="{{ @old('periodo', $periodo->periodo) }} " {{ $des }} />
                @error('periodo')
                    <p>Error en el Periodo: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="desccorta" class="col-4 col-form-label">desccorta</label>
            <div class="col-8">
                <input type="text" class="form-control" name="desccorta" id="desccorta" placeholder="desccorta"
                    value="{{ @old('desccorta', $periodo->desccorta) }} " {{ $des }} />
                @error('desccorta')
                    <p>Error en el desccorta: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fechaini" class="col-4 col-form-label">Fecha inicial</label>
            <div class="col-8">
                <input type="text" class="form-control" name="fechaini" id="fechaini" placeholder="Nombre mediano"
                    value="{{ @old('fechaini', $periodo->fechaini) }} " {{ $des }} />
                @error('fechaini')
                    <p>Error en la fecha inicial: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fechafin" class="col-4 col-form-label">Fecha fin</label>
            <div class="col-8">
                <input type="text" class="form-control" name="fechafin" id="fechafin" placeholder="Nombre corto"
                    value="{{ @old('fechafin', $periodo->fechafin) }} " {{ $des }} />
                @error('fechafin')
                    <p>Error en la fecha fin: {{ $message }}</p>
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
