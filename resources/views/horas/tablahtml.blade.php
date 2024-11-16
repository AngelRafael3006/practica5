    {{--@dd($alumnos) --}}
    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif

    <a href="{{route('horas.create')}}" class="btn button btn-primary">Nvo</a>

    <div class="table-responsive-sm">
        <table class="table table-striped table-hover table-borderless table-warning align-middle">
            <thead class="table-light">
                <caption>
                    CATALOGO DE HORAS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Hora inicio</th>
                    <th>Hora fin</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $horas as $hora )
                <tr
                    class="table-warning"
                >
                    <td scope="row">{{ $hora->id }}</td>
                    <td>{{ $hora->hora_ini }}</td>
                    <td>{{ $hora->hora_fin }}</td>
                    <td><a href="{{route('horas.edit',$hora->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('horas.show',$hora->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('horas.show',$hora->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$horas->links()}}
    </div>
