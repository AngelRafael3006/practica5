    {{--@dd($alumnos) --}}

    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif


    <a href="{{route('personals.create')}}" class="btn button btn-primary">Nvo</a>

    <div
        class="table-responsive-sm"
    >
        <table
            class="table table-striped table-hover table-borderless table-danger align-middle"
        >
            <thead class="table-light">
                <caption>
                    CATALOGO DE PERSONAL
                </caption>
                <tr>
                    <th>ID</th>
                    <th>RFC</th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Licenciatura</th>
                    <th>Lictit</th>
                    <th>Especializacion</th>
                    <th>Esptit</th>
                    <th>Maestria</th>
                    <th>Maetit</th>
                    <th>Doctorado</th>
                    <th>Doctit</th>
                    <th>Fecha ingsep</th>
                    <th>Fecha ingins</th>
                    <th>Id depto</th>
                    <th>Id puesto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $personals as $personal )
                <tr
                    class="table-danger"
                >
                    <td scope="row">{{ $personal->id }}</td>
                    <td>{{ $personal->RFC }}</td>
                    <td>{{ $personal->nombres }}</td>
                    <td>{{ $personal->apellidop }}</td>
                    <td>{{ $personal->apellidom }}</td>
                    <td>{{ $personal->licenciatura }}</td>
                    <td>{{ $personal->lictic }}</td>
                    <td>{{ $personal->especializacion }}</td>
                    <td>{{ $personal->esptit }}</td>
                    <td>{{ $personal->maestria }}</td>
                    <td>{{ $personal->maetit }}</td>
                    <td>{{ $personal->doctorado }}</td>
                    <td>{{ $personal->doctit }}</td>
                    <td>{{ $personal->fechaingsep }}</td>
                    <td>{{ $personal->fechaingins }}</td>
                    <td>{{$personal->depto_id}}</td>
                    <td>{{$personal->puesto_id}}</td>
                    <td><a href="{{route('personals.edit',$personal->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('personals.show',$personal->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('personals.show',$personal->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$personals->links()}}
    </div>
