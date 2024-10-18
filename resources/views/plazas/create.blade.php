@extends('plantilla2')
@section('contenido1')
@include('plazas/tablahtml')
@endsection
    
@endsection


{{-- CONTENIDO2 --}}
@section('contenido2')
<h1>Insertando</h1> 
<form action="{{route('plazas.store')}}" method="POST">
  @csrf
    {{-- <div class="row mb-3">
      <label for="idPlaza" class="col-sm-3 col-form-label">ID</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="idPlaza" name="idPlaza">
      </div>
    </div> --}}

    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Grabar</button>
    
  </form>

@endsection


