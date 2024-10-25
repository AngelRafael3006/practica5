    {{--@dd($alumnos) --}}
    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif

    <a href="{{route('materias.create')}}" class="btn button btn-primary">Nvo</a>

    <div class="table-responsive-sm">
        <table class="table table-striped table-hover table-borderless table-warning align-middle">
            <thead class="table-light">
                <caption>
                    CATALOGO DE MATERIAS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Id materia</th>
                    <th>Nombre de materia</th>
                    <th>Nivel</th>
                    <th>Nombre mediano</th>
                    <th>Nombre corto</th>
                    <th>Modalidad</th>
                    <th>Id reticula</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $materias as $materia )
                <tr
                    class="table-warning"
                >
                    <td scope="row">{{ $materia->id }}</td>
                    <td>{{ $materia->idmateria }}</td>
                    <td>{{ $materia->nombremateria }}</td>
                    <td>{{ $materia->nivel }}</td>
                    <td>{{ $materia->nombremediano }}</td>
                    <td>{{ $materia->nombrecorto }}</td>
                    <td>{{ $materia->modalidad }}</td>
                    <td>{{ $materia->reticula_id }}</td>
                    <td><a href="{{route('materias.edit',$materia->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('materias.show',$materia->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('materias.show',$materia->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$materias->links()}}
    </div>
