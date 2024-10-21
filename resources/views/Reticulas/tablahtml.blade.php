@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<div class="table-responsive-md">
    <table class="table table-striped table-hover table-bordered table-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th>Fecha Vigor</th>
                <th>Carrera</th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="{{ route('Reticulas.create') }}"
                        role="button"
                    >+</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reticulas as $reticula)
                <tr class="">
                    <td scope="row">{{ $reticula->id }}</td>
                    <td>{{ $reticula->descripcion }}</td>
                    <td>{{ $reticula->fechav }}</td>
                    <td>{{ $reticula->carrera->nombrecarrera }}</td>
                    <td>
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{ route('Reticulas.edit', $reticula->id) }}"
                            role="button"
                        >Editar</a>
                    </td>
                    <td>
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{ route('Reticulas.show', $reticula->id) }}"
                            role="button"
                        >Eliminar</a>
                    </td>
                    <td>
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{ route('Reticulas.show', $reticula->id) }}"
                            role="button"
                        >Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$reticulas->links()}}
</div>
