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
        </ul>
        <div class="d-flex">
            @if(Auth::user())
               @if(Auth::user()->role == "Admin")
                <div class="dropdown">
                    <a class="btn dropdown-toggle m-1 p-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-tasks" aria-hidden="true"></i> Admin Menu
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/addproduct">Add Item</a></li>
                    <li><a class="dropdown-item" href="/transactions">Manage Transactions</a></li>
                    </ul>
                </div>
                @endif
                <a class="cart-icon m-1 p-2 text-decoration-none text-dark" href="/carts">
                    <i class="fas fa-shopping-cart" style="color: black"></i>
                    Cart
                </a>
                <a class="m-1" href="/logout">
                    <button class="btn btn-dark">Logout</button>
                </a>
            @else
                <a class="m-1" href="/login">
                    <button class="btn btn-dark">Login</button>
                </a>
                <a class="m-1" href="/register">
                    <button class="btn btn-light">Register</button>
                </a>
            @endif
        </div>
      </div>
    </div>
  </nav>
