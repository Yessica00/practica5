<style>
  html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      display: flex;
      flex-direction: column;
  }

  body {
      min-height: 100vh;
  }

  footer {
      background-color: #e6e6e6;
      text-align: center;
      padding: 10px;
      margin-top: auto;
      width: 100%;
  }

  /* Estilo general del menú */
  .navbar-nav {
      position: relative;
  }

  /* Submenú de Catálogos - vertical debajo del menú */
  .dropdown-menu.catalogos {
      position: absolute;
      top: 100%;
      left: 0;
      display: none;
      flex-direction: column;
  }

  /* Submenú de Proyectos Individuales - horizontal */
  .dropdown-menu.proyectos,.dropdown-menu.horario {
      position: absolute;
      top: 100%;
      left: 0;
      display: none;
      flex-direction: row;
  }

  /* Mostrar submenús al pasar el ratón por el menú principal */
  .nav-item.dropdown:hover .dropdown-menu.catalogos,
  .nav-item.dropdown:hover .dropdown-menu.proyectos,.nav-item.dropdown:hover .dropdown-menu.horario {
      display: flex;
  }

  /* Ajustes de estilo para el menú horizontal */
  .dropdown-menu.proyectos,.dropdown-menu.horario > li {
      margin-right: 15px;
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js']);
  
</head>
<body>
   
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bienvenido</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Catálogos
            </a>
            <ul class="dropdown-menu catalogos">
              <li><a class="dropdown-item" href="{{route('Periodos.index')}}">Periodos</a></li>
              <li><a class="dropdown-item" href="{{route('plazas.index')}}">Plazas</a></li>
              <li><a class="dropdown-item" href="{{route('Puestos.index')}}">Puestos</a></li>
              <li><a class="dropdown-item" href="{{route('personal')}}">Personal</a></li>
              <li><a class="dropdown-item" href="{{route('Deptos.index')}}">Departamentos</a></li>
              <li><a class="dropdown-item" href="{{route('Carreras.index')}}">Carreras</a></li>
              <li><a class="dropdown-item" href="{{route('Reticulas.index')}}">Retículas</a></li>
              <li><a class="dropdown-item" href="{{route('Materias.index')}}">Materias</a></li>
              <li><a class="dropdown-item" href="{{route('alumnos.index')}}">Alumnos</a></li>
            </ul>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Horarios
              </a>
              <ul class="dropdown-menu horario">
                <li><a class="dropdown-item" href="{{route('docentes')}}">Docentes</a></li>
                <li><a class="dropdown-item" href="{{route('alumnos.index')}}">Alumno</a></li>
              
              </ul> 
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Proyectos Individuales
            </a>
            <ul class="dropdown-menu proyectos">
              <li><a class="dropdown-item" href="{{route('capacitacion')}}">Capacitación</a></li>
              <li><a class="dropdown-item" href="{{route('asesorias')}}">Asesorías Doc</a></li>
              <li><a class="dropdown-item" href="{{route('proyectos')}}">Proyectos</a></li>
              <li><a class="dropdown-item" href="{{route('materiald')}}">Material Didáctico</a></li>
              <li><a class="dropdown-item" href="{{route('docenciaein')}}">Docencia e Inv.</a></li>
              <li><a class="dropdown-item" href="{{route('asesoriae')}}">Asesoría Proyecto Ext</a></li>
              <li><a class="dropdown-item" href="{{route('asesoriass')}}">Asesoría a S.S.</a></li>
            </ul> 
          </li>

          <li class="nav-item" role="presentation">
              <a href="{{ route('instrumentacion') }}" class="nav-link">Instrumentación</a>
          </li>
          <li class="nav-item" role="presentation">
              <a href="{{ route('tutorias') }}" class="nav-link">Tutorías</a>
          </li>

          <li class="nav-item">
            <select class="form-select" aria-label="Seleccionar periodo">
                <option selected disabled>Periodo</option>
                <option value="ene-jun-24">Ene-Jun 24</option>
                <option value="ago-dic-24">Ago-Dic 24</option>
                <option value="ene-jun-25">Ene-Jun 25</option>
            </select>
          </li>

          @guest
          <li class="nav-item" role="presentation">
              <a href="{{ route('login') }}" class="nav-link">Login</a>
          </li>
          @endguest

          @auth
          <li class="nav-item" role="presentation">
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="form-inline">
                @csrf
                <button type="submit" class="logout-link nav-link">Logout</button>
              </form>
          </li>
          @endauth
        </ul>
      </div>
    </div>
    
  </nav>
        <div class="row">
            <div class="col">
                @yield("contenido2")
            </div>
        </div>
        <div class="row">
            <div class="col">
                @yield("contenido1")
            </div>
            
        </div>
       
        <div class="row">
            <div class="col">
                @yield("piePagina1")
            </div>
        </div>
    </body>
</html>
  
