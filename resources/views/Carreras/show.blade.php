@include('menu2')

@include('Carreras/tablahtml')
@section('contenido1')


@endsection

@section('contenido2')

{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TDOOS LOS DATOS</h1>
<form action="{{route('Carreras.destroy',$carrera)}}" method="POST">
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
  <label for="depto_id">Departamento:</label>
  <select name="depto_id" id="depto_id" class="form-control" {{ $des }}>
    <option value="">-- Seleccione un Departamento --</option>
    @foreach ($deptos as $depto)
        <option value="{{ $depto->id }}" {{ $depto->id == $carrera->depto_id ? 'selected' : '' }}>
            {{ $depto->nombredepto }}
        </option>
    @endforeach
</select>
    <button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
    <a href="{{route('Carrera.index')}}" class="btn btn-primary">Regresar</a>
    
  </form>

@endsection


