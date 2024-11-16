    {{--@dd($alumnos) --}}
    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif

    <a href="{{route('lugares.create')}}" class="btn button btn-primary">Nvo</a>

    <div class="table-responsive-sm">
        <table class="table table-striped table-hover table-borderless table-warning align-middle">
            <thead class="table-light">
                <caption>
                    CATALOGO DE DEPTOS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Nombre de lugar</th>
                    <th>Nombre corto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $lugares as $lugar )
                <tr
                    class="table-warning"
                >
                    <td scope="row">{{ $lugar->id }}</td>
                    <td>{{ $lugar->nombrelugar }}</td>
                    <td>{{ $lugar->nombrecorto }}</td>
                    <td>{{$lugar->edificio_id}}</td>
                    <td><a href="{{route('lugares.edit',$lugar->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('lugares.show',$lugar->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('lugares.show',$lugar->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$lugares->links()}}
    </div>
