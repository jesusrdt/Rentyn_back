<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="/assets/img/logo-rentyn-blanco.png" width="100" height="30" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('back') }}">@lang('layouts.home') <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tags.index') }}">Tags</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" id="change_lang">
        <option value="es">ES</option>
        <option value="en">EN</option>
      </select>
    </form>
  </div>
</nav>