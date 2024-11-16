@extends('plantilla/plantilla2')

@section('contenido1')
    @include('personalplazas/tablahtml')
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
            <form action="{{ route('personalplazas.store') }}" method="POST">
        @endif
        @if ($accion == 'E')
            <h1>EDITANDO FRM Plazas2</h1>
            <form action="{{ route('personalplazas.update', $personalplaza->id) }}" method="POST">
                @method('PUT')
        @endif
        @if ($accion == 'S')
            <h1>ELIMINANDO FRM Plazas2</h1>
            <form action="{{ route('personalplazas.destroy', $personalplaza->id) }}" method="POST">
                @method('DELETE')
        @endif
        @csrf
        <div class="mb-3 row">
            <label for="tiponombramiento" class="col-4 col-form-label">Tipo de nombramiento</label>
            <div class="col-8">
                <input type="text" class="form-control" name="tiponombramiento" id="tiponombramiento" placeholder="Tipo de nombramiento"
                    value="{{ @old('tiponombramiento', $personalplaza->tiponombramiento) }} " {{ $des }} />
                @error('tiponombramiento')
                    <p>Error en el tipo de nombramiento: {{ $message }}</p>
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
