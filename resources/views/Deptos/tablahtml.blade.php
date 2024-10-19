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
                        <th scope="col">Nombre Del Departamento</th>
                        <th>Nombre Mediano</th>
                        <th>Nombre Corto</th>
                        <th></th>
                     
                <th><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('Deptos.create')}}"
                    role="button"
                    >+</a
                >
                </th>
                    
            </tr>
        </thead>
        <tbody>
            @foreach ($deptos as $depto)
        
    
            
            <tr class="">
            
                <td scope="row"> {{ $depto->id }}  </td>
                <td>{{ $depto->nombredepto }}  </td>
                <td>{{ $depto->nombremediano}}  </td>
                <td>{{ $depto->nombrecorto}}  </td>
               <td> <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('Depto.edit',$depto->id)}}"
                role="button"
                >Editar</a
            ></td>
            <td>
                <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('Deptos.show',$depto->id)}}"
                role="button"
                >Eliminar</a
            >  
            </td>
                <td>
                    <a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('Deptos.show',$depto->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
                <td></td>
            </tr>
            @endforeach
           
        </tbody>
    </table>

    {{$deptos->links()}}

</div>