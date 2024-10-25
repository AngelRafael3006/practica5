    {{--@dd($alumnos) --}}
    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif

    <a href="{{route('periodos.create')}}" class="btn button btn-primary">Nvo</a>

    <div class="table-responsive-sm">
        <table class="table table-striped table-hover table-borderless table-warning align-middle">
            <thead class="table-light">
                <caption>
                    CATALOGO DE PERIODOS
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Id periodo</th>
                    <th>Periodo</th>
                    <th>Desccorta</th>
                    <th>Fecha Ini</th>
                    <th>Fecha Fin</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $periodos as $periodo )
                <tr
                    class="table-warning"
                >
                    <td scope="row">{{ $periodo->id }}</td>
                    <td>{{ $periodo->idperiodo }}</td>
                    <td>{{ $periodo->periodo }}</td>
                    <td>{{ $periodo->desccorta }}</td>
                    <td>{{ $periodo->fechaini }}</td>
                    <td>{{ $periodo->fechafin }}</td>
                    <td><a href="{{route('periodos.edit',$periodo->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('periodos.show',$periodo->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('periodos.show',$periodo->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$periodos->links()}}
    </div>
