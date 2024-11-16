    {{--@dd($alumnos) --}}
    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif

    <a href="{{route('edificios.create')}}" class="btn button btn-primary">Nvo</a>

    <div class="table-responsive-sm">
        <table class="table table-striped table-hover table-borderless table-warning align-middle">
            <thead class="table-light">
                <caption>
                    CATALOGO DE EDIFICIOS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Nombre de edificio</th>
                    <th>Nombre corto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $edificios as $edificio )
                <tr
                    class="table-warning"
                >
                    <td scope="row">{{ $edificio->id }}</td>
                    <td>{{ $edificio->nombreedificio }}</td>
                    <td>{{ $edificio->nombrecorto }}</td>
                    <td><a href="{{route('edificios.edit',$edificio->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('edificios.show',$edificio->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('edificios.show',$edificio->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$edificios->links()}}
    </div>
