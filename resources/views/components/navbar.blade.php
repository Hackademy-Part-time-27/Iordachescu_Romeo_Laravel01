
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a style="color:indigo;" class="nav-link" href="{{ route('welcome') }}">Home Page</a>
        </li>
        <li class="nav-item">
        <a style="color:indigo;" class="nav-link" href="{{ route('articles') }}">Articles</a>
        </li>
        <li class="nav-item">
        <a style="color:indigo;" class="nav-link" href="{{ route('about-me') }}">About Me</a>
        </li>
        <li class="nav-item">
        <a style="color:indigo;" class="nav-link" href="{{ route('contacts') }}">Contatti</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> 
    </ul>
    </div>
  </div>
</nav>