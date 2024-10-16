<!-- Nav tabs -->
<ul class="nav nav-tabs" id="navId" role="tablist">
  
  
    @guest
    <li class="nav-item" role="presentation">
      <a href="{{ route('login') }}" class="nav-link">Login</a>
    </li>
    <li class="nav-item" role="presentation">
      <a href="{{ route('acerca') }}" class="nav-link">Acerca de Nosotros</a>
    </li>
    <li class="nav-item" role="presentation">
      <a href="{{ route('sobre') }}" class="nav-link">Contactanos</a>
    </li>
    <li class="nav-item" role="presentation">
      <a href="{{ route('ayuda') }}" class="nav-link">Ayuda</a>
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

    @auth
    <li class="nav-item" role="presentation">
      <a href="{{ route('register') }}" class="nav-link" >Register</a>
      </form>
    </li>
    @endauth
  
   
  
  <!-- Tab panes -->
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
  </div>
  

  
  @auth
    {{ Auth::user()->name }}
    <br>
    {{ Auth::user()->email }}
  @endauth
  
  <!-- CSS -->
  <style>
  .logout-link {
    background: none;
    border: none;
    color: #007bff;
    text-decoration: underline;
    padding: 0;
    font-size: 1rem;
    cursor: pointer;
  }
  
  .logout-link:hover {
    color: #0056b3;
    text-decoration: none;
  }
  
  /* Alineación del formulario dentro del menú de navegación */
  .form-inline {
    display: inline;
  }
  </style>
  