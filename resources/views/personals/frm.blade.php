@extends('plantilla/plantilla2')

@section('contenido1')
    @include('personals/tablahtml')
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
            <h1>Insertando FRM Personal</h1>
            <form action="{{ route('personals.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM Personal</h1>
            <form action="{{ route('personals.update', $personal->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM Personal</h1>
            <form action="{{ route('personals.destroy', $personal->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="RFC" class="col-4 col-form-label">RFC del personal</label>
            <div class="col-8">
                <input type="text" class="form-control" name="RFC" id="RFC" placeholder="RFC del personal"
                    value="{{ @old('RFC', $personal->RFC) }} " {{ $des }} />
                @error('RFC')
                    <p>Error en el RFC: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombres" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombres" id="nombres"
                    placeholder="Nombre del personal" value="{{ @old('nombres', $personal->nombres) }} "
                    {{ $des }} />
                @error('nombres')
                    <p>Error en el nombre: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellidop" class="col-4 col-form-label">Apellido Paterno</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidop" id="apellidop"
                    placeholder="Apellido del personal" value="{{ @old('apellidop', $personal->apellidop) }} "
                    {{ $des }} />
                @error('apellidop')
                    <p>Error en el apellido paterno: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="apellidom" class="col-4 col-form-label">Apellido Materno</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidom" id="apellidom"
                    placeholder="Apellidom del personal" value="{{ @old('apellidom', $personal->apellidom) }} "
                    {{ $des }} />
                @error('apellidom')
                    <p>Error en el apellido materno: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="licenciatura" class="col-4 col-form-label">Licenciatura</label>
            <div class="col-8">
                <input type="text" class="form-control" name="licenciatura" id="licenciatura"
                    placeholder="Licenciatura del personal" value="{{ @old('licenciatura', $personal->licenciatura) }} "
                    {{ $des }} />
                @error('licenciatura')
                    <p>Error en la licenciatura: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lictit" class="col-4 col-form-label">LicTit</label>
            <div class="col-8">
                <input type="text" class="form-control" name="lictit" id="lictit"
                    placeholder="Lictit del personal" value="{{ @old('lictit', $personal->lictit) }} "
                    {{ $des }} />
                @error('lictit')
                    <p>Error en lictit: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="especializacion" class="col-4 col-form-label">Especializacion</label>
            <div class="col-8">
                <input type="text" class="form-control" name="especializacion" id="especializacion"
                    placeholder="Especializacion" value="{{ @old('especializacion', $personal->especializacion) }} "
                    {{ $des }} />
                @error('especializacion')
                    <p>Error en la especializacion: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="esptit" class="col-4 col-form-label">Esptit</label>
            <div class="col-8">
                <input type="text" class="form-control" name="esptit" id="esptit"
                    placeholder="Esptit" value="{{ @old('esptit', $personal->esptit) }} "
                    {{ $des }} />
                @error('esptit')
                    <p>Error en la esptit: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="maestria" class="col-4 col-form-label">Maestria</label>
            <div class="col-8">
                <input type="text" class="form-control" name="maestria" id="maestria"
                    placeholder="Maestria" value="{{ @old('maestria', $personal->maestria) }} "
                    {{ $des }} />
                @error('maestria')
                    <p>Error en la maestria: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="maetit" class="col-4 col-form-label">Maetit</label>
            <div class="col-8">
                <input type="text" class="form-control" name="maetit" id="maetit"
                    placeholder="Maetit" value="{{ @old('maetit', $personal->maetit) }} "
                    {{ $des }} />
                @error('maetit')
                    <p>Error en maetit: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="doctorado" class="col-4 col-form-label">Doctorado</label>
            <div class="col-8">
                <input type="text" class="form-control" name="doctorado" id="doctorado"
                    placeholder="Doctorado" value="{{ @old('doctorado', $personal->doctorado) }} "
                    {{ $des }} />
                @error('doctorado')
                    <p>Error en el doctorado: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="doctit" class="col-4 col-form-label">Doctit</label>
            <div class="col-8">
                <input type="text" class="form-control" name="doctit" id="doctit"
                    placeholder="Doctit" value="{{ @old('doctit', $personal->doctit) }} "
                    {{ $des }} />
                @error('doctit')
                    <p>Error en el doctit: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fechaingsep" class="col-4 col-form-label">Fecha ing sep</label>
            <div class="col-8">
                <input type="text" class="form-control" name="fechaingsep" id="fechaingsep"
                    placeholder="Fechaingsep" value="{{ @old('fechaingsep', $personal->fechaingsep) }} "
                    {{ $des }} />
                @error('fechaingsep')
                    <p>Error en la fechaingsep: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="fechaingins" class="col-4 col-form-label">Fecha ing ins</label>
            <div class="col-8">
                <input type="text" class="form-control" name="fechaingins" id="fechaingins"
                    placeholder="Fechaingins" value="{{ @old('fechaingins', $personal->fechaingins) }} "
                    {{ $des }} />
                @error('fechaingins')
                    <p>Error en la fechaingins: {{ $message }}</p>
                @enderror
            </div>
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
