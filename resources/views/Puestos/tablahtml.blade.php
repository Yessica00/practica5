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
                        <th scope="col">Nombre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                     
                <th><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('Puestos.create')}}"
                    role="button"
                    >+</a
                >
                </th>
                    
            </tr>
        </thead>
        <tbody>
            @foreach ($puestos as $puesto)
        
    
            
            <tr class="">
            
                <td scope="row"> {{ $puesto->id }}  </td>
                <td>{{ $puesto->nombre }}  </td>
               <td> <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('Puestos.edit',$puesto->id)}}"
                role="button"
                >Editar</a
            ></td>
            <td>
                <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('Puestos.show',$puesto->id)}}"
                role="button"
                >Eliminar</a
            >  
            </td>
                <td>
                    <a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('Puestos.show',$puesto->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
                <td></td>
            </tr>
            @endforeach
           
        </tbody>
    </table>

    {{$puestos->links()}}

</div>