@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset
<div class="table-responsive-md">
    <table class="table table-striped table-hover table-bordered table-primary">
        <thead class="table-dark">
            <tr>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre De la Carrera</th>
                        <th>Nombre Mediano</th>
                        <th>Nombre Corto</th>
                        <th>Departamento</th>
                        <th></th>
                        <th></th>
                        <th></th>
                     
                <th><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('Carreras.create')}}"
                    role="button"
                    >+</a
                >
                </th>
                    
            </tr>
        </thead>
        <tbody>
            @foreach ($carreras as $carrera)
        
    
            
            <tr class="">
            
                <td scope="row"> {{ $carrera->id }}  </td>
                <td>{{ $carrera->nombrecarrera }}  </td>
                <td>{{ $carrera->nombremediano}}  </td>
                <td>{{ $carrera->nombrecorto}}  </td>
                <td>{{ $carrera->depto->nombredepto }}  </td>
               <td> <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('Carreras.edit',$carrera->id)}}"
                role="button"
                >Editar</a
            ></td>
            <td>
                <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('Carreras.show',$carrera->id)}}"
                role="button"
                >Eliminar</a
            >  
            </td>
                <td>
                    <a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('Carreras.show',$carrera->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
                <td></td>
            </tr>
            @endforeach
           
        </tbody>
    </table>

    {{$carreras->links()}}

</div>