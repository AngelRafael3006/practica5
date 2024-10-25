    {{--@dd($alumnos) --}}
    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif

    <a href="{{route('deptos.create')}}" class="btn button btn-primary">Nvo</a>

    <div class="table-responsive-sm">
        <table class="table table-striped table-hover table-borderless table-warning align-middle">
            <thead class="table-light">
                <caption>
                    CATALOGO DE DEPTOS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Id departamento</th>
                    <th>Nombre de depto</th>
                    <th>Nombre mediano</th>
                    <th>Nombre corto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $deptos as $depto )
                <tr
                    class="table-warning"
                >
                    <td scope="row">{{ $depto->id }}</td>
                    <td>{{ $depto->iddepto }}</td>
                    <td>{{ $depto->nombredepto }}</td>
                    <td>{{ $depto->nombremediano }}</td>
                    <td>{{ $depto->nombrecorto }}</td>
                    <td><a href="{{route('deptos.edit',$depto->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('deptos.show',$depto->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('deptos.show',$depto->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$deptos->links()}}
    </div>
