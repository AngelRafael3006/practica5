    {{--@dd($alumnos) --}}
    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif

    <a href="{{route('reticulas.create')}}" class="btn button btn-primary">Nvo</a>

    <div class="table-responsive-sm">
        <table class="table table-striped table-hover table-borderless table-warning align-middle">
            <thead class="table-light">
                <caption>
                    CATALOGO DE RETICULAS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Id reticula</th>
                    <th>Descripcion</th>
                    <th>Fecha en vigor</th>
                    <th>Id carrera</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $reticulas as $reticula )
                <tr
                    class="table-warning"
                >
                    <td scope="row">{{ $reticula->id }}</td>
                    <td>{{ $reticula->idreticula }}</td>
                    <td>{{ $reticula->descripcion }}</td>
                    <td>{{ $reticula->fechaenvigor }}</td>
                    <td>{{ $reticula->carrera_id }}</td>
                    <td><a href="{{route('reticulas.edit',$reticula->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('reticulas.show',$reticula->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('reticulas.show',$reticula->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$reticulas->links()}}
    </div>
