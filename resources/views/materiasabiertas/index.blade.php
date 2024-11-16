@extends('plantilla/plantilla1')

@section('contenido2')

        @csrf
        <div class="row">
            <div class="col-10">
                <h3>Apertura de materias</h3>
            </div>
            <div class="col">
                <form action="{{ route('materiasa.store') }}" method="POST">
                    @csrfi
                    <select name="idperiodo" id="idperiodo">
                        <option value="-1">Selecciona periodo</option>
                        @foreach ($periodos as $periodo)
                        <option value="{{$periodo->id}}" @if ( session('periodo->id')==$periodo->id)
                            {{ "selected" }}
                        @endif
                        >{{$periodo->periodo}}</option>
                        @endforeach
                    </select><br>
                    <select name="idcarrera" id="idcarrera" onchange="this.form.">
                        <option value="-1">Sel carrera</option>
                        @foreach ($carreras as $carr)
                            <option value="{{ $carr->id }}" @if ($carr->id == @session('carrera_id'))
                                {{ "selected" }}
                            @endif
                            >
                            {{$carr->id}} {{$carr->nombrecorto}}</option>
                        @endforeach
                    </select>
                </form>
                </div>
            </div>
        <br>
        <div class="row">
            <div class="col">
                <form action="{{ route('materiasa.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="eliminar" id="eliminar" value="">
                <button>Sem1</button><br>

                 @if ($carrera->count())
                    @foreach ($carrera[0]->reticulas[0]->materias as $materia)
                        <input type="checkbox"
                         name="m{{ $materia['id'] }}"
                         id="m{{ $materia['id'] }}"
                            value="{{ $materia['id'] }}"
                            onchange="enviar(this)"
                            @if ($ma->firstWhere('materia_id', $materia['id']))
                            {{ "checked" }}
                            @endif
                            >
                        <label for="">{{ $materia['nombrecorto'] }}</label>
                        <br>
                    @endforeach
            @endif
                </form>
            </div>
        </div>


{{--
        <div class="row">
            <div class="col">
                <button>Sem1</button><br>
             @foreach ($carrera->reticulas[0]->materias)
            <input type="checkbox" name="m1" id="m1" value="1" onchange="this.form.submit()">mat 1<br>
            <input type="checkbox" name="m2" id="m2" value="2" onchange="this.form.submit()">mat 2<br>
            <input type="checkbox" name="m3" id="m3" value="3" onchange="this.form.submit()">mat 3<br>
            <input type="checkbox" name="m4" id="m4" value="4" onchange="this.form.submit()">mat 4<br>
            <input type="checkbox" name="m5" id="m5" value="5" onchange="this.form.submit()">mat 5<br>
            <input type="checkbox" name="m6" id="m6" value="6" onchange="this.form.submit()">mat 6<br>
            <input type="checkbox" name="m7" id="m7" value="7" onchange="this.form.submit()">mat 7<br>
        </div>
        <div class="col">
            <button>Sem1</button><br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 1<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 2<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 3<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 5<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 6<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 4<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 7<br>
        </div>
        <div class="col">
            <button>Sem1</button><br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 1<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 2<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 3<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 5<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 6<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 4<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 7<br>
        </div>
        <div class="col">
            <button>Sem1</button><br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 1<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 2<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 3<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 5<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 6<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 4<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 7<br>
        </div>
        <div class="col">
            <button>Sem1</button><br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 1<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 2<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 3<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 5<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 6<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 4<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 7<br>
        </div>
        <div class="col">
            <button>Sem1</button><br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 1<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 2<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 3<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 5<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 6<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 4<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 7<br>
        </div>
        <div class="col">
            <button>Sem1</button><br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 1<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 2<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 3<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 5<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 6<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 4<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 7<br>
        </div>
        <div class="col">
            <button>Sem1</button><br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 1<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 2<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 3<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 5<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 6<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 4<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 7<br>
        </div>
        <div class="col">
            <button>Sem1</button><br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 1<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 2<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 3<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 5<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 6<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 4<br>
            <input type="checkbox" name="idmateria" id="idmateria" value="idmateria">mat 7<br>
        </div> --}}

@endsection
