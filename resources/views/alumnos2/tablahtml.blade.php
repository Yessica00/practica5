@isset($mensaje)
<p>{{$mensaje}}</p>
@endisset


<div class="table-responsive-md">
    <table class="table table-striped table-hover table-bordered table-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">NoCtrl</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th></th>
                <th></th>
                <th></th>
                <th><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('alumnos.create')}}"
                    role="button"
                    >+</a
                >
                </th>
                    
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
        
    
            
            <tr class="">
                
                <td>{{$alumno->noctrl}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellidop}}</td>
                <td>{{$alumno->apellidom}}</td>
                <td>{{$alumno->sexo}}</td>
                
               <td> <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('alumnos.edit',$alumno->id)}}"
                role="button"
                >Editar</a
            ></td>
            <td>
                <a
                name=""
                id=""
                class="btn btn-primary"
                href="{{route('alumnos.show',$alumno->id)}}"
                role="button"
                >Eliminar</a
            >  
            </td>
                <td>
                    <a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="{{route('alumnos.show',$alumno->id)}}"
                    role="button"
                    >Ver</a
                >
                </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
    {{$alumnos->links()}}
</div>
