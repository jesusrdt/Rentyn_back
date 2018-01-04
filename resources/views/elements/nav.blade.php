<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #1a171b">
  <a class="navbar-brand" href="#">
    <img src="/assets/img/logo-rentyn-blanco.png" width="100" height="30" alt="">
  </a>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link">Alquilar tus maquinaria</a>
      </li>
      <li class="navbar-item">
        <a class="nav-link">Ayuda</a>
      </li>
      
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
       <li class="nav-item">

        <a rel="alternate" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, ['lang',$localeCode], true) }} " class="nav-link" >
        {{ $properties['native'] }} </a>
       </li>
        @endforeach
        
    </ul>
  </div>
</nav>
