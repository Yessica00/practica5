@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<div class="table-responsive-md">
    <table class="table table-striped table-hover table-bordered table-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Periodo</th>
                <th>Descripcion</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="{{ route('Periodos.create') }}"
                        role="button"
                    >+</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($periodos as $periodo)
                <tr class="">
                    <td scope="row">{{ $periodo->id }}</td>
                    <td>{{ $periodo->periodo}}</td>
                    <td>{{ $periodo->descripcion}}</td>
                    <td>{{ $periodo->fechaini }}</td>
                    <td>{{ $periodo->fechafin }}</td>
                    
                    <td>
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{ route('Periodos.edit', $periodo->id) }}"
                            role="button"
                        >Editar</a>
                    </td>
                    <td>
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{ route('Periodos.show', $periodo->id) }}"
                            role="button"
                        >Eliminar</a>
                    </td>
                    <td>
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{ route('Periodos.show', $periodo->id) }}"
                            role="button"
                        >Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$periodos->links()}}
</div>
