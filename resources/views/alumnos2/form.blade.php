@extends('plantilla2')
@section('contenido1')
@include('alumnos2/tablahtml')
@endsection

@section('contenido2')

@foreach ( $errors->all() as $error )
  <li>
    {{$error}}
  </li>
@endforeach
@if($accion=='C')
<form action="{{route('alumnos.store')}}" method="POST">
  <h1>Insertando en el Form</h1>
@elseif($accion=='E')
<form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
  <h1>EDITANDO EL FORM</h1>
  @elseif($accion=='D')
  <form action="{{route('alumnos.destroy', $alumno)}}" method="POST">
    <h1>ELIMINAR EN EL FORM</h1>

@endif
 
  @csrf
  <div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label">NoCtrl</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="noctrl" name="noctrl" value="{{old('noctrl',$alumno->noctrl)}}"{{$des}}>
      @error("noctrl")
      <p class="text-danger">Error en:{{$message}}</p>
      @enderror
    </div>
  </div>
<div class="form-group row">
      <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$alumno->nombre)}}"{{$des}}>
        @error("nombre")
        <p class="text-danger">Error en:{{$message}}</p>
        @enderror
      </div>
    </div>
    <div class="form-group row">
        <label for="apellidop" class="col-sm-2 col-form-label">Apellido Paterno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="apellidop" name="apellidop" value="{{old('apellidop',$alumno->apellidop)}}"{{$des}}>
          @error("apellidop")
          <p class="text-danger">Error en:{{$message}}</p>
        @enderror
        </div>

      </div>
      <div class="form-group row">
        <label for="apellidop" class="col-sm-2 col-form-label">Apellido Materno</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="apellidom" name="apellidom" value="{{old('apellidom',$alumno->apellidom)}}"{{$des}}>
          @error("apellidom")
          <p class="text-danger">Error en:{{$message}}</p>
        @enderror
        </div>
        
      </div>
      <div class="form-group row">
        <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
        <div class="col-sm-10">
          <select class="form-control" id="sexo" name="sexo" {{ $des }}>
            <option value="m" {{ old('sexo', $alumno->sexo) == 'm' ? 'selected' : '' }}>Masculino</option>
            <option value="f" {{ old('sexo', $alumno->sexo) == 'f' ? 'selected' : '' }}>Femenino</option>
          </select>
          @error("sexo")
            <p class="text-danger">Error en: {{ $message }}</p>
          @enderror
        </div>
      </div>

      </div>
      <label for="carrera_id">Seleccionar Carrera</label>
<select name="carrera_id" id="carrera_id" class="form-control" {{ $des }}>
    <option value="">-- Seleccione una Carrera --</option>
    @foreach ($carreras as $carrera)
        <option value="{{ $carrera->id }}" {{ $carrera->id == $alumno->carrera_id ? 'selected' : '' }}>
            {{ $carrera->nombrecarrera }}
        </option>
    @endforeach
</select>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">{{$txtbtn}}</button>
      </div>
    </div>
  </form>
@endsection