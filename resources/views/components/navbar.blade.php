<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item" style="display: flex">
            <img src="{{ asset('storage/assets/logo.png') }}" style="width: 50px; height: 50px"/>
            <a class="nav-link active" aria-current="page" style="font-weight: bold; font-size: 20px" href="/">Winsoul</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <div class="d-flex">
            @if(Auth::user())
                <a class="m-1" href="/logout">
                    <button class="btn btn-dark">Logout</button>
                </a>
            @else
                <a class="m-1" href="/register">
                    <button class="btn btn-light">Register</button>
                </a>
                <a class="m-1" href="/login">
                    <button class="btn btn-dark">Login</button>
                </a>
            @endif
        </div>
      </div>
    </div>
  </nav>
