@include('menu2')

@include('Periodos/tablahtml')
@section('contenido1')


@endsection
@foreach ( $errors->all() as $error )
  <li>
    {{$error}}
   </li>
@endforeach
@if ($accion == 'C')
<h1>INSERTANDO</h1> 
  <form action="{{route('Periodos.store')}}" method="POST">
    

  @elseif ($accion == 'E')
  <h1>EDITANDO FRM</h1> 
  <form action="{{route('Periodos.update',$periodo->id)}}" method="POST">

    @elseif ($accion=='D')
    <h1>PARA ELIMINAR</h1> 
    <form action="{{route('Periodos.destroy',$periodo)}}" method="POST">
    
  @endif
  
  @csrf
   
  
  <div class="row mb-3">
    <label for="periodo" class="col-sm-3 col-form-label">Periodo</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="periodo" name="periodo" value="{{ old('periodo', $periodo->periodo ?? '') }}">
        @error('periodo')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $periodo->descripcion ?? '') }}">
        @error('descripcion')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="fechaini" class="col-sm-3 col-form-label">Fecha de Inicio</label>
    <div class="col-sm-9">
        <input type="date" class="form-control" id="fechaini" name="fechaini" value="{{ old('fechaini', $periodo->fechaini ?? '') }}">
        @error('fechaini')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="fechafin" class="col-sm-3 col-form-label">Fecha de Fin</label>
    <div class="col-sm-9">
        <input type="date" class="form-control" id="fechafin" name="fechafin" value="{{ old('fechafin', $periodo->fechafin ?? '') }}">
        @error('fechafin')
        <p class="text-danger">Error en: {{$message}}</p>
        @enderror
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
</form>