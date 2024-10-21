@include('menu2')

@include('Reticulas/tablahtml')
@section('contenido1')


@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Editando</h1>
<form action="{{route('Reticulas.update',$reticula->id)}}" method="POST">
  @csrf

  <div class="row mb-3">
    <label for="descripcion" class="col-sm-3 col-form-label">Descripcion</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('nombre',$reticula->descripcion)}}" {{$des}}>
      @error('descripcion')
      <p class="text-danger">Error en: {{$message}}</p>
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label for="fechav" class="col-sm-3 col-form-label">Fecha en Vigor</label>
    <div class="col-sm-9">
        <input type="date" class="form-control" id="fechav" name="fechav" value="{{ old('fechav', $reticula->fechav ?? '') }}" {{$des}}>
        @error('fechav')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<label for="carrera_id">Seleccionar Carrera</label>
<select name="carrera_id" id="carrera_id" class="form-control" {{ $des }}>
    <option value="">-- Seleccione una Carrera --</option>
    @foreach ($carreras as $carrera)
        <option value="{{ $carrera->id }}" {{ $carrera->id == $reticula->carrera_id ? 'selected' : '' }}>
            {{ $carrera->nombrecarrera }}
        </option>
    @endforeach
</select>

  <button type="submit" class="btn btn-primary">Grabar</button>
  
</form>

@endsection