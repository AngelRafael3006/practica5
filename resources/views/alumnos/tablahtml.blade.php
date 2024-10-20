    {{--@dd($alumnos) --}}
    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif

    <a href="{{route('alumnos.create')}}" class="btn button btn-primary">Nvo</a>

    <div class="table-responsive-sm">
        <table class="table table-striped table-hover table-borderless table-warning align-middle">
            <thead class="table-light">
                <caption>
                    CATALOGO DE ALUMNOS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Numero de control</th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Sexo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $alumnos as $alumno )
                <tr
                    class="table-warning"
                >
                    <td scope="row">{{ $alumno->id }}</td>
                    <td>{{ $alumno->noctrl }}</td>
                    <td>{{ $alumno->nombrealumno }}</td>
                    <td>{{ $alumno->apellidopaterno }}</td>
                    <td>{{ $alumno->apellidomaterno }}</td>
                    <td>{{ $alumno->sexo }}</td>
                    <td><a href="{{route('alumnos.edit',$alumno->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('alumnos.show',$alumno->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$alumnos->links()}}
    </div>
