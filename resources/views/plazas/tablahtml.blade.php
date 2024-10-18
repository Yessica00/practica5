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
                    href="{{route('plazas.create')}}"
                    role="button"
                    >+</a
                >
                </th>
                    
            </tr>
        </thead>
        <tbody>
            @foreach ($plazas as $plaza)
        
    
            
            <tr class="">
            
                <td scope="row"> {{ $plaza->id}}  </td>
                <td>{{ $plaza->nombre }}  </td>
               <td> <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('plazas.edit',$plaza->id)}}"
                role="button"
                >Editar</a
            ></td>
            <td>
                <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('plazas.show',$plaza->id)}}"
                role="button"
                >Eliminar</a
            >  
            </td>
                <td>
                    <a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('plazas.show',$plaza->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
                <td></td>
            </tr>
            @endforeach
           
        </tbody>
    </table>

    
    {{$plazas->links()}}
</div>