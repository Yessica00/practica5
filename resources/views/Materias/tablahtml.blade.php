@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<div class="table-responsive-md">
    <table class="table table-striped table-hover table-bordered table-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Materia</th>
                <th>nivel</th>
                <th>NombreMediano</th>
                <th>NombreCorto</th>
                <th>Modalidad</th>
                <th>Reticula</th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="{{ route('Materias.create') }}"
                        role="button"
                    >+</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
                <tr class="">
                    <td scope="row">{{ $materia->id }}</td>
                    <td>{{ $materia->nombremateria }}</td>
                    <td>{{ $materia->nivel }}</td>
                    <td>{{ $materia->nombremediano }}</td>
                    <td>{{ $materia->nombrecorto }}</td>
                    <td>{{ $materia->modalidad}}</td>
                    <td>{{ $materia->reticula->descripcion }}</td>
                    <td>
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{ route('Materias.edit', $materia->id) }}"
                            role="button"
                        >Editar</a>
                    </td>
                    <td>
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{ route('Materias.show', $materia->id) }}"
                            role="button"
                        >Eliminar</a>
                    </td>
                    <td>
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="{{ route('Materias.show', $materia->id) }}"
                            role="button"
                        >Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$materias->links()}}
</div>
