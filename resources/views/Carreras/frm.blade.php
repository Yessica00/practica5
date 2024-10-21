@include('menu2')

@include('Carreras/tablahtml')
@section('contenido1')


@endsection

@section('contenido2')

@foreach ( $errors->all() as $error )
  <li>
    {{$error}}
   </li>
@endforeach
@if ($accion == 'C')
<h1>INSERTANDO</h1> 
  <form action="{{route('Carreras.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('Carreras.update',$carrera->id)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('Carreras.destroy',$carrera)}}" method="POST">
    
  @endif
  
  @csrf
   
    
  <div class="row mb-3">
    <label for="nombredepto" class="col-sm-3 col-form-label">Nombre de la Carrera</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nombrecarrera" name="nombrecarrera" value="{{old('nombrecarrera',$carrera->nombrecarrera)}}" {{$des}}>
      @error('nombrecarrera')
      <p class="text-danger">Error en: {{$message}}</p>
      @enderror
    </div>
    </div>
    <div class="row mb-3">
      <label for="nombremediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremediano" name="nombremediano" value="{{old('nombremediano',$carrera->nombremediano)}}" {{$des}}>
        @error('nombremediano')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>

    <div class="row mb-3">
      <label for="nombrecorto" class="col-sm-3 col-form-label">Nombre Corto</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" value="{{old('nombrecorto',$carrera->nombrecorto)}}" {{$des}}>
        @error('nombrecorto')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>
    <select name="depto_id" id="depto_id" class="form-control" {{ $des }}>
      <option value="">-- Seleccione una Carrera --</option>
      @foreach ($deptos as $depto)
          <option value="{{ $depto->id }}" {{ $depto->id == $carrera->depto_id ? 'selected' : '' }}>
              {{ $depto->nombredepto }}
          </option>
      @endforeach
  </select>
  
    <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
    
  </form>




