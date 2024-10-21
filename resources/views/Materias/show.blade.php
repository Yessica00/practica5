@include('menu2')

@include('Materias/tablahtml')
@section('contenido1')


@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>VER TDOOS LOS DATOS</h1>
<form action="{{route('Materias.destroy',$materia)}}" method="POST">
  @csrf 
  
  <div class="row mb-3">
    <label for="nombremateria" class="col-sm-3 col-form-label">Nombre de Materia</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremateria" name="nombremateria" 
               value="{{ old('nombremateria', $materia->nombremateria ?? '') }}" {{$des}}>
        @error('nombremateria')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<!-- Campo para Nivel -->
<div class="row mb-3">
    <label for="nivel" class="col-sm-3 col-form-label">Nivel</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="nivel" name="nivel" 
               value="{{ old('nivel', $materia->nivel ?? '') }}" {{$des}}>
        @error('nivel')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<!-- Campo para NombreMediano -->
<div class="row mb-3">
    <label for="nombremediano" class="col-sm-3 col-form-label">Nombre Mediano</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="nombremediano" name="nombremediano" 
               value="{{ old('nombremediano', $materia->nombremediano ?? '') }}" {{$des}}>
        @error('nombremediano')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<!-- Campo para NombreCorto -->
<div class="row mb-3">
    <label for="nombrecorto" class="col-sm-3 col-form-label">Nombre Corto</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="nombrecorto" name="nombrecorto" 
               value="{{ old('nombrecorto', $materia->nombrecorto ?? '') }}" {{$des}}>
        @error('nombrecorto')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<!-- Campo para Modalidad -->
<div class="row mb-3">
    <label for="modalidad" class="col-sm-3 col-form-label">Modalidad</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="modalidad" name="modalidad" 
               value="{{ old('modalidad', $materia->modalidad ?? '') }}" {{$des}}>
        @error('modalidad')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<!-- Seleccionar Retícula -->
<div class="row mb-3">
    <label for="reticula_id" class="col-sm-3 col-form-label">Seleccionar Retícula</label>
    <div class="col-sm-9">
        <select name="reticula_id" id="reticula_id" class="form-control" {{ $des }}>
            <option value="">-- Seleccione una Retícula --</option>
            @foreach ($reticulas as $reticula)
                <option value="{{ $reticula->id }}" {{ $reticula->id == $materia->reticula_id ? 'selected' : '' }}>
                    {{ $reticula->descripcion }}
                </option>
            @endforeach
        </select>
        @error('reticula_id')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>




<button type="submit" class="btn btn-danger">Confirma la Eliminacion</button>
  <button type="submit" class="btn btn-primary">Grabar</button>
  
</form>

@endsections