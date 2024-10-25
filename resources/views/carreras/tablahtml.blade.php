    {{--@dd($alumnos) --}}
    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif

    <a href="{{route('carreras.create')}}" class="btn button btn-primary">Nvo</a>

    <div class="table-responsive-sm">
        <table class="table table-striped table-hover table-borderless table-warning align-middle">
            <thead class="table-light">
                <caption>
                    CATALOGO DE CARRERAS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Id Carrera</th>
                    <th>Nombre de carrera</th>
                    <th>Nombre mediano</th>
                    <th>Nombre corto</th>
                    <th>Id depto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $carreras as $carrera )
                <tr
                    class="table-warning"
                >
                    <td scope="row">{{ $carrera->id }}</td>
                    <td>{{ $carrera->idcarrera }}</td>
                    <td>{{ $carrera->nombrecarrera }}</td>
                    <td>{{ $carrera->nombremediano }}</td>
                    <td>{{ $carrera->nombrecorto }}</td>
                    <td>{{$carrera->depto_id}}</td>
                    <td><a href="{{route('carreras.edit',$carrera->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('carreras.show',$carrera->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('carreras.show',$carrera->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$carreras->links()}}
    </div>
