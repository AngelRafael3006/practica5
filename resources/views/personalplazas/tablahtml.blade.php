    {{--@dd($alumnos) --}}

    @if (session('mensaje'))
    <p class="text-primary">{{ session('mensaje') }}</p>
    @endif


    <a href="{{route('personalplazas.create')}}" class="btn button btn-primary">Nvo</a>

    <div
        class="table-responsive-sm"
    >
        <table
            class="table table-striped table-hover table-borderless table-danger align-middle"
        >
            <thead class="table-light">
                <caption>
                    CATALOGO DE Personal plazas
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Tipo nombramiento</th>
                    <th>Id plaza</th>
                    <th>Id personal</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ( $personalplazas as $personalplaza )
                <tr
                    class="table-danger"
                >
                    <td scope="row">{{ $personalplaza->id }}</td>
                    <td>{{ $personalplaza->tiponombramiento }}</td>
                    <td>{{$personalplaza->plaza_id}}</td>
                    <td>{{$personalplaza->personal_id}}</td>
                    <td><a href="{{route('personalplazas.edit',$personalplaza->id)}}" class="btn button btn-primary" >Ed</a></td>
                    <td><a href="{{route('personalplazas.show',$personalplaza->id)}}" class="btn button btn-primary" >X</a></td>
                    <td><a href="{{route('personalplazas.show',$personalplaza->id)}}" class="btn button btn-primary" >Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        {{$personalplazas->links()}}
    </div>
