<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-primary" href="#">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active {{ Request::is('/') ? 'active text-danger' : ''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active {{ Request::is('about') ? 'active text-danger' : ''}}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active {{ Request::is('service') ? 'active text-danger' : ''}} " href="/service">Service</a>
          </li>
        </ul>
        <form class="d-flex">
            <a class="btn btn-outline-success" href="{{ route('login')}}">Login</a>
        </form>


      </div>
    </div>
  </nav>
