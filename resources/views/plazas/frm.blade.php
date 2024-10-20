@extends('plantilla/plantilla2')

@section('contenido1')
    @include('plazas/tablahtml')
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
            <h1>Insertando FRM Plazas2</h1>
            <form action="{{ route('plazas.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM Plazas2</h1>
            <form action="{{ route('plazas.update', $plaza->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM Plazas2</h1>
            <form action="{{ route('plazas.destroy', $plaza->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="idplaza" class="col-4 col-form-label">ID de la plaza</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idplaza" id="idplaza" placeholder="ID de la plaza"
                    value="{{ @old('idplaza', $plaza->idplaza) }} " {{ $des }} />
                @error('idplaza')
                    <p>Error en el id: {{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombreplaza" class="col-4 col-form-label">Nombre</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreplaza" id="nombreplaza"
                    placeholder="Nombre de la plaza" value="{{ @old('nombreplaza', $plaza->nombreplaza) }} "
                    {{ $des }} />
                @error('nombreplaza')
                    <p>Error en el nombre: {{ $message }}</p>
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
